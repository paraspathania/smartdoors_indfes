import React, { useState } from 'react';
import Navbar from '../../components/Navbar';
import Footer from '../../components/Footer';
import useFormSubmit from './useFormSubmit';
import './ServiceForm.css';

const PensionForm = () => {
  const [form, setForm] = useState({
    pension_name: '',
    pension_f_h_name: '',
    pension_date: '',
    pension_gender: '',
    pension_service: '',
    pension_block: '',
    pension_district: '',
    pension_pincode: '',
    pension_state: '',
    pension_country: 'India',
    pension_phone: '',
    pension_email: '',
  });

  const { submit, arn, error, loading } = useFormSubmit('pension');

  const ch = e => setForm({ ...form, [e.target.name]: e.target.value });

  const handleSubmit = e => {
    e.preventDefault();
    submit(form);
  };

  return (
    <>
      <title>Pension Services – Indfes Smartdoors</title>
      <Navbar />
      <div className="service-form-page">
        <div className="service-form-container">

          <div className="service-form-header">
            <span className="service-form-tag">Pension &amp; Welfare Services</span>
            <h1 className="service-form-title">Pension Application Form</h1>
            <p className="service-form-subtitle">
              Apply for Old Age, Widow, or Physically Handicapped pension schemes through the state government portal.
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
              <form className="service-form" onSubmit={handleSubmit}>

                {/* Personal Details */}
                <fieldset className="form-section">
                  <legend>Personal Details</legend>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="pension_name">
                        Full Name <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="pension_name"
                        name="pension_name"
                        value={form.pension_name}
                        onChange={ch}
                        placeholder="Enter full name"
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="pension_f_h_name">
                        Father / Husband Name <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="pension_f_h_name"
                        name="pension_f_h_name"
                        value={form.pension_f_h_name}
                        onChange={ch}
                        placeholder="Enter father / husband name"
                        required
                      />
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="pension_date">
                        Date of Birth <span className="required">*</span>
                      </label>
                      <input
                        type="date"
                        id="pension_date"
                        name="pension_date"
                        value={form.pension_date}
                        onChange={ch}
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="pension_gender">
                        Gender <span className="required">*</span>
                      </label>
                      <select
                        id="pension_gender"
                        name="pension_gender"
                        value={form.pension_gender}
                        onChange={ch}
                        required
                      >
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="pension_phone">
                        Phone Number <span className="required">*</span>
                      </label>
                      <input
                        type="tel"
                        id="pension_phone"
                        name="pension_phone"
                        value={form.pension_phone}
                        onChange={ch}
                        placeholder="Enter phone number"
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="pension_email">
                        Email <span className="required">*</span>
                      </label>
                      <input
                        type="email"
                        id="pension_email"
                        name="pension_email"
                        value={form.pension_email}
                        onChange={ch}
                        placeholder="Enter email address"
                        required
                      />
                    </div>
                  </div>
                </fieldset>

                {/* Address Details */}
                <fieldset className="form-section">
                  <legend>Address Details</legend>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="pension_block">
                        Block / Tehsil <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="pension_block"
                        name="pension_block"
                        value={form.pension_block}
                        onChange={ch}
                        placeholder="Enter block / tehsil"
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="pension_district">
                        District <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="pension_district"
                        name="pension_district"
                        value={form.pension_district}
                        onChange={ch}
                        placeholder="Enter district"
                        required
                      />
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="pension_pincode">
                        Pincode <span className="required">*</span>
                      </label>
                      <input
                        type="number"
                        id="pension_pincode"
                        name="pension_pincode"
                        value={form.pension_pincode}
                        onChange={ch}
                        placeholder="Enter pincode"
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="pension_state">
                        State <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="pension_state"
                        name="pension_state"
                        value={form.pension_state}
                        onChange={ch}
                        placeholder="Enter state"
                        required
                      />
                    </div>
                  </div>

                  <div className="form-group">
                    <label htmlFor="pension_country">
                      Country <span className="required">*</span>
                    </label>
                    <input
                      type="text"
                      id="pension_country"
                      name="pension_country"
                      value={form.pension_country}
                      onChange={ch}
                      placeholder="Enter country"
                      required
                    />
                  </div>
                </fieldset>

                {/* Service Required */}
                <fieldset className="form-section">
                  <legend>Service Required</legend>

                  <div className="form-group">
                    <label htmlFor="pension_service">
                      Pension Type <span className="required">*</span>
                    </label>
                    <select
                      id="pension_service"
                      name="pension_service"
                      value={form.pension_service}
                      onChange={ch}
                      required
                    >
                      <option value="">Select Pension Type</option>
                      <option value="opension">Old Age Pension</option>
                      <option value="wpension">Widow Pension</option>
                      <option value="hpension">Physically Handicapped Pension</option>
                    </select>
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

export default PensionForm;
