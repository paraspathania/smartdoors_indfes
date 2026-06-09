const fs = require('fs');
const path = require('path');
const mongoose = require('mongoose');
const bcrypt = require('bcryptjs');
require('dotenv').config();

const User = require('./models/User');
const Form = require('./models/Form');
const { Ticket, Refund, Payment, AppSupport } = require('./models/Support');

const MONGO_URI = process.env.MONGO_URI || 'mongodb://localhost:27017/smartdoors';

// Helper: parse values correctly
function parseVal(val) {
  if (val === 'NULL' || val === 'null' || val === '') return null;
  val = val.trim();
  // Strip outer quotes if present
  if ((val.startsWith("'") && val.endsWith("'")) || (val.startsWith('"') && val.endsWith('"'))) {
    val = val.slice(1, -1);
  }
  if ((val.startsWith('”') && val.endsWith('”')) || (val.startsWith('’') && val.endsWith('’'))) {
    val = val.slice(1, -1);
  }
  // Check if it's a number
  if (!isNaN(val) && val.trim() !== '') {
    return Number(val);
  }
  return val;
}

// Custom SQL INSERT statement parser
function parseSQL(sqlText) {
  const data = {};
  const regex = /INSERT\s+INTO\s+`(\w+)`\s*\(([^)]+)\)\s*VALUES\s*([\s\S]+?);/gi;
  let match;

  while ((match = regex.exec(sqlText)) !== null) {
    const tableName = match[1];
    const columns = match[2].split(',').map(c => c.replace(/`/g, '').trim());
    const valuesStr = match[3].trim();

    const rows = [];
    let currentRow = '';
    let inString = false;
    let stringChar = '';
    let parenthesisCount = 0;

    for (let i = 0; i < valuesStr.length; i++) {
      const char = valuesStr[i];
      if ((char === "'" || char === '"' || char === '”' || char === '’') && valuesStr[i-1] !== '\\') {
        if (!inString) {
          inString = true;
          stringChar = char;
        } else if (char === stringChar) {
          inString = false;
        }
      }
      if (!inString) {
        if (char === '(') parenthesisCount++;
        if (char === ')') parenthesisCount--;
      }
      currentRow += char;

      if (parenthesisCount === 0 && (char === ',' || i === valuesStr.length - 1)) {
        let rowClean = currentRow.trim();
        if (rowClean.endsWith(',')) rowClean = rowClean.slice(0, -1).trim();
        if (rowClean.startsWith('(') && rowClean.endsWith(')')) {
          rowClean = rowClean.slice(1, -1);
          rows.push(rowClean);
        }
        currentRow = '';
      }
    }

    const parsedRows = rows.map(row => {
      const vals = [];
      let currentVal = '';
      let insideString = false;
      let quoteChar = '';

      for (let i = 0; i < row.length; i++) {
        const char = row[i];
        if ((char === "'" || char === '"' || char === '”' || char === '’') && row[i-1] !== '\\') {
          if (!insideString) {
            insideString = true;
            quoteChar = char;
            continue;
          } else if (char === quoteChar) {
            insideString = false;
            continue;
          }
        }
        if (char === ',' && !insideString) {
          vals.push(parseVal(currentVal));
          currentVal = '';
        } else {
          currentVal += char;
        }
      }
      vals.push(parseVal(currentVal));

      const obj = {};
      columns.forEach((col, idx) => {
        obj[col] = vals[idx];
      });
      return obj;
    });

    data[tableName] = parsedRows;
  }
  return data;
}

async function seed() {
  try {
    console.log('⚡ Connecting to MongoDB...');
    await mongoose.connect(MONGO_URI);
    console.log('✅ Connected to MongoDB');

    // Clean existing database records
    console.log('🧹 Cleaning existing collections...');
    await User.deleteMany({});
    await Form.deleteMany({});
    await Ticket.deleteMany({});
    await Refund.deleteMany({});
    await Payment.deleteMany({});
    await AppSupport.deleteMany({});
    console.log('✨ Database cleaned');

    // Read SQL file
    const sqlPath = path.join(__dirname, '../infes_ (3).sql');
    console.log(`📖 Reading SQL file from: ${sqlPath}`);
    const sqlContent = fs.readFileSync(sqlPath, 'utf8');

    // Parse SQL file
    console.log('⚙️ Parsing SQL INSERT statements...');
    const parsedData = parseSQL(sqlContent);
    console.log('📊 Tables found in SQL file:', Object.keys(parsedData));

    // 1. Seed Users
    const userMap = new Map(); // maps email/mobile to Mongo User ID
    const sqlUsers = parsedData['user_register'] || [];
    console.log(`👤 Seeding ${sqlUsers.length} users...`);

    const salt = await bcrypt.genSalt(10);
    const hashedPass12345 = await bcrypt.hash('12345', salt);
    const hashedPass123 = await bcrypt.hash('123', salt);
    const hashedDefault = await bcrypt.hash('password123', salt);

    for (const u of sqlUsers) {
      let pw = hashedDefault;
      // Map standard md5 values to direct bcrypt-hashed versions
      if (u.password === '827ccb0eea8a706c4c34a16891f84e7b') pw = hashedPass12345;
      else if (u.password === '202cb962ac59075b964b07152d234b70') pw = hashedPass123;

      const newUser = await User.create({
        name: u.name,
        mobile: String(u.mobile),
        email: u.email.toLowerCase(),
        password: pw,
        status: u.status || 'Active',
        createdAt: u.created_at ? new Date(u.created_at) : new Date(),
      });
      userMap.set(u.email.toLowerCase(), newUser._id);
      userMap.set(String(u.mobile), newUser._id);
    }
    console.log('✅ Users seeded successfully');

    // Helper to find userId
    const getUserId = (email, phone) => {
      if (email && userMap.has(email.toLowerCase())) return userMap.get(email.toLowerCase());
      if (phone && userMap.has(String(phone))) return userMap.get(String(phone));
      // Fallback: use first user ID in map or a default ObjectID
      if (userMap.size > 0) return userMap.values().next().value;
      return new mongoose.Types.ObjectId();
    };

    // 2. Seed Forms
    const formTables = [
      { table: 'user_form_accounting', type: 'accounting', emailField: 'account_email', phoneField: 'account_phone' },
      { table: 'user_form_agri', type: 'agri', emailField: 'agri_email', phoneField: 'agri_phone' },
      { table: 'user_form_district', type: 'district', emailField: 'form_email', phoneField: 'form_mobile' },
      { table: 'user_form_individual', type: 'individual', emailField: 'email', phoneField: 'individual_phone' },
      { table: 'user_form_legal', type: 'legal', emailField: 'legal_email', phoneField: 'legal_phone' },
      { table: 'user_form_mca', type: 'mca', emailField: 'mca_email', phoneField: 'mca_phone' },
      { table: 'user_form_msme', type: 'msme', emailField: 'msme_email', phoneField: 'msme_phone' },
      { table: 'user_form_pension', type: 'pension', emailField: 'pension_email', phoneField: 'pension_phone' },
      { table: 'user_form_roc', type: 'roc', emailField: 'roc_email', phoneField: 'roc_phone' },
      { table: 'user_form_student', type: 'student', emailField: 'email', phoneField: 'student_phone' }
    ];

    for (const ft of formTables) {
      const rows = parsedData[ft.table] || [];
      if (rows.length === 0) continue;

      console.log(`📝 Seeding ${rows.length} records for ${ft.table}...`);
      for (const row of rows) {
        const id = row.id;
        const status = row.status || 'Pending for Validation';
        const createdAt = row.created_at || row.student_created_at || new Date();
        const email = row[ft.emailField] || 'care@insmart.online';
        const phone = row[ft.phoneField] || '';

        // Extract form data fields
        const formData = { ...row };
        delete formData.id;
        delete formData.status;
        delete formData.created_at;
        delete formData.student_created_at;

        // Generate arnNumber (keep id if large, or format it)
        const arnNumber = `${ft.type.toUpperCase()}-${id}`;

        await Form.create({
          arnNumber,
          formType: ft.type,
          userId: getUserId(email, phone),
          email,
          status,
          formData,
          createdAt: new Date(createdAt),
        });
      }
    }
    console.log('✅ Service forms seeded successfully');

    // 3. Seed Support Tickets
    const sqlTickets = parsedData['raise_ticket'] || [];
    console.log(`🎫 Seeding ${sqlTickets.length} raise_ticket records...`);
    for (const t of sqlTickets) {
      await Ticket.create({
        userId: getUserId(t.r_email, null),
        r_email: t.r_email,
        r_service: t.r_service,
        r_des: t.r_des,
        status: t.status || 'Active',
        createdAt: t.created_at ? new Date(t.created_at) : new Date(),
      });
    }

    const sqlRefunds = parsedData['refund_support'] || [];
    console.log(`💰 Seeding ${sqlRefunds.length} refund_support records...`);
    for (const r of sqlRefunds) {
      await Refund.create({
        userId: getUserId(r.refund_email, null),
        refund_email: r.refund_email,
        refund_pay: r.refund_pay,
        query_types: r.query_types,
        arn_no: r.arn_no,
        issue_refund: r.issue_refund,
        status: r.status || 'Active',
        createdAt: r.created_at ? new Date(r.created_at) : new Date(),
      });
    }

    const sqlPayments = parsedData['payment_support'] || [];
    console.log(`💳 Seeding ${sqlPayments.length} payment_support records...`);
    for (const p of sqlPayments) {
      await Payment.create({
        userId: getUserId(p.pay_email, null),
        pay_email: p.pay_email,
        refund: p.refund,
        type: p.type,
        arn: p.arn,
        issue: p.issue || '',
        status: p.status || 'Active',
        createdAt: p.created_at ? new Date(p.created_at) : new Date(),
      });
    }

    const sqlAppSupports = parsedData['application_support'] || [];
    console.log(`📲 Seeding ${sqlAppSupports.length} application_support records...`);
    for (const a of sqlAppSupports) {
      await AppSupport.create({
        userId: getUserId(a.app_email, null),
        app_email: a.app_email,
        application: a.application,
        app_types: a.app_types,
        app_arn: a.app_arn,
        issue_application: a.issue_application,
        status: a.status || 'Active',
        createdAt: a.created_at ? new Date(a.created_at) : new Date(),
      });
    }

    console.log('🎉 Seeding completed successfully!');
  } catch (err) {
    console.error('❌ Error during seeding:', err);
  } finally {
    mongoose.disconnect();
  }
}

seed();
