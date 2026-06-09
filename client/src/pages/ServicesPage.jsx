import { useState } from 'react';
import { Link } from 'react-router-dom';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import { useAuth } from '../context/AuthContext';
import './ServicesPage.css';

const ServicesPage = () => {
  const { user } = useAuth();
  const [searchQuery, setSearchQuery] = useState('');
  const [activeCategory, setActiveCategory] = useState('All');

  const categories = [
    {
      title: "Business Services",
      subtitle: "Company registrations, compliance, taxation, and licensing support.",
      services: [
        { name: "Company Registration (Pvt Ltd)", desc: "Incorporate your business as a Private Limited Company with full MCA compliance.", link: "/forms/mca" },
        { name: "Public Limited Company Registration", desc: "Incorporate a Public Limited Company with MCA for large-scale operations and public share issuance.", link: "/forms/mca" },
        { name: "LLP Registration", desc: "Register a Limited Liability Partnership (LLP) for flexible business operations.", link: "/forms/mca" },
        { name: "One Person Company (OPC) Registration", desc: "Register an OPC to enjoy corporate status and limited liability with a single promoter.", link: "/forms/mca" },
        { name: "Sole Proprietorship Registration", desc: "Establish your business under a sole proprietorship with standard local trade and tax registrations.", link: "/forms/mca" },
        { name: "ISO Certification", desc: "Obtain ISO certification to establish international quality standards for your company.", link: "/forms/mca" },
        { name: "Copyright Registration", desc: "Register a copyright to legally protect your original creative, literary, artistic, or software works.", link: "/forms/mca" },
        { name: "GST Registration", desc: "Get your GST Identification Number (GSTIN) and set up tax filing workflows.", link: "/forms/accounting" },
        { name: "MSME Registration", desc: "Secure Udyam MSME certification to access government subsidies and benefits.", link: "/forms/msme" },
        { name: "Trademark Registration", desc: "Register and protect your brand name, logo, or slogan with the trademark registry.", link: "/forms/mca" },
        { name: "Startup India Registration", desc: "Obtain DPIIT recognition to access tax exemptions, seed funding, and intellectual property benefits.", link: "/forms/mca" },
        { name: "Annual Compliance – Private Limited Company", desc: "Annual MCA filing, AOC-4, MGT-7, and mandatory corporate compliance updates for Private Limited companies.", link: "/forms/roc" },
        { name: "Annual Compliance – One Person Company", desc: "Annual MCA return filing, AOC-4, and mandatory compliance management for One Person Companies (OPC).", link: "/forms/roc" },
        { name: "Annual Compliance – LLP", desc: "Annual filing of Form 8 and Form 11 mandatory compliance returns for Limited Liability Partnerships.", link: "/forms/roc" },
        { name: "ROC Return Filing – Private Limited", desc: "Prepare and file annual returns (MGT-7, AOC-4) with the Registrar of Companies (ROC) for Pvt Ltd companies.", link: "/forms/roc" },
        { name: "ROC Return Filing – One Person Company", desc: "Prepare and file annual compliance returns and financial statements for One Person Companies.", link: "/forms/roc" },
        { name: "ROC Return Filing – LLP", desc: "Prepare and file Form 8 and Form 11 returns for LLPs to maintain compliance.", link: "/forms/roc" },
        { name: "GST Return Filing", desc: "File monthly, quarterly, or annual GST returns (GSTR-1, GSTR-3B) with professional tax review.", link: "/forms/roc" },
        { name: "Income Tax Return (ITR) Filing", desc: "File personal or business income tax returns (ITR-1 to ITR-7) with professional tax optimization.", link: "/forms/roc" },
        { name: "Statutory & Tax Audit", desc: "Comprehensive financial statement auditing and tax audit reporting by certified professionals.", link: "/forms/roc" },
        { name: "Accounting & Taxation", desc: "Manage financial statements, invoicing, balance sheets, and monthly bookkeeping.", link: "/forms/accounting" }
      ]
    },
    {
      title: "Government Certificates",
      subtitle: "Official certificates and verification services issued through government departments.",
      services: [
        { name: "Income Certificate", desc: "Obtain official proof of family income from the state revenue department.", link: "/forms/district" },
        { name: "Domicile Certificate", desc: "Apply for residency proof required for state admissions and jobs.", link: "/forms/district" },
        { name: "Caste Certificate", desc: "Verify caste status (OBC/SC/ST) for government benefits and reservations.", link: "/forms/district" },
        { name: "EWS Certificate", desc: "Get Economically Weaker Section certification for educational and job quotas.", link: "/forms/district" },
        { name: "Character Certificate", desc: "Obtain police-verified conduct certification for employment and passports.", link: "/forms/district" }
      ]
    },
    {
      title: "Documentation Services",
      subtitle: "Affidavits, agreements, legal notices, and supporting documentation services.",
      services: [
        { name: "Affidavits", desc: "Draft and notarize legally binding affidavits for name change, address proof, etc.", link: "/forms/student" },
        { name: "Rent Agreement", desc: "Prepare legally valid residential or commercial lease and rental agreements.", link: "/forms/legal" },
        { name: "Power of Attorney", desc: "Draft general or special Power of Attorney (POA) to delegate legal authority.", link: "/forms/legal" },
        { name: "Legal Documentation", desc: "Standard legal notice drafting, tenant verification, and notary services.", link: "/forms/legal" },
        { name: "Electricity Connection Request", desc: "File application for new residential or commercial electricity connection/meter installation.", link: "/forms/agri" },
        { name: "LPG Connection Request", desc: "Apply for a new domestic LPG cylinder connection (Indane, HP, Bharat Gas) with address proof.", link: "/forms/agri" }
      ]
    },
    {
      title: "Student Services",
      subtitle: "Educational affidavits, certificates, corrections, and student support documentation.",
      services: [
        { name: "Gap Certificate", desc: "Declare academic gap periods for college admissions and loan applications.", link: "/forms/student" },
        { name: "Character Certificate (Student)", desc: "Conducting background verification and character declaration for students.", link: "/forms/district" },
        { name: "Single Girl Child Affidavit", desc: "Support applications for girl child education schemes and scholarships.", link: "/forms/student" },
        { name: "Student Documentation", desc: "Education loan affidavits, board certificate correction requests, and gap declarations.", link: "/forms/student" },
        { name: "Date of Birth Affidavit", desc: "Prepare a birth declaration affidavit for certificate corrections or passport issues.", link: "/forms/student" },
        { name: "Proof of Income Affidavit", desc: "Draft and notarize income declaration affidavits for scholarship applications.", link: "/forms/student" },
        { name: "Change of Name Affidavit", desc: "Draft and notarize legal name change affidavits for students or passport correction.", link: "/forms/student" },
        { name: "Proof of Address Affidavit", desc: "Affidavit to declare local address proof for academic admissions and hostel accommodation.", link: "/forms/student" },
        { name: "No Criminal Record Affidavit", desc: "Affidavit declaring clean criminal record for college admissions or employment.", link: "/forms/student" },
        { name: "Education Loan Affidavit", desc: "Affidavit draft required by banks and lending institutions for educational loan verification.", link: "/forms/student" }
      ]
    },
    {
      title: "Pension & Welfare Services",
      subtitle: "Government pension schemes and welfare-related services.",
      services: [
        { name: "Old Age Pension", desc: "Apply for state-sponsored pension schemes for senior citizens.", link: "/forms/pension" },
        { name: "Widow Pension", desc: "Access financial assistance and pension schemes for widows.", link: "/forms/pension" },
        { name: "Disability Pension", desc: "File pension applications for physically handicapped or disabled individuals.", link: "/forms/pension" }
      ]
    },
    {
      title: "Individual Services",
      subtitle: "PAN, Aadhaar, Passport, Voter ID, and personal identity services.",
      services: [
        { name: "PAN Update", desc: "Apply for a new PAN card or make updates and corrections to existing card data.", link: "/forms/individual" },
        { name: "Aadhaar Update", desc: "E-KYC update assistance, address corrections, and demographic updates.", link: "/forms/individual" },
        { name: "Voter ID Services", desc: "File applications for new voter registration, correction, or migration.", link: "/forms/individual" },
        { name: "Passport Assistance", desc: "Document checklist preparation, appointment booking, and application filing.", link: "/forms/individual" },
        { name: "Driving License Services", desc: "File applications for learner's license, permanent license, or license renewal assistance.", link: "/forms/individual" },
        { name: "CPGRMS Grievance Filing", desc: "Register official complaints and grievances with central/state departments on the CPGRMS portal.", link: "/forms/individual" }
      ]
    }
  ];

  const quickAccessTags = [
    "Company Registration",
    "GST Registration",
    "Income Certificate",
    "Aadhaar Update",
    "Passport Assistance",
    "Rent Agreement"
  ];

  // Unique list of category titles for filters
  const filterCategories = ['All', ...categories.map(c => c.title)];

  const totalServicesCount = categories.reduce((sum, cat) => sum + cat.services.length, 0);

  // Dynamic Scroll offset height calculation
  const scrollToCategorySection = (idx) => {
    const section = document.getElementById(`category-section-${idx}`);
    if (section) {
      const topbar = document.querySelector('.topbar');
      const menubar = document.querySelector('.menubar');
      const controlBar = document.querySelector('.services-control-bar');
      
      let headerHeight = 0;
      if (topbar) headerHeight += topbar.offsetHeight;
      if (menubar && window.getComputedStyle(menubar).display !== 'none') {
        headerHeight += menubar.offsetHeight;
      }
      if (controlBar) headerHeight += controlBar.offsetHeight;
      
      const offset = headerHeight + 16; // Add a small buffer/padding
      const elementPosition = section.getBoundingClientRect().top;
      const offsetPosition = elementPosition + window.pageYOffset - offset;
      
      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
      });
    }
  };

  // Scroll helper to center/top the directory view when filtered
  const scrollToDirectoryTop = () => {
    const directoryContainer = document.querySelector('.services-directory-container');
    if (directoryContainer) {
      const topbar = document.querySelector('.topbar');
      const menubar = document.querySelector('.menubar');
      const controlBar = document.querySelector('.services-control-bar');
      
      let headerHeight = 0;
      if (topbar) headerHeight += topbar.offsetHeight;
      if (menubar && window.getComputedStyle(menubar).display !== 'none') {
        headerHeight += menubar.offsetHeight;
      }
      if (controlBar) headerHeight += controlBar.offsetHeight;
      
      const offset = headerHeight + 16;
      const elementPosition = directoryContainer.getBoundingClientRect().top;
      const offsetPosition = elementPosition + window.pageYOffset - offset;
      
      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
      });
    }
  };

  // Handling Quick Access click
  const handleQuickAccessClick = (serviceName) => {
    setSearchQuery(serviceName);
    setActiveCategory('All');
    setTimeout(scrollToDirectoryTop, 50);
  };

  // Handling Category Tab Click
  const handleCategoryClick = (cat, event) => {
    setActiveCategory(cat);
    
    // Scroll the tab pill to the center of the horizontal scroll wrapper
    if (event && event.currentTarget) {
      event.currentTarget.scrollIntoView({
        behavior: 'smooth',
        block: 'nearest',
        inline: 'center'
      });
    }

    setTimeout(scrollToDirectoryTop, 50);
  };

  // Filter categories and services in real-time
  const filteredCategories = categories.map(category => {
    if (activeCategory !== 'All' && category.title !== activeCategory) {
      return null;
    }

    const matchingServices = category.services.filter(service => {
      const query = searchQuery.toLowerCase().trim();
      return (
        service.name.toLowerCase().includes(query) ||
        service.desc.toLowerCase().includes(query)
      );
    });

    if (matchingServices.length === 0) {
      return null;
    }

    return {
      ...category,
      services: matchingServices
    };
  }).filter(Boolean);

  const isDefaultView = searchQuery === '' && activeCategory === 'All';

  return (
    <>
      <title>All Services – Indfes Smartdoors</title>
      <Navbar />
      <div className="page-body services-page-body">
        {/* Header Block */}
        <section className="services-page-header">
          <div className="container">
            <h1>Browse All Services</h1>
            <p className="services-page-subtitle">
              Explore business registrations, compliance services, government certificates, documentation support, pension schemes, student services, and identity-related services from one place.
            </p>
            <div className="services-meta-banner">
              {totalServicesCount} Services Across {categories.length} Categories
            </div>
          </div>
        </section>

        {/* Sticky Control Bar containing Search & Filter Tabs */}
        <div className="services-control-bar">
          <div className="container">
            <div className="search-box-wrapper">
              <i className="bx bx-search search-icon"></i>
              <input
                type="text"
                placeholder="Search services (e.g. PAN Update, Income Certificate, LLP Registration)"
                value={searchQuery}
                onChange={(e) => setSearchQuery(e.target.value)}
                className="search-input"
              />
              {searchQuery && (
                <button onClick={() => setSearchQuery('')} className="clear-search-btn">
                  <i className="bx bx-x"></i>
                </button>
              )}
            </div>

            <div className="filter-tabs-wrapper">
              <div className="filter-tabs">
                {filterCategories.map((cat, idx) => (
                  <button
                    key={idx}
                    onClick={(e) => handleCategoryClick(cat, e)}
                    className={`filter-tab-pill ${activeCategory === cat ? 'active' : ''}`}
                  >
                    {cat === 'All' ? 'All Services' : cat.replace(' & Welfare', '')}
                  </button>
                ))}
              </div>
            </div>
          </div>
        </div>

        {/* Directory Content */}
        <div className="services-directory-container container">
          
          {/* Popular Searches Row */}
          <div className="quick-access-section">
            <span className="quick-access-label">Popular Searches:</span>
            <div className="quick-access-tags">
              {quickAccessTags.map((tag, idx) => (
                <button
                  key={idx}
                  onClick={() => handleQuickAccessClick(tag)}
                  className={`quick-access-pill ${searchQuery === tag ? 'active' : ''}`}
                >
                  {tag}
                </button>
              ))}
            </div>
          </div>

          {/* Service Categories Overview (Clickable Category Cards) */}
          {isDefaultView && (
            <section className="categories-overview-section">
              <div className="category-overview-grid">
                {categories.map((cat, idx) => (
                  <div
                    key={idx}
                    onClick={(e) => handleCategoryClick(cat.title, e)}
                    className="category-overview-card"
                  >
                    <h3>{cat.title}</h3>
                    <span className="category-overview-count">{cat.services.length} Services Available</span>
                  </div>
                ))}
              </div>
            </section>
          )}

          {/* Category Jump Navigation row */}
          {isDefaultView && (
            <div className="category-jump-row">
              {categories.map((cat, idx) => (
                <button
                  key={idx}
                  onClick={() => scrollToCategorySection(idx)}
                  className="jump-pill-btn"
                >
                  {cat.title.replace(' & Welfare', '')}
                </button>
              ))}
            </div>
          )}

          {/* Main Services Grid grouped by Category */}
          <div className="main-directory-listing">
            {filteredCategories.length > 0 ? (
              filteredCategories.map((category, idx) => {
                // Find actual index of the category in original categories array for scroll target mapping
                const originalIdx = categories.findIndex(c => c.title === category.title);
                return (
                  <section
                    key={idx}
                    id={`category-section-${originalIdx}`}
                    className="directory-category-section"
                  >
                    <div className="category-section-header">
                      <h2>{category.title}</h2>
                      <p className="category-section-subtitle">{category.subtitle}</p>
                      <div className="category-services-meta">
                        {category.services.length} Services Available
                      </div>
                    </div>
                    <div className="category-services-grid">
                      {category.services.map((service, sIdx) => (
                        <div key={sIdx} className="service-directory-card">
                          <div className="service-card-info">
                            <h3>{service.name}</h3>
                            <p>{service.desc}</p>
                          </div>
                          <div className="service-card-action">
                            <Link to={user ? service.link : '/login'} className="btn btn-primary">
                              Apply Now
                            </Link>
                          </div>
                        </div>
                      ))}
                    </div>
                  </section>
                );
              })
            ) : (
              <div className="no-services-state">
                <i className="bx bx-info-circle no-results-icon"></i>
                <h3>No services found</h3>
                <p>We couldn't find any services matching "{searchQuery}". Try adjusting your keywords or clearing the filter.</p>
                <button
                  onClick={() => {
                    setSearchQuery('');
                    setActiveCategory('All');
                  }}
                  className="btn btn-secondary"
                >
                  Reset All Filters
                </button>
              </div>
            )}
          </div>

          {/* Timeline disclaimer note */}
          <div className="directory-disclaimer-note">
            <p>
              <i className="bx bx-info-circle"></i> Processing timelines depend on department and verification requirements. Timelines displayed represent average durations for standard applications.
            </p>
          </div>
        </div>
      </div>
      <Footer />
    </>
  );
};

export default ServicesPage;
