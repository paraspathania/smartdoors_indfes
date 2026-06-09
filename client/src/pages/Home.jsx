import { Link } from 'react-router-dom';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import Carousel from '../components/Carousel';
import './Home.css';

const services = [
  { img: '/mca.png',        label: 'MCA / Company',       to: '/login' },
  { img: '/pension.png',    label: 'Pension',              to: '/login' },
  { img: '/msme.png',       label: 'MSME',                 to: '/login' },
  { img: '/individual.png', label: 'Individual',           to: '/login' },
  { img: '/student.png',    label: 'Student Services',     to: '/login' },
];

const Home = () => (
  <>
    <title>Indfes Smartdoors – You Think We Prepare</title>
    <Navbar />
    <div className="page-body">
      <Carousel />

      <div className="contentarea">
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

export default Home;
