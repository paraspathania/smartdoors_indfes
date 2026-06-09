import { useState } from 'react';
import { Link } from 'react-router-dom';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import { useAuth } from '../context/AuthContext';
import './Home.css';



const HeroDiscoveryPanel = () => (
  <div className="hero-discovery-card">
    <div className="discovery-header">
      <h4>Find Your Service</h4>
    </div>
    
    <div className="discovery-body">
      <Link to="/services" className="discovery-category-link">&bull; Business Services</Link>
      <Link to="/services" className="discovery-category-link">&bull; Government Certificates</Link>
      <Link to="/services" className="discovery-category-link">&bull; Documentation Services</Link>
      <Link to="/services" className="discovery-category-link">&bull; Student Services</Link>
      <Link to="/services" className="discovery-category-link">&bull; Pension Services</Link>
    </div>
    
    <div className="discovery-footer">
      <Link to="/services" className="btn btn-primary widget-cta">Browse All Services</Link>
    </div>
  </div>
);

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
              <h1>Business Registrations & Government Services Made Simple</h1>
              <p>
                Apply online, upload documents securely, track progress, and receive expert assistance throughout the process.
              </p>
              <div className="hero-actions-container">
                <div className="hero-actions">
                  <Link to={user ? '/dashboard' : '/login'} className="btn btn-primary">Start New Application</Link>
                  <Link to={user ? '/track' : '/login'} className="btn btn-secondary">Track Application</Link>
                </div>
                <div className="hero-trust-badges">
                  <span><i className="bx bx-check"></i> Expert Guidance</span>
                  <span><i className="bx bx-check"></i> Secure Documents</span>
                  <span><i className="bx bx-check"></i> Application Tracking</span>
                </div>
              </div>
            </div>
            <div className="hero-visual">
              <HeroDiscoveryPanel user={user} />
            </div>
          </div>
        </section>

        {/* ── Dedicated Trust Section ── */}
        <section className="why-choose-section">
          <div className="container">
            <div className="section-header">
              <h2>Why Users Trust Smartdoors</h2>
            </div>
            <div className="why-choose-grid">
              <div className="why-choose-card">
                <div className="why-choose-icon">
                  <i className="bx bx-lock-alt"></i>
                </div>
                <h3>Secure Document Handling</h3>
                <p>Documents are stored and processed securely throughout the application lifecycle.</p>
              </div>
              
              <div className="why-choose-card">
                <div className="why-choose-icon">
                  <i className="bx bx-radar"></i>
                </div>
                <h3>Real-Time Application Tracking</h3>
                <p>Track every application using a unique Application Reference Number (ARN).</p>
              </div>
              
              <div className="why-choose-card">
                <div className="why-choose-icon">
                  <i className="bx bx-user-check"></i>
                </div>
                <h3>Expert Review & Guidance</h3>
                <p>Applications are reviewed before submission to minimize errors and delays.</p>
              </div>
              
              <div className="why-choose-card">
                <div className="why-choose-icon">
                  <i className="bx bx-support"></i>
                </div>
                <h3>Dedicated Support Assistance</h3>
                <p>Get help with documentation, status updates, and filing requirements.</p>
              </div>
            </div>
          </div>
        </section>

        {/* ── Process Section ── */}
        <section className="how-it-works-section">
          <div className="container">
            <div className="section-header">
              <h2>Our Process</h2>
              <p>A simple and transparent workflow for all your documentation and registration needs.</p>
            </div>
            <div className="process-pipeline">
              <div className="pipeline-step">
                <div className="step-number">1</div>
                <div className="step-content">
                  <h3>Choose Service</h3>
                  <p>Select the registration, certificate, or legal document service you need.</p>
                </div>
              </div>
              <div className="pipeline-step">
                <div className="step-number">2</div>
                <div className="step-content">
                  <h3>Upload Documents</h3>
                  <p>Fill out the forms and securely upload the required files on our portal.</p>
                </div>
              </div>
              <div className="pipeline-step">
                <div className="step-number">3</div>
                <div className="step-content">
                  <h3>Verification</h3>
                  <p>Our experts review everything to ensure zero filing errors or delays.</p>
                </div>
              </div>
              <div className="pipeline-step">
                <div className="step-number">4</div>
                <div className="step-content">
                  <h3>Track Application</h3>
                  <p>Use your unique ARN to track the processing status in real-time.</p>
                </div>
              </div>
              <div className="pipeline-step">
                <div className="step-number">5</div>
                <div className="step-content">
                  <h3>Completion</h3>
                  <p>Receive your officially processed and verified documents digitally.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

      {/* ── Simplified Services Section (Homepage) ── */}
      <section id="services" className="services-section">
        <div className="container">
          <div className="section-header">
            <h2>Our Services</h2>
            <p>We simplify corporate registrations, legal agreements, and government certifications through a digital compliance workflow.</p>
          </div>
          
          <div className="services-intro-grid">
            <div className="services-intro-card">
              <div className="services-intro-icon">
                <i className="bx bx-briefcase-alt-2"></i>
              </div>
              <h3>Business &amp; MCA Services</h3>
              <p>Start your business today. We handle Pvt Ltd registration, LLP incorporation, MSME licenses, ROC compliance, and tax filings.</p>
              <Link to="/services" className="services-intro-link">Explore Business Services &rarr;</Link>
            </div>

            <div className="services-intro-card">
              <div className="services-intro-icon">
                <i className="bx bx-building"></i>
              </div>
              <h3>Government Certificates</h3>
              <p>Request verified certificates. We facilitate application and document filing for Domicile, Income, Caste, and EWS certificates.</p>
              <Link to="/services" className="services-intro-link">Explore Certificate Services &rarr;</Link>
            </div>

            <div className="services-intro-card">
              <div className="services-intro-icon">
                <i className="bx bx-file"></i>
              </div>
              <h3>Documentation &amp; Citizen</h3>
              <p>Prepare legal document filings. Get expert drafting and safe processing for rent agreements, student affidavits, and PAN/Aadhaar updates.</p>
              <Link to="/services" className="services-intro-link">Explore Document Services &rarr;</Link>
            </div>
          </div>

          <div className="services-intro-footer">
            <Link to="/services" className="btn btn-primary">Browse All Services</Link>
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
            <h2>Need Help With Registration?</h2>
            <p>Talk to our experts and receive guidance for business registration, compliance, certifications, and government services.</p>
            <div className="cta-actions">
              <Link to={user ? '/dashboard' : '/login'} className="btn btn-primary">Start Application</Link>
              <Link to={user ? '/raise' : '/login'} className="btn btn-secondary">Contact Support</Link>
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
