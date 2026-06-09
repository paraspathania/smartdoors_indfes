import { Link } from 'react-router-dom';
import './Footer.css';

const Footer = () => (
  <>
    <div className="bluelinea"></div>
    <div className="foot">
      <div id="optiondiv">
        <center><h3>About</h3></center>
        <ul type="none">
          <li><Link to="#">About Us</Link></li>
          <li><Link to="#">Our Services</Link></li>
          <li><Link to="#">Our Branches</Link></li>
          <li><Link to="#">Careers</Link></li>
          <li><Link to="#">News</Link></li>
        </ul>
      </div>

      <div id="optiondiv">
        <center><h3>Our Policy</h3></center>
        <ul type="none">
          <li><Link to="#">Refund Policy</Link></li>
          <li><Link to="#">Privacy Policy</Link></li>
          <li><Link to="#">Terms &amp; Conditions</Link></li>
          <li><Link to="#">Payment Policy</Link></li>
          <li><Link to="#">More</Link></li>
        </ul>
      </div>

      <div id="optiondiv">
        <center><h3>Social</h3></center>
        <ul type="none">
          <li><a href="https://www.youtube.com" target="_blank" rel="noreferrer">Youtube</a></li>
          <li><a href="https://www.instagram.com" target="_blank" rel="noreferrer">Instagram</a></li>
          <li><a href="https://www.linkedin.com" target="_blank" rel="noreferrer">LinkedIn</a></li>
          <li><a href="https://www.twitter.com" target="_blank" rel="noreferrer">Twitter</a></li>
          <li><a href="https://www.whatsapp.com" target="_blank" rel="noreferrer">Whatsapp</a></li>
        </ul>
      </div>

      <div id="optiondiv">
        <center><h3>More</h3></center>
        <ul type="none">
          <li><Link to="#">Query</Link></li>
          <li><Link to="#">Complaint</Link></li>
          <li><Link to="#">Feedback</Link></li>
          <li><Link to="/raise">Ticket</Link></li>
          <li><Link to="/track">Track Status</Link></li>
        </ul>
      </div>

      <div id="optiondivb">
        <p id="title">Indfes Internet Services (OPC) Pvt. Ltd.</p><br />
        <p id="ro">
          <b>Registered office:</b>&nbsp;140, First Floor, Unnamed Road, Udhranpur,<br />
          Hardoi<br />Uttar Pradesh-241124,<br />India
        </p><br />
        <p><b>Email:</b> care@insmart.online</p>
        <p><b>Phone:&nbsp;</b>+91 8577897323</p>
      </div>
    </div>

    <div className="bottomn">
      <h5><center>All Rights reserved by @indfes.com 2023|2024.</center></h5>
    </div>
  </>
);

export default Footer;
