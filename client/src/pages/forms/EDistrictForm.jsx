import { useState } from 'react';
import Navbar from '../../components/Navbar';
import Footer from '../../components/Footer';
import useFormSubmit from './useFormSubmit';
import './ServiceForm.css';

export default function EDistrictForm() {
  const [form, setForm] = useState({
    service: '',
    form_name: '',
    form_father_name: '',
    form_mother_name: '',
    form_gender: '',
    form_mobile: '',
    form_landmark: '',
    form_block: '',
    form_district: '',
    form_pincode: '',
    form_post: '',
    form_state: '',
    country: 'India',
    form_email: '',
    form_date: '',
  });

  const { submit, arn, error, loading } = useFormSubmit('district');

  const ch = e => setForm({ ...form, [e.target.name]: e.target.value });

  const handleSubmit = e => {
    e.preventDefault();
    submit(form);
  };

  return (
    <>
      <title>E-District Services – Indfes Smartdoors</title>
      <Navbar />

      <div className="service-form-page">
        <div className="service-form-container">

          <div className="service-form-header">
            <span className="service-form-tag">E-District Services</span>
            <h1 className="service-form-title">E-District Application Form</h1>
            <p className="service-form-subtitle">
              Apply for government certificates including Domicile, Income, Caste, EWS, Character certificates, and pension schemes.
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

            {error && <div className="msg_error">{error}</div>}

            {!arn && (
              <form className="service-form" onSubmit={handleSubmit}>

                {/* Service Required */}
                <fieldset className="form-section">
                  <legend>Service Required</legend>

                  <div className="form-group">
                    <label htmlFor="service">
                      Service <span className="required">*</span>
                    </label>
                    <select
                      id="service"
                      name="service"
                      value={form.service}
                      onChange={ch}
                      required
                    >
                      <option value="">Select Service</option>
                      <option value="domicile">Domicile Certificate</option>
                      <option value="income">Income Certificate</option>
                      <option value="caste">Caste Certificate</option>
                      <option value="character">Character Certificate</option>
                      <option value="ews">EWS Certificate</option>
                      <option value="opension">Old Age Pension</option>
                      <option value="wpension">Widow Pension</option>
                      <option value="gapcert">Gap Certificate</option>
                      <option value="poa">Proof of Address Affidavit</option>
                      <option value="poi">Proof of Income Affidavit</option>
                    </select>
                  </div>
                </fieldset>

                {/* Personal Details */}
                <fieldset className="form-section">
                  <legend>Personal Details</legend>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="form_name">
                        Full Name <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="form_name"
                        name="form_name"
                        placeholder="Enter full name"
                        value={form.form_name}
                        onChange={ch}
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="form_father_name">
                        Father's Name <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="form_father_name"
                        name="form_father_name"
                        placeholder="Enter father's name"
                        value={form.form_father_name}
                        onChange={ch}
                        required
                      />
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="form_mother_name">
                        Mother's Name <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="form_mother_name"
                        name="form_mother_name"
                        placeholder="Enter mother's name"
                        value={form.form_mother_name}
                        onChange={ch}
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="form_gender">
                        Gender <span className="required">*</span>
                      </label>
                      <select
                        id="form_gender"
                        name="form_gender"
                        value={form.form_gender}
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
                      <label htmlFor="form_mobile">
                        Mobile Number <span className="required">*</span>
                      </label>
                      <input
                        type="tel"
                        id="form_mobile"
                        name="form_mobile"
                        placeholder="Enter mobile number"
                        value={form.form_mobile}
                        onChange={ch}
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="form_email">
                        Email <span className="required">*</span>
                      </label>
                      <input
                        type="email"
                        id="form_email"
                        name="form_email"
                        placeholder="Enter email address"
                        value={form.form_email}
                        onChange={ch}
                        required
                      />
                    </div>
                  </div>

                  <div className="form-group">
                    <label htmlFor="form_date">
                      Application Date <span className="required">*</span>
                    </label>
                    <input
                      type="date"
                      id="form_date"
                      name="form_date"
                      value={form.form_date}
                      onChange={ch}
                      required
                    />
                  </div>
                </fieldset>

                {/* Address Details */}
                <fieldset className="form-section">
                  <legend>Address Details</legend>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="form_landmark">
                        Landmark / Village / Ward <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="form_landmark"
                        name="form_landmark"
                        placeholder="Enter landmark, village, or ward"
                        value={form.form_landmark}
                        onChange={ch}
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="form_block">
                        Block / Tehsil <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="form_block"
                        name="form_block"
                        placeholder="Enter block or tehsil"
                        value={form.form_block}
                        onChange={ch}
                        required
                      />
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="form_district">
                        District <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="form_district"
                        name="form_district"
                        placeholder="Enter district"
                        value={form.form_district}
                        onChange={ch}
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="form_pincode">
                        Pincode <span className="required">*</span>
                      </label>
                      <input
                        type="number"
                        id="form_pincode"
                        name="form_pincode"
                        placeholder="Enter pincode"
                        value={form.form_pincode}
                        onChange={ch}
                        required
                      />
                    </div>
                  </div>

                  <div className="form-row-2">
                    <div className="form-group">
                      <label htmlFor="form_post">
                        Post Office <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="form_post"
                        name="form_post"
                        placeholder="Enter post office"
                        value={form.form_post}
                        onChange={ch}
                        required
                      />
                    </div>
                    <div className="form-group">
                      <label htmlFor="form_state">
                        State <span className="required">*</span>
                      </label>
                      <input
                        type="text"
                        id="form_state"
                        name="form_state"
                        placeholder="Enter state"
                        value={form.form_state}
                        onChange={ch}
                        required
                      />
                    </div>
                  </div>

                  <div className="form-group">
                    <label htmlFor="country">
                      Country <span className="required">*</span>
                    </label>
                    <input
                      type="text"
                      id="country"
                      name="country"
                      placeholder="Enter country"
                      value={form.country}
                      onChange={ch}
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
      </div>

      <Footer />
    </>
  );
}
