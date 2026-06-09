require('dotenv').config();
const express = require('express');
const cors = require('cors');
const mongoose = require('mongoose');

const authRoutes    = require('./routes/auth');
const formRoutes    = require('./routes/forms');
const trackRoutes   = require('./routes/track');
const supportRoutes = require('./routes/support');

const app = express();

// ── Middleware ──────────────────────────────────────────────────────────────
app.use(cors({ origin: 'http://localhost:5173', credentials: true }));
app.use(express.json());

// ── Routes ──────────────────────────────────────────────────────────────────
app.use('/api/auth',    authRoutes);
app.use('/api/forms',   formRoutes);
app.use('/api/track',   trackRoutes);
app.use('/api/support', supportRoutes);

// ── Health check ─────────────────────────────────────────────────────────────
app.get('/', (req, res) => res.json({ message: 'Indfes Smartdoors API running ✅' }));

// ── DB + Server ───────────────────────────────────────────────────────────────
mongoose
  .connect(process.env.MONGO_URI)
  .then(() => {
    console.log('✅ MongoDB connected');
    app.listen(process.env.PORT, () =>
      console.log(`🚀 Server running on port ${process.env.PORT}`)
    );
  })
  .catch((err) => {
    console.error('❌ MongoDB connection failed:', err.message);
    process.exit(1);
  });
