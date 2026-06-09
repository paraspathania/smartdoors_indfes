import { Link } from 'react-router-dom';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import { useAuth } from '../context/AuthContext';
import './Dashboard.css';

const services = [
  { 
    img: '/mca.png', 
    label: 'MCA & Company Registration', 
    desc: 'Incorporate Private Limited, Public Limited, OPC, LLP, or Proprietorships, and file GST applications.',
    to: '/forms/mca' 
  },
  { 
    img: '/pension.png', 
    label: 'Pension Services', 
    desc: 'Apply for government pension schemes including Old Age, Widow, and Physically Handicapped pensions.',
    to: '/forms/pension' 
  },
  { 
    img: '/msme.png', 
    label: 'MSME & Business Licensing', 
    desc: 'Obtain Udyam/MSME registrations, apply for ISO certifications, and trademark filings.',
    to: '/forms/msme' 
  },
  { 
    img: '/individual.png', 
    label: 'Individual & E-KYC Services', 
    desc: 'Apply for or update PAN cards, Aadhaar cards, Voter IDs, Passports, and register grievances.',
    to: '/forms/individual' 
  },
  { 
    img: '/student.png', 
    label: 'Student Services & Affidavits', 
    desc: 'Draft affidavits for GAP certificates, single girl child support, income proofs, or education loans.',
    to: '/forms/student' 
  },
  { 
    img: '/rocs.png', 
    label: 'ROC Compliance & Filing', 
    desc: 'File annual returns and complete compliance filings for OPC, LLP, and PVT LTD companies.',
    to: '/forms/roc' 
  },
  { 
    img: '/agro.png', 
    label: 'GOI Government Services', 
    desc: 'Apply for Kisan Samman Nidhi, PM Awas Yojana, or new LPG gas connection requests.',
    to: '/forms/goi' 
  },
  { 
    img: '/agri.png', 
    label: 'Agriculture & Electricity', 
    desc: 'Request agricultural electricity connections and register properties for farming support.',
    to: '/forms/agri' 
  },
  { 
    img: '/legal.png', 
    label: 'Legal Documentation', 
    desc: 'Draft residential rent agreements, affidavits of proof, and power of attorney forms.',
    to: '/forms/legal' 
  },
  { 
    img: '/taxation.png', 
    label: 'Accounting & Taxation', 
    desc: 'File Income Tax Returns (ITR), upload monthly GST returns, and seek auditing assistance.',
    to: '/forms/accounting' 
  },
  { 
    img: '/edistrict.png', 
    label: 'E-District Certificates', 
    desc: 'Apply for government Domicile, Income, Caste, Character, and EWS certificates.',
    to: '/forms/district' 
  },
  { 
    img: '/comfed.png', 
    label: 'Helpdesk & Support', 
    desc: 'Raise service tickets, view your support history, check payment issues, or request refunds.',
    to: '/raise' 
  },
];

const Dashboard = () => {
  const { user } = useAuth();

  return (
    <>
      <title>Dashboard – Indfes Smartdoors</title>
      <Navbar />
      <div className="page-body bg-gray-50">
        
        {/* ── Dashboard Header ── */}
        <section className="dash-header-section">
          <div className="container">
            <div className="dash-welcome-card">
              <div className="dash-welcome-text">
                <h2>Welcome Back, {user?.name || 'User'}</h2>
                <p>Manage and submit your business registrations, compliance certificates, and personal documentation filings from a single dashboard.</p>
              </div>
              <div className="dash-welcome-actions">
                <Link to="/track" className="btn btn-primary">Track Existing Application</Link>
              </div>
            </div>
          </div>
        </section>

        {/* ── Services Catalog ── */}
        <section className="dash-services-section">
          <div className="container">
            <div className="dash-grid">
              {services.map(({ img, label, desc, to }) => (
                <div className="dash-card" key={label}>
                  <div className="dash-card-content">
                    <div className="dash-card-icon">
                      <img src={img} alt={label} />
                    </div>
                    <h3>{label}</h3>
                    <p>{desc}</p>
                  </div>
                  <div className="dash-card-footer">
                    <Link to={to} className="dash-card-btn">Apply / Start &rarr;</Link>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </section>

        <Footer />
      </div>
    </>
  );
};

export default Dashboard;
