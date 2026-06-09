import { Link } from 'react-router-dom';
import { useAuth } from '../context/AuthContext';
import './Navbar.css';

const Navbar = () => {
  const { user, logout } = useAuth();

  const handleLogout = async () => {
    try {
      await logout();
    } catch (err) {
      console.error('Logout failed:', err);
    }
  };

  return (
    <>
      {/* ── Top branding and user identity bar ───────────────── */}
      <div className="topbar">
        <div className="topbar-brand">
          <h3>Indfes Smartdoors</h3>
          <p>Digital Registration & Compliance Platform</p>
        </div>
        {user && (
          <span className="welcomeinfo">
            <b>Welcome: </b>{user.name}
          </span>
        )}
      </div>

      {/* ── Mobile Navigation Bar ──────────────────────────────── */}
      <div className="mobilenav">
        <ul type="none">
          <li><Link to="/services"><i className='bx bx-grid-alt'></i> Browse</Link></li>
          <li><Link to="/"><i className='bx bx-home'></i> Home</Link></li>
          <li><Link to={user ? '/dashboard' : '/login'}><i className='bx bx-cart-download'></i> Apply</Link></li>
          <li><Link to={user ? '/track' : '/login'}><i className='bx bxs-downvote'></i> Track</Link></li>
          <li><Link to={user ? '/raise' : '/login'}><i className='bx bxs-help-circle'></i> Help</Link></li>
          {user
            ? <li onClick={handleLogout} style={{cursor:'pointer'}}><i className='bx bx-log-out'></i> Logout</li>
            : <li><Link to="/login"><i className='bx bx-log-in'></i> Login</Link></li>
          }
        </ul>
      </div>

      {/* ── Desktop Category Navigation Menu ──────────────────── */}
      <div className="menubar">
        <div className="menub">
          <div className="dropdown classic">
            <button className="dropbtn">Start Business</button>
            <div className="dropdown-content">
              <ul type="none">
                {['Private Limited Company','Public Limited Company','Limited Liability Partnership','One Person Company',
                  'Proprietorship','ISO Certification','Copyright Certification','GST Registration',
                  'MSME Registration','Trademark Registration','Startup India Registration'
                ].map(s => <li key={s}><Link to={user ? '/forms/mca' : '/login'}>{s}</Link></li>)}
              </ul>
            </div>
          </div>

          <div className="dropdown classic">
            <button className="dropbtn">ROC | Compliance</button>
            <div className="dropdown-content">
              <ul type="none">
                {['PVT LTD ROC | AMC','OPC ROC | AMC','LLP ROC | AMC','Return Filing Pvt Ltd',
                  'Return Filing OPC','Return Filing LLP','GST Return Filing',
                  'Income Tax Return Filing','Statutory & Audit'
                ].map(s => <li key={s}><Link to={user ? '/forms/roc' : '/login'}>{s}</Link></li>)}
              </ul>
            </div>
          </div>

          <div className="dropdown classic">
            <button className="dropbtn">Student Services</button>
            <div className="dropdown-content">
              <ul type="none">
                {['GAP Certificate','Single Girl Child','Date of Birth Affidavit','Proof of Income Affidavit',
                  'Change of Name Affidavit','Proof of Address Affidavit','No Criminal Record Affidavit',
                  'Education Loan Affidavit'
                ].map(s => <li key={s}><Link to={user ? '/forms/student' : '/login'}>{s}</Link></li>)}
              </ul>
            </div>
          </div>

          <div className="dropdown classic">
            <button className="dropbtn">E-District</button>
            <div className="dropdown-content">
              <ul type="none">
                {['Domicile Certificate','Income Certificate','Caste Certificate','Character Certificate','EWS Certificate']
                  .map(s => <li key={s}><Link to={user ? '/forms/district' : '/login'}>{s}</Link></li>)}
              </ul>
            </div>
          </div>

          <div className="dropdown classic">
            <button className="dropbtn">Services</button>
            <div className="dropdown-content">
              <ul type="none">
                {['Electricity Connection','LPG Connection','Widow Pension','Old Age Pension',
                  'Physically Handicapped Pension','Residential Rent Agreement'
                ].map((s, i) => (
                  <li key={s}><Link to={user ? (i >= 2 && i <= 4 ? '/forms/pension' : '/forms/agri') : '/login'}>{s}</Link></li>
                ))}
              </ul>
            </div>
          </div>

          <div className="dropdown classic">
            <button className="dropbtn">Individual</button>
            <div className="dropdown-content">
              <ul type="none">
                {['Aadhar Update (E-KYC)','Pan Card (E-KYC)','Driving License (E-KYC)',
                  'Passport Services (E-KYC)','Voter ID','CPGRMS Grievance Registration'
                ].map(s => <li key={s}><Link to={user ? '/forms/individual' : '/login'}>{s}</Link></li>)}
              </ul>
            </div>
          </div>
        </div>

        <div className="menuc">
          <ul type="none">
            <li><Link to="/services" className="nav-browse-cta">Browse All Services</Link></li>
            {user
              ? <li onClick={handleLogout} style={{cursor:'pointer', display: 'inline-flex', alignItems: 'center'}}><i className='bx bx-log-out'></i> Logout</li>
              : <li><Link to="/login" style={{display: 'inline-flex', alignItems: 'center'}}><i className='bx bx-log-in'></i> Login</Link></li>
            }
            <li><Link to="/" style={{display: 'inline-flex', alignItems: 'center'}}><i className='bx bxs-home'></i> Home</Link></li>
          </ul>
        </div>
      </div>
    </>
  );
};

export default Navbar;
