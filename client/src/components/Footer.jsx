import { Link } from 'react-router-dom';
import { useAuth } from '../context/AuthContext';
import './Footer.css';

const Footer = () => {
  const { user } = useAuth();

  return (
    <footer className="site-footer">
      <div className="container footer-container">
        <div className="footer-grid">
          {/* Column 1: Company & Contact */}
          <div className="footer-col footer-brand-col">
            <h3 className="footer-brand-title">Smartdoors</h3>
            <p className="footer-brand-desc">
              Simplifying company registrations, compliance services, affidavits, and government documentation filings through a streamlined digital workflow.
            </p>
            <div className="footer-contact-info">
              <p><strong>Email:</strong> care@insmart.online</p>
              <p><strong>Phone:</strong> +91 8577897323</p>
            </div>
          </div>

          {/* Column 2: Quick Links */}
          <div className="footer-col">
            <h3>Quick Links</h3>
            <ul>
              <li><Link to={user ? '/dashboard' : '/login'}>Start Application</Link></li>
              <li><Link to={user ? '/track' : '/login'}>Track Status</Link></li>
              <li><Link to={user ? '/raise' : '/login'}>Open Ticket</Link></li>
              <li><Link to={user ? '/refunds' : '/login'}>Policies</Link></li>
            </ul>
          </div>

          {/* Column 3: Registered Office */}
          <div className="footer-col footer-office-col">
            <h3>Registered Office</h3>
            <p className="office-company">Indfes Internet Services (OPC) Pvt. Ltd.</p>
            <p className="office-address">
              140, First Floor, Udhranpur, Hardoi, Uttar Pradesh - 241124, India
            </p>
            <p className="office-info">
              CIN: U74999UP2021OPC147852
            </p>
          </div>
        </div>
        
        <div className="footer-bottom">
          <p>&copy; {new Date().getFullYear()} Indfes Internet Services. All Rights Reserved.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
