import { Link } from 'react-router-dom';
import Navbar from '../components/Navbar';
import Carousel from '../components/Carousel';
import Footer from '../components/Footer';
import { useAuth } from '../context/AuthContext';
import './Home.css';
import './Dashboard.css';

const services = [
  { img: '/mca.png',        label: 'MCA / Company',   to: '/forms/mca'        },
  { img: '/pension.png',    label: 'Pension',          to: '/forms/pension'    },
  { img: '/msme.png',       label: 'MSME',             to: '/forms/msme'       },
  { img: '/individual.png', label: 'Individual',       to: '/forms/individual' },
  { img: '/student.png',    label: 'Student Services', to: '/forms/student'    },
  { img: '/rocs.png',       label: 'ROC Compliance',   to: '/forms/roc'        },
  { img: '/agro.png',       label: 'GOI / Agri',       to: '/forms/goi'        },
  { img: '/agri.png',       label: 'Agriculture',      to: '/forms/agri'       },
  { img: '/legal.png',      label: 'Legal',            to: '/forms/legal'      },
  { img: '/taxation.png',   label: 'Accounting / Tax', to: '/forms/accounting' },
  { img: '/edistrict.png',  label: 'E-District',       to: '/forms/district'   },
  { img: '/comfed.png',     label: 'Support Ticket',   to: '/raise'            },
];

const Dashboard = () => {
  const { user } = useAuth();

  return (
    <>
      <title>Dashboard – Indfes Smartdoors</title>
      <Navbar />
      <div className="page-body">
        <Carousel />

        <div className="contentarea dash-content">
          <ul type="none">
            {services.map(({ img, label, to }) => (
              <li id="option" key={label}>
                <Link to={to}>
                  <img id="sour" src={img} alt={label} height="350px" width="350px" />
                </Link>
              </li>
            ))}
          </ul>
        </div>

        <Footer />
      </div>
    </>
  );
};

export default Dashboard;
