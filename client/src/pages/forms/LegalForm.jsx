import React, { useState } from 'react';
import Navbar from '../../components/Navbar';
import Footer from '../../components/Footer';
import useFormSubmit from './useFormSubmit';
import './ServiceForm.css';

const LegalForm = () => {
  const [form, setForm] = useState({
    legal_name: '',
    legal_father_name: '',
    legal_gender: '',
    legal_email: '',
    legal_phone: '',
    legal_occupation: '',
    legal_service: '',
    legal_state: '',
    legal_country: 'India',
  });

  const { submit, arn, error, loading } = useFormSubmit('legal');

  const ch = e => setForm({ ...form, [e.target.name]: e.target.value });

  const handleSubmit = e => {
    e.preventDefault();
    submit(form);
  };

  return (
    <>
      <Navbar />

      <div className="service-form-wrapper">
        <div className="service-form-container">
          <h1 className="service-form-title">Legal Services – Indfes Smartdoors</h1>

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
            <form className="service-form" onSubmit={handleSubmit} noValidate>

              {/* Full Name */}
              <div className="form-group">
                <label htmlFor="legal_name">Full Name <span className="required">*</span></label>
                <input
                  type="text"
                  id="legal_name"
                  name="legal_name"
                  value={form.legal_name}
                  onChange={ch}
                  placeholder="Enter your full name"
                  required
                />
              </div>

              {/* Father's Name */}
              <div className="form-group">
                <label htmlFor="legal_father_name">Father's Name <span className="required">*</span></label>
                <input
                  type="text"
                  id="legal_father_name"
                  name="legal_father_name"
                  value={form.legal_father_name}
                  onChange={ch}
                  placeholder="Enter father's name"
                  required
                />
              </div>

              {/* Gender */}
              <div className="form-group">
                <label htmlFor="legal_gender">Gender <span className="required">*</span></label>
                <select
                  id="legal_gender"
                  name="legal_gender"
                  value={form.legal_gender}
                  onChange={ch}
                  required
                >
                  <option value="">-- Select Gender --</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>

              {/* Email */}
              <div className="form-group">
                <label htmlFor="legal_email">Email <span className="required">*</span></label>
                <input
                  type="email"
                  id="legal_email"
                  name="legal_email"
                  value={form.legal_email}
                  onChange={ch}
                  placeholder="Enter your email address"
                  required
                />
              </div>

              {/* Phone Number */}
              <div className="form-group">
                <label htmlFor="legal_phone">Phone Number <span className="required">*</span></label>
                <input
                  type="tel"
                  id="legal_phone"
                  name="legal_phone"
                  value={form.legal_phone}
                  onChange={ch}
                  placeholder="Enter your phone number"
                  required
                />
              </div>

              {/* Occupation */}
              <div className="form-group">
                <label htmlFor="legal_occupation">Occupation <span className="required">*</span></label>
                <input
                  type="text"
                  id="legal_occupation"
                  name="legal_occupation"
                  value={form.legal_occupation}
                  onChange={ch}
                  placeholder="Enter your occupation"
                  required
                />
              </div>

              {/* Legal Service */}
              <div className="form-group">
                <label htmlFor="legal_service">Service Required <span className="required">*</span></label>
                <select
                  id="legal_service"
                  name="legal_service"
                  value={form.legal_service}
                  onChange={ch}
                  required
                >
                  <option value="">-- Select Service --</option>
                  <option value="notary">Notary</option>
                  <option value="affidavit">Affidavit</option>
                  <option value="agreement">Agreement</option>
                  <option value="legalnotice">Legal Notice</option>
                  <option value="rentres">Residential Rent Agreement</option>
                  <option value="poa">Proof of Address</option>
                  <option value="tenant">Tenant Police Verification</option>
                </select>
              </div>

              {/* State */}
              <div className="form-group">
                <label htmlFor="legal_state">State <span className="required">*</span></label>
                <input
                  type="text"
                  id="legal_state"
                  name="legal_state"
                  value={form.legal_state}
                  onChange={ch}
                  placeholder="Enter your state"
                  required
                />
              </div>

              {/* Country */}
              <div className="form-group">
                <label htmlFor="legal_country">Country <span className="required">*</span></label>
                <input
                  type="text"
                  id="legal_country"
                  name="legal_country"
                  value={form.legal_country}
                  onChange={ch}
                  placeholder="Enter your country"
                  required
                />
              </div>

              <button
                type="submit"
                className="submit-btn"
                disabled={loading}
              >
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

export default LegalForm;
