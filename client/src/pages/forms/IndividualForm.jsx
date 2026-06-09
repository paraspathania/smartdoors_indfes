import React, { useState } from 'react';
import Navbar from '../../components/Navbar';
import Footer from '../../components/Footer';
import useFormSubmit from './useFormSubmit';
import './ServiceForm.css';

const IndividualForm = () => {
  const [form, setForm] = useState({
    individual_name: '',
    individal_father: '',
    individual_mother: '',
    individual_gender: '',
    individaual_date: '',
    individual_phone: '',
    individual_houses: '',
    individual_district: '',
    individual_pincode: '',
    individual_service: '',
    individaul_action: '',
    individual_state: '',
    individual_country: 'India',
    email: '',
  });

  const { submit, arn, error, loading } = useFormSubmit('individual');

  const ch = e => setForm({ ...form, [e.target.name]: e.target.value });

  const handleSubmit = e => {
    e.preventDefault();
    submit(form);
  };

  return (
    <>
      <title>Individual Services – Indfes Smartdoors</title>
      <Navbar />

      <div className="service-form-page">
        <div className="service-form-container">

          <div className="service-form-header">
            <span className="service-form-tag">Individual Services</span>
            <h1 className="service-form-title">Individual Services Form</h1>
            <p className="service-form-subtitle">Apply for PAN Card, Aadhaar Update, Driving License, Passport, Voter ID, or CPGRMS Grievance services.</p>
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

                {/* Personal Details */}
                <fieldset className="form-section">
                  <legend>Personal Details</legend>

                  <div className="form-group">
                    <label htmlFor="individual_name">Full Name <span className="required">*</span></label>
                    <input
                      type="text"
                      id="individual_name"
                      name="individual_name"
                      value={form.individual_name}
                      onChange={ch}
                      placeholder="Enter your full name"
                      required
                    />
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="individal_father">Father's Name <span className="required">*</span></label>
                      <input
                        type="text"
                        id="individal_father"
                        name="individal_father"
                        value={form.individal_father}
                        onChange={ch}
                        placeholder="Enter father's name"
                        required
                      />
                    </div>

                    <div className="form-group">
                      <label htmlFor="individual_mother">Mother's Name <span className="required">*</span></label>
                      <input
                        type="text"
                        id="individual_mother"
                        name="individual_mother"
                        value={form.individual_mother}
                        onChange={ch}
                        placeholder="Enter mother's name"
                        required
                      />
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="individual_gender">Gender <span className="required">*</span></label>
                      <select
                        id="individual_gender"
                        name="individual_gender"
                        value={form.individual_gender}
                        onChange={ch}
                        required
                      >
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                      </select>
                    </div>

                    <div className="form-group">
                      <label htmlFor="individaual_date">Date of Birth <span className="required">*</span></label>
                      <input
                        type="date"
                        id="individaual_date"
                        name="individaual_date"
                        value={form.individaual_date}
                        onChange={ch}
                        required
                      />
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="individual_phone">Phone Number <span className="required">*</span></label>
                      <input
                        type="tel"
                        id="individual_phone"
                        name="individual_phone"
                        value={form.individual_phone}
                        onChange={ch}
                        placeholder="Enter phone number"
                        required
                      />
                    </div>

                    <div className="form-group">
                      <label htmlFor="email">Email <span className="required">*</span></label>
                      <input
                        type="email"
                        id="email"
                        name="email"
                        value={form.email}
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

                  <div className="form-group">
                    <label htmlFor="individual_houses">House / Ward / Village <span className="required">*</span></label>
                    <input
                      type="text"
                      id="individual_houses"
                      name="individual_houses"
                      value={form.individual_houses}
                      onChange={ch}
                      placeholder="House no., Ward, or Village"
                      required
                    />
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="individual_district">District <span className="required">*</span></label>
                      <input
                        type="text"
                        id="individual_district"
                        name="individual_district"
                        value={form.individual_district}
                        onChange={ch}
                        placeholder="Enter district"
                        required
                      />
                    </div>

                    <div className="form-group">
                      <label htmlFor="individual_pincode">Pincode <span className="required">*</span></label>
                      <input
                        type="number"
                        id="individual_pincode"
                        name="individual_pincode"
                        value={form.individual_pincode}
                        onChange={ch}
                        placeholder="Enter pincode"
                        required
                      />
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="individual_state">State <span className="required">*</span></label>
                      <input
                        type="text"
                        id="individual_state"
                        name="individual_state"
                        value={form.individual_state}
                        onChange={ch}
                        placeholder="Enter state"
                        required
                      />
                    </div>

                    <div className="form-group">
                      <label htmlFor="individual_country">Country <span className="required">*</span></label>
                      <input
                        type="text"
                        id="individual_country"
                        name="individual_country"
                        value={form.individual_country}
                        onChange={ch}
                        placeholder="Enter country"
                        required
                      />
                    </div>
                  </div>
                </fieldset>

                {/* Service Details */}
                <fieldset className="form-section">
                  <legend>Service Details</legend>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="individual_service">Service Required <span className="required">*</span></label>
                      <select
                        id="individual_service"
                        name="individual_service"
                        value={form.individual_service}
                        onChange={ch}
                        required
                      >
                        <option value="">Select Service</option>
                        <option value="pan">PAN Card</option>
                        <option value="aadhar">Aadhar Update</option>
                        <option value="driving">Driving License</option>
                        <option value="passport">Passport Services</option>
                        <option value="voterid">Voter ID</option>
                        <option value="cpgrms">CPGRMS Grievance</option>
                      </select>
                    </div>

                    <div className="form-group">
                      <label htmlFor="individaul_action">Action Type <span className="required">*</span></label>
                      <select
                        id="individaul_action"
                        name="individaul_action"
                        value={form.individaul_action}
                        onChange={ch}
                        required
                      >
                        <option value="">Select Action</option>
                        <option value="enrol">New Enrollment</option>
                        <option value="update">Update / Correction</option>
                      </select>
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

export default IndividualForm;
