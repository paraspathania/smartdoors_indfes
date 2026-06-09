import React, { useState } from 'react';
import Navbar from '../../components/Navbar';
import Footer from '../../components/Footer';
import useFormSubmit from './useFormSubmit';
import './ServiceForm.css';

const MsmeForm = () => {
  const [form, setForm] = useState({
    msme_name: '',
    msme_father: '',
    msme_gender: '',
    msme_email: '',
    msme_phone: '',
    msme_occupation: '',
    msme_b_name: '',
    msme_b_date: '',
    msme_service: '',
    msme_state: '',
    msme_country: 'India',
    msme_b_type: '',
  });

  const { submit, arn, error, loading } = useFormSubmit('msme');

  const ch = e => setForm({ ...form, [e.target.name]: e.target.value });

  const handleSubmit = e => {
    e.preventDefault();
    submit(form);
  };

  return (
    <>
      <Navbar />
      <div className="service-form-page">
        <div className="service-form-container">
          <h1 className="service-form-title">MSME Registration – Indfes Smartdoors</h1>

          {arn && (
            <div className="arn-box">
              <h3>Application Submitted Successfully!</h3>
              <p>Your Application Reference Number (ARN):</p>
              <strong>{arn}</strong>
            </div>
          )}

          {error && (
            <div className="error-box">
              <p>{error}</p>
            </div>
          )}

          {!arn && (
            <form className="service-form" onSubmit={handleSubmit}>

              {/* Personal Details */}
              <fieldset className="form-section">
                <legend>Personal Details</legend>

                <div className="form-group">
                  <label htmlFor="msme_name">Full Name <span className="required">*</span></label>
                  <input
                    type="text"
                    id="msme_name"
                    name="msme_name"
                    value={form.msme_name}
                    onChange={ch}
                    placeholder="Enter your full name"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="msme_father">Father's Name <span className="required">*</span></label>
                  <input
                    type="text"
                    id="msme_father"
                    name="msme_father"
                    value={form.msme_father}
                    onChange={ch}
                    placeholder="Enter father's name"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="msme_gender">Gender <span className="required">*</span></label>
                  <select
                    id="msme_gender"
                    name="msme_gender"
                    value={form.msme_gender}
                    onChange={ch}
                    required
                  >
                    <option value="">-- Select Gender --</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>

                <div className="form-group">
                  <label htmlFor="msme_email">Email <span className="required">*</span></label>
                  <input
                    type="email"
                    id="msme_email"
                    name="msme_email"
                    value={form.msme_email}
                    onChange={ch}
                    placeholder="Enter your email address"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="msme_phone">Phone Number <span className="required">*</span></label>
                  <input
                    type="tel"
                    id="msme_phone"
                    name="msme_phone"
                    value={form.msme_phone}
                    onChange={ch}
                    placeholder="Enter your phone number"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="msme_occupation">Occupation <span className="required">*</span></label>
                  <input
                    type="text"
                    id="msme_occupation"
                    name="msme_occupation"
                    value={form.msme_occupation}
                    onChange={ch}
                    placeholder="Enter your occupation"
                    required
                  />
                </div>
              </fieldset>

              {/* Business Details */}
              <fieldset className="form-section">
                <legend>Business Details</legend>

                <div className="form-group">
                  <label htmlFor="msme_b_name">Business Name <span className="required">*</span></label>
                  <input
                    type="text"
                    id="msme_b_name"
                    name="msme_b_name"
                    value={form.msme_b_name}
                    onChange={ch}
                    placeholder="Enter your business name"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="msme_b_date">Business Registration Date <span className="required">*</span></label>
                  <input
                    type="date"
                    id="msme_b_date"
                    name="msme_b_date"
                    value={form.msme_b_date}
                    onChange={ch}
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="msme_service">Service Required <span className="required">*</span></label>
                  <select
                    id="msme_service"
                    name="msme_service"
                    value={form.msme_service}
                    onChange={ch}
                    required
                  >
                    <option value="">-- Select Service --</option>
                    <option value="msmereg">MSME Registration</option>
                    <option value="gst">GST Registration</option>
                    <option value="fssai">FSSAI Registration</option>
                    <option value="startup">Startup India</option>
                    <option value="trademark">Trademark</option>
                    <option value="copyright">Copyright Certification</option>
                  </select>
                </div>

                <div className="form-group">
                  <label htmlFor="msme_b_type">Business Type <span className="required">*</span></label>
                  <select
                    id="msme_b_type"
                    name="msme_b_type"
                    value={form.msme_b_type}
                    onChange={ch}
                    required
                  >
                    <option value="">-- Select Business Type --</option>
                    <option value="msme">MSME</option>
                    <option value="pvtltd">Private Limited</option>
                    <option value="llp">LLP</option>
                    <option value="opc">One Person Company</option>
                    <option value="prop">Proprietorship</option>
                  </select>
                </div>
              </fieldset>

              {/* Location Details */}
              <fieldset className="form-section">
                <legend>Location Details</legend>

                <div className="form-group">
                  <label htmlFor="msme_state">State <span className="required">*</span></label>
                  <input
                    type="text"
                    id="msme_state"
                    name="msme_state"
                    value={form.msme_state}
                    onChange={ch}
                    placeholder="Enter your state"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="msme_country">Country <span className="required">*</span></label>
                  <input
                    type="text"
                    id="msme_country"
                    name="msme_country"
                    value={form.msme_country}
                    onChange={ch}
                    placeholder="Enter your country"
                    required
                  />
                </div>
              </fieldset>

              <button type="submit" className="submit-btn" disabled={loading}>
                {loading ? 'Submitting...' : 'Submit Application'}
              </button>
            </form>
          )}
        </div>
      </div>
      <Footer />
    </>
  );
};

export default MsmeForm;
