import { Link } from 'react-router-dom';
import './Footer.css';

const Footer = () => (
  <footer className="site-footer">
    <div className="container footer-container">
      <div className="footer-grid">
        <div className="footer-col">
          <h3>About</h3>
          <ul>
            <li><Link to="#">About Us</Link></li>
            <li><Link to="#">Our Services</Link></li>
            <li><Link to="#">Our Branches</Link></li>
            <li><Link to="#">Careers</Link></li>
            <li><Link to="#">News</Link></li>
          </ul>
        </div>

        <div className="footer-col">
          <h3>Our Policy</h3>
          <ul>
            <li><Link to="#">Refund Policy</Link></li>
            <li><Link to="#">Privacy Policy</Link></li>
            <li><Link to="#">Terms &amp; Conditions</Link></li>
            <li><Link to="#">Payment Policy</Link></li>
            <li><Link to="#">More</Link></li>
          </ul>
        </div>

        <div className="footer-col">
          <h3>Social</h3>
          <ul>
            <li><a href="https://www.youtube.com" target="_blank" rel="noreferrer">Youtube</a></li>
            <li><a href="https://www.instagram.com" target="_blank" rel="noreferrer">Instagram</a></li>
            <li><a href="https://www.linkedin.com" target="_blank" rel="noreferrer">LinkedIn</a></li>
            <li><a href="https://www.twitter.com" target="_blank" rel="noreferrer">Twitter</a></li>
            <li><a href="https://www.whatsapp.com" target="_blank" rel="noreferrer">Whatsapp</a></li>
          </ul>
        </div>

        <div className="footer-col">
          <h3>More</h3>
          <ul>
            <li><Link to="#">Query</Link></li>
            <li><Link to="#">Complaint</Link></li>
            <li><Link to="#">Feedback</Link></li>
            <li><Link to="/raise">Ticket</Link></li>
            <li><Link to="/track">Track Status</Link></li>
          </ul>
        </div>

        <div className="footer-col footer-company-info">
          <h3>Indfes Internet Services (OPC) Pvt. Ltd.</h3>
          <p className="office-address">
            <strong>Registered office:</strong> 140, First Floor, Unnamed Road, Udhranpur, Hardoi, Uttar Pradesh-241124, India
          </p>
          <p className="contact-item"><strong>Email:</strong> care@insmart.online</p>
          <p className="contact-item"><strong>Phone:</strong> +91 8577897323</p>
        </div>
      </div>
      
      <div className="footer-bottom">
        <p>&copy; {new Date().getFullYear()} Indfes Internet Services. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
);

export default Footer;
