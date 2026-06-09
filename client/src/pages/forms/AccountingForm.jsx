import React, { useState } from 'react';
import Navbar from '../../components/Navbar';
import Footer from '../../components/Footer';
import useFormSubmit from './useFormSubmit';
import './ServiceForm.css';

const AccountingForm = () => {
  const [form, setForm] = useState({
    account_name: '',
    account_email: '',
    account_phone: '',
    account_addressa: '',
    account_addressb: '',
    account_city: '',
    account_b_type: '',
    account_b_name: '',
    account_regd_date: '',
    account_service: '',
    account_state: '',
    account_country: 'India',
  });

  const { submit, arn, error, loading } = useFormSubmit('accounting');

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
          <h1 className="service-form-title">Accounting &amp; Taxation – Indfes Smartdoors</h1>

          {arn && (
            <div className="arn-box">
              <p>Your Application Reference Number (ARN):</p>
              <strong>{arn}</strong>
            </div>
          )}

          {error && (
            <div className="form-error">
              {error}
            </div>
          )}

          <form className="service-form" onSubmit={handleSubmit} noValidate>

            {/* Personal Details */}
            <div className="form-group">
              <label htmlFor="account_name">Full Name</label>
              <input
                type="text"
                id="account_name"
                name="account_name"
                value={form.account_name}
                onChange={ch}
                placeholder="Full Name"
                required
              />
            </div>

            <div className="form-group">
              <label htmlFor="account_email">Email</label>
              <input
                type="email"
                id="account_email"
                name="account_email"
                value={form.account_email}
                onChange={ch}
                placeholder="Email"
                required
              />
            </div>

            <div className="form-group">
              <label htmlFor="account_phone">Phone Number</label>
              <input
                type="tel"
                id="account_phone"
                name="account_phone"
                value={form.account_phone}
                onChange={ch}
                placeholder="Phone Number"
                required
              />
            </div>

            {/* Address */}
            <div className="form-group">
              <label htmlFor="account_addressa">Address Line 1</label>
              <input
                type="text"
                id="account_addressa"
                name="account_addressa"
                value={form.account_addressa}
                onChange={ch}
                placeholder="Address Line 1"
                required
              />
            </div>

            <div className="form-group">
              <label htmlFor="account_addressb">Address Line 2</label>
              <input
                type="text"
                id="account_addressb"
                name="account_addressb"
                value={form.account_addressb}
                onChange={ch}
                placeholder="Address Line 2"
              />
            </div>

            <div className="form-group">
              <label htmlFor="account_city">City</label>
              <input
                type="text"
                id="account_city"
                name="account_city"
                value={form.account_city}
                onChange={ch}
                placeholder="City"
                required
              />
            </div>

            <div className="form-group">
              <label htmlFor="account_state">State</label>
              <input
                type="text"
                id="account_state"
                name="account_state"
                value={form.account_state}
                onChange={ch}
                placeholder="State"
                required
              />
            </div>

            <div className="form-group">
              <label htmlFor="account_country">Country</label>
              <input
                type="text"
                id="account_country"
                name="account_country"
                value={form.account_country}
                onChange={ch}
                placeholder="Country"
                required
              />
            </div>

            {/* Business Details */}
            <div className="form-group">
              <label htmlFor="account_b_type">Business Type</label>
              <select
                id="account_b_type"
                name="account_b_type"
                value={form.account_b_type}
                onChange={ch}
                required
              >
                <option value="">-- Select Business Type --</option>
                <option value="inl">Individual</option>
                <option value="pvtltd">Private Limited</option>
                <option value="opc">One Person Company</option>
                <option value="llp">LLP</option>
                <option value="prop">Proprietorship</option>
                <option value="trust">Trust</option>
              </select>
            </div>

            <div className="form-group">
              <label htmlFor="account_b_name">Business Name</label>
              <input
                type="text"
                id="account_b_name"
                name="account_b_name"
                value={form.account_b_name}
                onChange={ch}
                placeholder="Business Name"
              />
            </div>

            <div className="form-group">
              <label htmlFor="account_regd_date">Registration Date</label>
              <input
                type="date"
                id="account_regd_date"
                name="account_regd_date"
                value={form.account_regd_date}
                onChange={ch}
              />
            </div>

            {/* Service Selection */}
            <div className="form-group">
              <label htmlFor="account_service">Service Required</label>
              <select
                id="account_service"
                name="account_service"
                value={form.account_service}
                onChange={ch}
                required
              >
                <option value="">-- Select Service --</option>
                <option value="gstfile">GST Return Filing</option>
                <option value="itrfile">ITR Filing</option>
                <option value="audit">Audit</option>
                <option value="tds">TDS Return</option>
                <option value="bookkeeping">Book Keeping</option>
                <option value="gstann">GST Annual Return</option>
              </select>
            </div>

            <button
              type="submit"
              className="service-form-submit"
              disabled={loading}
            >
              {loading ? 'Submitting…' : 'Submit Application'}
            </button>

          </form>
        </div>
      </div>
      <Footer />
    </>
  );
};

export default AccountingForm;
