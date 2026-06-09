import React, { useState } from 'react';
import Navbar from '../../components/Navbar';
import Footer from '../../components/Footer';
import useFormSubmit from './useFormSubmit';
import './ServiceForm.css';

const GoiForm = () => {
  const [form, setForm] = useState({
    agri_name: '',
    agri_email: '',
    agri_phone: '',
    agri_addressa: '',
    agri_addressb: '',
    agri_city: '',
    agri_service: '',
    agri_state: '',
    agri_country: 'India',
  });

  const { submit, arn, error, loading } = useFormSubmit('agri');

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
          <h1 className="service-form-title">GOI &amp; Government Services – Indfes Smartdoors</h1>

          {arn && (
            <div className="arn-box">
              <p>Your application has been submitted successfully!</p>
              <p>
                <strong>ARN / Reference Number:</strong> {arn}
              </p>
            </div>
          )}

          {error && (
            <div className="error-box">
              <p>{error}</p>
            </div>
          )}

          {!arn && (
            <form className="service-form" onSubmit={handleSubmit} noValidate>
              <div className="form-group">
                <label htmlFor="agri_name">Full Name</label>
                <input
                  type="text"
                  id="agri_name"
                  name="agri_name"
                  value={form.agri_name}
                  onChange={ch}
                  placeholder="Enter your full name"
                  required
                />
              </div>

              <div className="form-group">
                <label htmlFor="agri_email">Email</label>
                <input
                  type="email"
                  id="agri_email"
                  name="agri_email"
                  value={form.agri_email}
                  onChange={ch}
                  placeholder="Enter your email address"
                  required
                />
              </div>

              <div className="form-group">
                <label htmlFor="agri_phone">Phone Number</label>
                <input
                  type="tel"
                  id="agri_phone"
                  name="agri_phone"
                  value={form.agri_phone}
                  onChange={ch}
                  placeholder="Enter your phone number"
                  required
                />
              </div>

              <div className="form-group">
                <label htmlFor="agri_service">Service Required</label>
                <select
                  id="agri_service"
                  name="agri_service"
                  value={form.agri_service}
                  onChange={ch}
                  required
                >
                  <option value="">-- Select a Service --</option>
                  <option value="lpgcon">LPG Connection</option>
                  <option value="electricity">Electricity Connection</option>
                  <option value="kisannidhi">Kisan Samman Nidhi</option>
                  <option value="pmawas">PM Awas Yojana</option>
                  <option value="rentres">Residential Rent Agreement</option>
                </select>
              </div>

              <div className="form-group">
                <label htmlFor="agri_addressa">Address Line 1</label>
                <input
                  type="text"
                  id="agri_addressa"
                  name="agri_addressa"
                  value={form.agri_addressa}
                  onChange={ch}
                  placeholder="House / Flat / Building No."
                  required
                />
              </div>

              <div className="form-group">
                <label htmlFor="agri_addressb">Address Line 2</label>
                <input
                  type="text"
                  id="agri_addressb"
                  name="agri_addressb"
                  value={form.agri_addressb}
                  onChange={ch}
                  placeholder="Street / Colony / Locality"
                />
              </div>

              <div className="form-group">
                <label htmlFor="agri_city">City / Block</label>
                <input
                  type="text"
                  id="agri_city"
                  name="agri_city"
                  value={form.agri_city}
                  onChange={ch}
                  placeholder="Enter your city or block"
                  required
                />
              </div>

              <div className="form-group">
                <label htmlFor="agri_state">State</label>
                <input
                  type="text"
                  id="agri_state"
                  name="agri_state"
                  value={form.agri_state}
                  onChange={ch}
                  placeholder="Enter your state"
                  required
                />
              </div>

              <div className="form-group">
                <label htmlFor="agri_country">Country</label>
                <input
                  type="text"
                  id="agri_country"
                  name="agri_country"
                  value={form.agri_country}
                  onChange={ch}
                  placeholder="Enter your country"
                  required
                />
              </div>

              <button type="submit" className="submit-btn" disabled={loading}>
                {loading ? 'Submitting…' : 'Submit Application'}
              </button>
            </form>
          )}
        </div>
      </div>
      <Footer />
    </>
  );
};

export default GoiForm;
