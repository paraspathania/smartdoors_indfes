import { useState } from 'react';
import { Link } from 'react-router-dom';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import { useAuth } from '../context/AuthContext';
import './Home.css';

const services = [
  {
    img: '/mca.png',
    title: 'MCA & Company Registration',
    desc: 'Incorporate Private Limited, Public Limited, OPC, LLP, or Proprietorships, and manage registrations.',
    items: ['Pvt Ltd & LLP Incorporation', 'One Person Company (OPC)', 'Proprietorship Setup'],
    timeline: 'Timeline: 3-7 Working Days',
    to: '/forms/mca'
  },
  {
    img: '/rocs.png',
    title: 'ROC Compliance & Filing',
    desc: 'File annual returns and complete compliance filings for OPC, LLP, and PVT LTD companies.',
    items: ['Annual Return Filings', 'ROC AMC Compliance', 'Director KYC Updates'],
    timeline: 'Timeline: 5-10 Working Days',
    to: '/forms/roc'
  },
  {
    img: '/msme.png',
    title: 'MSME & Business Licensing',
    desc: 'Register business entities, obtain MSME/Udyam registrations, and apply for ISO/Trademark certifications.',
    items: ['MSME / Udyam Registration', 'ISO Certification Support', 'Trademark & Copyright filings'],
    timeline: 'Timeline: 2-4 Working Days',
    to: '/forms/msme'
  },
  {
    img: '/taxation.png',
    title: 'Accounting & Taxation',
    desc: 'File Income Tax Returns (ITR), upload monthly GST returns, and seek professional auditing assistance.',
    items: ['GST Return Filing', 'Income Tax Return (ITR)', 'Statutory & Audit Support'],
    timeline: 'Timeline: 3-5 Working Days',
    to: '/forms/accounting'
  },
  {
    img: '/edistrict.png',
    title: 'E-District Certificates',
    desc: 'Apply for state government certified Domicile, Income, Caste, Character, and EWS certificates.',
    items: ['Domicile & Caste Certificates', 'Income & Character Certificates', 'EWS Certification'],
    timeline: 'Timeline: 7-15 Working Days',
    to: '/forms/district'
  },
  {
    img: '/pension.png',
    title: 'Pension Services',
    desc: 'Apply for government pension schemes, including Old Age, Widow, and Physically Handicapped pensions.',
    items: ['Old Age Pension Scheme', 'Widow Pension Scheme', 'Physically Handicapped Pension'],
    timeline: 'Timeline: 15-30 Working Days',
    to: '/forms/pension'
  },
  {
    img: '/student.png',
    title: 'Student Services & Affidavits',
    desc: 'Draft affidavits for single girl child support, GAP certificate, income proof, address validation, or loans.',
    items: ['GAP Certificates', 'Single Girl Child Affidavits', 'Income / Address Proof Affidavits'],
    timeline: 'Timeline: 1-3 Working Days',
    to: '/forms/student'
  },
  {
    img: '/individual.png',
    title: 'Individual & E-KYC Services',
    desc: 'Apply for or update PAN cards, Aadhaar details, Voter IDs, Passports, and Driving Licenses.',
    items: ['Aadhaar & PAN Updates', 'Passport & Driving License', 'Voter ID Card Services'],
    timeline: 'Timeline: 5-15 Working Days',
    to: '/forms/individual'
  },
  {
    img: '/agro.png',
    title: 'GOI Government Services',
    desc: 'Apply for Kisan Samman Nidhi, PM Awas Yojana, or new LPG gas connection requests.',
    items: ['Kisan Samman Nidhi', 'PM Awas Yojana', 'New LPG Gas Connection'],
    timeline: 'Timeline: 10-20 Working Days',
    to: '/forms/goi'
  },
  {
    img: '/agri.png',
    title: 'Agriculture & Electricity',
    desc: 'Request agricultural electricity connections and register properties for farming support.',
    items: ['Agri Electricity Connection', 'Farming Support Registration', 'Property Validation Documents'],
    timeline: 'Timeline: 15-25 Working Days',
    to: '/forms/agri'
  },
  {
    img: '/legal.png',
    title: 'Legal Documentation',
    desc: 'Draft residential rent agreements, affidavits of proof, and power of attorney forms.',
    items: ['Residential Rent Agreement', 'Power of Attorney (PoA)', 'Affidavits & Declarations'],
    timeline: 'Timeline: 1-3 Working Days',
    to: '/forms/legal'
  }
];

const Home = () => {
  const { user } = useAuth();
  const [activeFaq, setActiveFaq] = useState(null);

  const toggleFaq = (index) => {
    setActiveFaq(activeFaq === index ? null : index);
  };

  const faqs = [
    {
      q: 'What documents are typically required for business registration?',
      a: 'Requirements vary by entity type. Generally, you will need identity proof (Aadhaar & PAN), address proof of the business (utility bill or rent agreement), passport-sized photographs, and partnership deeds or incorporation drafts depending on the structure.'
    },
    {
      q: 'How long does the application processing take?',
      a: 'Timelines depend on the specific service. MSME registrations usually take 2-4 working days, company incorporation takes 3-7 working days, while government pensions and e-district certificates can take 15-30 working days depending on state government department approval cycles.'
    },
    {
      q: 'How can I track my application status?',
      a: 'Once you submit your application form on our platform, you will receive an Application Reference Number (ARN). You can navigate to the "Track" page, enter your reference number, and monitor real-time processing milestones.'
    },
    {
      q: 'Can I request a correction after submitting a form?',
      a: 'Yes. If the application has not yet been processed or filed with the government portal by our agents, we can update the details. Please raise a ticket immediately in our Helpdesk section with your reference number.'
    },
    {
      q: 'Are my uploaded documents secure?',
      a: 'Absolutely. We utilize highly secure, encrypted storage systems to protect your business and personal documents. Access is strictly limited to authorized processing agents preparing your filings.'
    }
  ];

  return (
    <>
      <title>Indfes Smartdoors – You Think We Prepare</title>
      <Navbar />
      <div className="page-body">
        {/* ── Redesigned Hero Section ── */}
        <section className="hero-section">
          <div className="container hero-container">
            <div className="hero-content">
              <h1>Simplify Business Registrations and Government Services</h1>
              <p>
                Apply for registrations, compliance services, certificates, affidavits, 
                and documentation through a streamlined digital process.
              </p>
              <div className="hero-actions">
                <Link to={user ? '/dashboard' : '/login'} className="btn btn-primary">Get Started</Link>
                <Link to={user ? '/track' : '/login'} className="btn btn-secondary">Track Application</Link>
              </div>
            </div>
          <div className="hero-visual">
            <img src="/hero_illustration.png" alt="Business Registrations and Government Services Illustration" />
          </div>
        </div>
      </section>

      {/* ── Why Choose Smartdoors Section ── */}
      <section className="why-choose-section">
        <div className="container">
          <div className="section-header">
            <h2>Why Choose Smartdoors</h2>
            <p>We provide a reliable, efficient, and fully secure digital environment for handling your business and government filings.</p>
          </div>
          <div className="why-choose-grid">
            <div className="why-choose-card">
              <div className="why-choose-icon">
                <i className="bx bx-shield-quarter"></i>
              </div>
              <h3>Secure Document Handling</h3>
              <p>Safe and encrypted storage to protect all your sensitive registration and certification documents.</p>
            </div>
            
            <div className="why-choose-card">
              <div className="why-choose-icon">
                <i className="bx bx-map-pin"></i>
              </div>
              <h3>Application Tracking</h3>
              <p>Real-time updates and milestone status tracking utilizing your unique Reference Number (ARN).</p>
            </div>
            
            <div className="why-choose-card">
              <div className="why-choose-icon">
                <i className="bx bx-grid-alt"></i>
              </div>
              <h3>Multiple Service Categories</h3>
              <p>A comprehensive platform covering company registrations, compliance support, pensions, and affidavits.</p>
            </div>
            
            <div className="why-choose-card">
              <div className="why-choose-icon">
                <i className="bx bx-user-check"></i>
              </div>
              <h3>Expert Guidance</h3>
              <p>Assistance from certified application experts to ensure your filing details comply with regulations.</p>
            </div>
            
            <div className="why-choose-card">
              <div className="why-choose-icon">
                <i className="bx bx-show-alt"></i>
              </div>
              <h3>Transparent Process</h3>
              <p>Clear tracking progress, upfront instructions, and direct support updates with no hidden processes.</p>
            </div>
            
            <div className="why-choose-card">
              <div className="why-choose-icon">
                <i className="bx bx-help-circle"></i>
              </div>
              <h3>Dedicated Support</h3>
              <p>Responsive ticket systems and helpdesk assistance to resolve your payment, refund, or filing queries.</p>
            </div>
          </div>
        </div>
      </section>

      {/* ── How It Works Section ── */}
      <section className="how-it-works-section">
        <div className="container">
          <div className="section-header">
            <h2>How It Works</h2>
            <p>Our streamlined process ensures your business registrations and government filings are handled efficiently.</p>
          </div>
          <div className="process-flow">
            <div className="process-step">
              <div className="step-number">1</div>
              <div className="step-content">
                <h3>Select Service</h3>
                <p>Browse our service catalog and choose the specific filing or registration you need.</p>
              </div>
            </div>
            
            <div className="process-step">
              <div className="step-number">2</div>
              <div className="step-content">
                <h3>Submit Documents</h3>
                <p>Complete the simplified application form and upload your documents securely.</p>
              </div>
            </div>
            
            <div className="process-step">
              <div className="step-number">3</div>
              <div className="step-content">
                <h3>Verification</h3>
                <p>Our expert team reviews your application details to ensure regulatory compliance.</p>
              </div>
            </div>
            
            <div className="process-step">
              <div className="step-number">4</div>
              <div className="step-content">
                <h3>Filing & Processing</h3>
                <p>We prepare, verify, and submit your application to the appropriate government portal.</p>
              </div>
            </div>
            
            <div className="process-step">
              <div className="step-number">5</div>
              <div className="step-content">
                <h3>Track Status</h3>
                <p>Monitor your application's real-time milestones using your unique Reference Number (ARN).</p>
              </div>
            </div>
            
            <div className="process-step">
              <div className="step-number">6</div>
              <div className="step-content">
                <h3>Completion</h3>
                <p>Receive your finalized registration certificates, affidavits, or approved documents digitally.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ── Redesigned Service Catalog Section ── */}
      <section className="services-section">
        <div className="container">
          <div className="section-header">
            <h2>Our Core Services</h2>
            <p>Select a category below to start your application with expert guidance.</p>
          </div>
          
          <div className="services-grid">
            {services.map(({ img, title, desc, items, timeline, to }) => (
              <div className="service-card" key={title}>
                <div className="service-card-body">
                  <div className="service-icon-wrapper">
                    <img src={img} alt={title} />
                  </div>
                  <h3>{title}</h3>
                  <p className="service-desc">{desc}</p>
                  <ul className="service-key-list">
                    {items.map((item) => (
                      <li key={item}>
                        <i className="bx bx-check-circle"></i> {item}
                      </li>
                    ))}
                  </ul>
                </div>
                <div className="service-card-footer">
                  <span className="service-timeline">
                    <i className="bx bx-time-five"></i> {timeline}
                  </span>
                  <Link to={to} className="service-card-link">Apply Now &rarr;</Link>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ── FAQ Section ── */}
      <section className="faq-section">
        <div className="container">
          <div className="section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Find answers to common questions about our registration services, timelines, and security.</p>
          </div>
          <div className="faq-accordion">
            {faqs.map((faq, index) => {
              const isOpen = activeFaq === index;
              return (
                <div className={`faq-item ${isOpen ? 'open' : ''}`} key={index}>
                  <button className="faq-question" onClick={() => toggleFaq(index)}>
                    <span>{faq.q}</span>
                    <i className={`bx ${isOpen ? 'bx-chevron-up' : 'bx-chevron-down'}`}></i>
                  </button>
                  <div className="faq-answer">
                    <p>{faq.a}</p>
                  </div>
                </div>
              );
            })}
          </div>
        </div>
      </section>

      {/* ── Contact CTA Section ── */}
      <section className="contact-cta-section">
        <div className="container">
          <div className="cta-box">
            <h2>Need Assistance with Your Filing?</h2>
            <p>Our support specialists are here to guide you through document requirements, status updates, or payment inquiries.</p>
            <div className="cta-actions">
              <Link to={user ? '/dashboard' : '/login'} className="btn btn-primary">Start an Application</Link>
              <Link to={user ? '/raise' : '/login'} className="btn btn-secondary">Open Support Ticket</Link>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  </>
  );
};

export default Home;
