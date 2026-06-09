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
      <title>Government Services – Indfes Smartdoors</title>
      <Navbar />
      <div className="service-form-page">
        <div className="service-form-container">

          <div className="service-form-header">
            <span className="service-form-tag">Government &amp; Utility Services</span>
            <h1 className="service-form-title">Government Services Form</h1>
            <p className="service-form-subtitle">
              Apply for LPG or electricity connections, PM Awas Yojana, Kisan Samman Nidhi, and residential rent agreements.
            </p>
          </div>

          <div className="service-form-body">

            {arn && (
              <div className="arn-box">
                <h3>Application Submitted</h3>
                <p>Your Application Reference Number</p>
                <p className="arn-number">{arn}</p>
                <p>Status: <b>Pending for Validation</b></p>
                <p>Save this number to track your application.</p>
              </div>
            )}

            {error && (
              <p className="msg_error">{error}</p>
            )}

            {!arn && (
              <form className="service-form" onSubmit={handleSubmit} noValidate>

                {/* Fieldset 1 – Service Required */}
                <fieldset className="form-section">
                  <legend>Service Required</legend>

                  <div className="form-group">
                    <label htmlFor="agri_service">
                      Service <span className="required">*</span>
                    </label>
                    <select
                      id="agri_service"
                      name="agri_service"
                      value={form.agri_service}
                      onChange={ch}
                      required
                    >
                      <option value="">Select a Service</option>
                      <option value="lpgcon">LPG Connection</option>
                      <option value="electricity">Electricity Connection</option>
                      <option value="kisannidhi">Kisan Samman Nidhi</option>
                      <option value="pmawas">PM Awas Yojana</option>
                      <option value="rentres">Residential Rent Agreement</option>
                    </select>
                  </div>
                </fieldset>

                {/* Fieldset 2 – Contact Details */}
                <fieldset className="form-section">
                  <legend>Contact Details</legend>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="agri_name">
                        Full Name <span className="required">*</span>
                      </label>
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
                      <label htmlFor="agri_phone">
                        Phone Number <span className="required">*</span>
                      </label>
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
                  </div>

                  <div className="form-group">
                    <label htmlFor="agri_email">
                      Email <span className="required">*</span>
                    </label>
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
                </fieldset>

                {/* Fieldset 3 – Address Details */}
                <fieldset className="form-section">
                  <legend>Address Details</legend>

                  <div className="form-group">
                    <label htmlFor="agri_addressa">
                      Address Line 1 <span className="required">*</span>
                    </label>
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

                  <div className="form-row-2">
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
                      <label htmlFor="agri_city">
                        City / Block <span className="required">*</span>
                      </label>
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
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="agri_state">
                        State <span className="required">*</span>
                      </label>
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
                      <label htmlFor="agri_country">
                        Country <span className="required">*</span>
                      </label>
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
                  </div>
                </fieldset>

                <button type="submit" className="submit-btn" disabled={loading}>
                  {loading ? 'Submitting...' : 'Submit Application'}
                </button>

              </form>
            )}

          </div>
        </div>
      </div>
      <Footer />
    </>
  );
};

export default GoiForm;
