import React, { useState } from 'react';
import Navbar from '../../components/Navbar';
import Footer from '../../components/Footer';
import useFormSubmit from './useFormSubmit';
import './ServiceForm.css';

const StudentForm = () => {
  const [form, setForm] = useState({
    student_name: '',
    student_father: '',
    student_mother: '',
    student_gender: '',
    student_date: '',
    student_phone: '',
    student_block: '',
    student_district: '',
    student_pin: '',
    student_service: '',
    student_state: '',
    student_country: 'India',
    email: '',
  });

  const { submit, arn, error, loading } = useFormSubmit('student');
  const ch = e => setForm({ ...form, [e.target.name]: e.target.value });
  const handleSubmit = e => { e.preventDefault(); submit(form); };

  return (
    <>
      <title>Student Services – Indfes Smartdoors</title>
      <Navbar />

      <div className="service-form-page">
        <div className="service-form-container">

          {/* Header */}
          <div className="service-form-header">
            <span className="service-form-tag">Student Services</span>
            <h1 className="service-form-title">Application Form</h1>
            <p className="service-form-subtitle">
              Fill in your details to apply for student documentation services including gap certificates, affidavits, and EWS certificates.
            </p>
          </div>

          {/* Body */}
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

            {error && <div className="msg_error">{error}</div>}

            {!arn && (
              <form className="service-form" onSubmit={handleSubmit} noValidate>

                {/* Personal Details */}
                <fieldset className="form-section">
                  <legend>Personal Details</legend>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="student_name">Full Name <span className="required">*</span></label>
                      <input type="text" id="student_name" name="student_name"
                        value={form.student_name} onChange={ch}
                        placeholder="Enter your full name" required />
                    </div>
                    <div className="form-group">
                      <label htmlFor="student_father">Father's Name <span className="required">*</span></label>
                      <input type="text" id="student_father" name="student_father"
                        value={form.student_father} onChange={ch}
                        placeholder="Enter father's name" required />
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="student_mother">Mother's Name <span className="required">*</span></label>
                      <input type="text" id="student_mother" name="student_mother"
                        value={form.student_mother} onChange={ch}
                        placeholder="Enter mother's name" required />
                    </div>
                    <div className="form-group">
                      <label htmlFor="student_gender">Gender <span className="required">*</span></label>
                      <select id="student_gender" name="student_gender"
                        value={form.student_gender} onChange={ch} required>
                        <option value="">Select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="student_date">Date of Birth <span className="required">*</span></label>
                      <input type="date" id="student_date" name="student_date"
                        value={form.student_date} onChange={ch} required />
                    </div>
                    <div className="form-group">
                      <label htmlFor="student_phone">Phone Number <span className="required">*</span></label>
                      <input type="tel" id="student_phone" name="student_phone"
                        value={form.student_phone} onChange={ch}
                        placeholder="10-digit number" required />
                    </div>
                  </div>

                  <div className="form-group">
                    <label htmlFor="email">Email Address <span className="required">*</span></label>
                    <input type="email" id="email" name="email"
                      value={form.email} onChange={ch}
                      placeholder="Enter your email" required />
                  </div>
                </fieldset>

                {/* Address */}
                <fieldset className="form-section">
                  <legend>Address Details</legend>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="student_block">Block / Tehsil <span className="required">*</span></label>
                      <input type="text" id="student_block" name="student_block"
                        value={form.student_block} onChange={ch}
                        placeholder="Enter block or tehsil" required />
                    </div>
                    <div className="form-group">
                      <label htmlFor="student_district">District <span className="required">*</span></label>
                      <input type="text" id="student_district" name="student_district"
                        value={form.student_district} onChange={ch}
                        placeholder="Enter your district" required />
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="student_pin">Pincode <span className="required">*</span></label>
                      <input type="number" id="student_pin" name="student_pin"
                        value={form.student_pin} onChange={ch}
                        placeholder="6-digit pincode" required />
                    </div>
                    <div className="form-group">
                      <label htmlFor="student_state">State <span className="required">*</span></label>
                      <input type="text" id="student_state" name="student_state"
                        value={form.student_state} onChange={ch}
                        placeholder="Enter your state" required />
                    </div>
                  </div>

                  <div className="form-group">
                    <label htmlFor="student_country">Country <span className="required">*</span></label>
                    <input type="text" id="student_country" name="student_country"
                      value={form.student_country} onChange={ch}
                      placeholder="Enter your country" required />
                  </div>
                </fieldset>

                {/* Service */}
                <fieldset className="form-section">
                  <legend>Service Required</legend>

                  <div className="form-group">
                    <label htmlFor="student_service">Select Service <span className="required">*</span></label>
                    <select id="student_service" name="student_service"
                      value={form.student_service} onChange={ch} required>
                      <option value="">Select a service</option>
                      <option value="gap">Education Gap Certificate</option>
                      <option value="sgca">Single Girl Child Affidavit</option>
                      <option value="smca">Single Mother Child Affidavit</option>
                      <option value="dob">Date of Birth Affidavit</option>
                      <option value="income">Proof of Income Affidavit</option>
                      <option value="address">Proof of Address Affidavit</option>
                      <option value="ews">EWS Certificate</option>
                      <option value="loan">Education Loan Affidavit</option>
                      <option value="nocr">No Criminal Record Affidavit</option>
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

export default StudentForm;
