import React, { useState } from 'react';
import Navbar from '../../components/Navbar';
import Footer from '../../components/Footer';
import useFormSubmit from './useFormSubmit';
import './ServiceForm.css';

const RocForm = () => {
  const [form, setForm] = useState({
    roc_fdirector: '',
    roc_sdirector: '',
    roc_a_s: '',
    roc_email: '',
    roc_phone: '',
    roc_alt_phone: '',
    roc_company: '',
    roc_c_id: '',
    roc_type: '',
    roc_service: '',
    roc_state: '',
    roc_country: 'India',
  });

  const { submit, arn, error, loading } = useFormSubmit('roc');

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
          <h1 className="service-form-title">ROC &amp; Compliance – Indfes Smartdoors</h1>

          {arn && (
            <div className="arn-box">
              <h3>Application Submitted Successfully!</h3>
              <p>Your Application Reference Number (ARN):</p>
              <strong>{arn}</strong>
            </div>
          )}

          {error && (
            <div className="error-div">
              <p>{error}</p>
            </div>
          )}

          {!arn && (
            <form className="service-form" onSubmit={handleSubmit} noValidate>

              {/* Director Details */}
              <fieldset className="form-section">
                <legend>Director Details</legend>

                <div className="form-group">
                  <label htmlFor="roc_fdirector">First Director Name <span className="required">*</span></label>
                  <input
                    type="text"
                    id="roc_fdirector"
                    name="roc_fdirector"
                    value={form.roc_fdirector}
                    onChange={ch}
                    placeholder="Enter first director name"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="roc_sdirector">Second Director Name</label>
                  <input
                    type="text"
                    id="roc_sdirector"
                    name="roc_sdirector"
                    value={form.roc_sdirector}
                    onChange={ch}
                    placeholder="Enter second director name"
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="roc_a_s">Authorized Signatory <span className="required">*</span></label>
                  <input
                    type="text"
                    id="roc_a_s"
                    name="roc_a_s"
                    value={form.roc_a_s}
                    onChange={ch}
                    placeholder="Enter authorized signatory name"
                    required
                  />
                </div>
              </fieldset>

              {/* Contact Details */}
              <fieldset className="form-section">
                <legend>Contact Details</legend>

                <div className="form-group">
                  <label htmlFor="roc_email">Email <span className="required">*</span></label>
                  <input
                    type="email"
                    id="roc_email"
                    name="roc_email"
                    value={form.roc_email}
                    onChange={ch}
                    placeholder="Enter email address"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="roc_phone">Phone Number <span className="required">*</span></label>
                  <input
                    type="tel"
                    id="roc_phone"
                    name="roc_phone"
                    value={form.roc_phone}
                    onChange={ch}
                    placeholder="Enter phone number"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="roc_alt_phone">Alternate Phone</label>
                  <input
                    type="tel"
                    id="roc_alt_phone"
                    name="roc_alt_phone"
                    value={form.roc_alt_phone}
                    onChange={ch}
                    placeholder="Enter alternate phone number"
                  />
                </div>
              </fieldset>

              {/* Company Details */}
              <fieldset className="form-section">
                <legend>Company Details</legend>

                <div className="form-group">
                  <label htmlFor="roc_company">Company Name <span className="required">*</span></label>
                  <input
                    type="text"
                    id="roc_company"
                    name="roc_company"
                    value={form.roc_company}
                    onChange={ch}
                    placeholder="Enter company name"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="roc_c_id">Company ID / CIN <span className="required">*</span></label>
                  <input
                    type="text"
                    id="roc_c_id"
                    name="roc_c_id"
                    value={form.roc_c_id}
                    onChange={ch}
                    placeholder="Enter Company ID or CIN"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="roc_type">Company Type <span className="required">*</span></label>
                  <select
                    id="roc_type"
                    name="roc_type"
                    value={form.roc_type}
                    onChange={ch}
                    required
                  >
                    <option value="">-- Select Company Type --</option>
                    <option value="private">Private Limited</option>
                    <option value="opc">One Person Company</option>
                    <option value="llp">LLP</option>
                  </select>
                </div>
              </fieldset>

              {/* Service Selection */}
              <fieldset className="form-section">
                <legend>Service Required</legend>

                <div className="form-group">
                  <label htmlFor="roc_service">Select Service <span className="required">*</span></label>
                  <select
                    id="roc_service"
                    name="roc_service"
                    value={form.roc_service}
                    onChange={ch}
                    required
                  >
                    <option value="">-- Select Service --</option>
                    <option value="inc20d">INC-20A</option>
                    <option value="aoc4">AOC-4 Return Filing</option>
                    <option value="mgt7">MGT-7 Return Filing</option>
                    <option value="gstfile">GST Return Filing</option>
                    <option value="itfile">Income Tax Return</option>
                    <option value="audit">Statutory &amp; Audit</option>
                    <option value="rocamc">ROC AMC</option>
                  </select>
                </div>
              </fieldset>

              {/* Location Details */}
              <fieldset className="form-section">
                <legend>Location</legend>

                <div className="form-group">
                  <label htmlFor="roc_state">State <span className="required">*</span></label>
                  <input
                    type="text"
                    id="roc_state"
                    name="roc_state"
                    value={form.roc_state}
                    onChange={ch}
                    placeholder="Enter state"
                    required
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="roc_country">Country <span className="required">*</span></label>
                  <input
                    type="text"
                    id="roc_country"
                    name="roc_country"
                    value={form.roc_country}
                    onChange={ch}
                    placeholder="Enter country"
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

export default RocForm;
