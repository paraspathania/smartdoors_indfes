import { useState } from 'react';
import Navbar from '../../components/Navbar';
import Footer from '../../components/Footer';
import useFormSubmit from './useFormSubmit';
import './ServiceForm.css';

const McaForm = () => {
  const { submit, loading, arn, error } = useFormSubmit('mca');
  const [form, setForm] = useState({
    mca_name: '', mca_date: '', mca_gender: 'male',
    mca_service: 'pvtltd', mca_director: '', mca_a_capital: '',
    mca_p_capital: '', mca_shares: '', mca_pincode: '',
    mca_district: '', mca_state: '', mca_country: 'India',
    mca_phone: '', mca_email: '',
  });
  const ch = e => setForm({ ...form, [e.target.name]: e.target.value });

  return (
    <>
      <title>Company Registration – Indfes Smartdoors</title>
      <Navbar />
      <div className="service-form-page">
        <div className="service-form-container">

          <div className="service-form-header">
            <span className="service-form-tag">Company Registration</span>
            <h1 className="service-form-title">Company Registration Form</h1>
            <p className="service-form-subtitle">
              Incorporate Private Limited, Public Limited, LLP, OPC, Proprietorship, or apply for ISO, GST, MSME, Trademark, Startup India registrations.
            </p>
          </div>

          <div className="service-form-body">
            {arn ? (
              <div className="arn-box">
                <h3>Application Submitted</h3>
                <p>Your Application Reference Number</p>
                <p className="arn-number">{arn}</p>
                <p>Status: <b>Pending for Validation</b></p>
                <p>Save this number to track your application.</p>
              </div>
            ) : (
              <>
                {error && <div className="msg_error">{error}</div>}
                <form onSubmit={e => { e.preventDefault(); submit(form); }}>

                  {/* Fieldset 1: Applicant Details */}
                  <fieldset className="form-section">
                    <legend>Applicant Details</legend>

                    <div className="form-row-2">
                      <div className="form-group">
                        <label>Full Name <span className="required">*</span></label>
                        <input
                          name="mca_name"
                          placeholder="Full Name"
                          required
                          value={form.mca_name}
                          onChange={ch}
                        />
                      </div>
                      <div className="form-group">
                        <label>Date of Birth <span className="required">*</span></label>
                        <input
                          name="mca_date"
                          type="date"
                          required
                          value={form.mca_date}
                          onChange={ch}
                        />
                      </div>
                    </div>

                    <div className="form-row-2">
                      <div className="form-group">
                        <label>Gender</label>
                        <select name="mca_gender" value={form.mca_gender} onChange={ch}>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                      <div className="form-group">
                        <label>Phone Number <span className="required">*</span></label>
                        <input
                          name="mca_phone"
                          type="tel"
                          placeholder="10-digit number"
                          required
                          value={form.mca_phone}
                          onChange={ch}
                        />
                      </div>
                    </div>

                    <div className="form-group">
                      <label>Email <span className="required">*</span></label>
                      <input
                        name="mca_email"
                        type="email"
                        placeholder="email@example.com"
                        required
                        value={form.mca_email}
                        onChange={ch}
                      />
                    </div>
                  </fieldset>

                  {/* Fieldset 2: Company Details */}
                  <fieldset className="form-section">
                    <legend>Company Details</legend>

                    <div className="form-group">
                      <label>Service Type <span className="required">*</span></label>
                      <select name="mca_service" value={form.mca_service} onChange={ch}>
                        <option value="pvtltd">Private Limited Company</option>
                        <option value="publtd">Public Limited Company</option>
                        <option value="llp">Limited Liability Partnership</option>
                        <option value="opc">One Person Company</option>
                        <option value="prop">Proprietorship</option>
                        <option value="iso">ISO Certification</option>
                        <option value="copyright">Copyright Certification</option>
                        <option value="gst">GST Registration</option>
                        <option value="msmereg">MSME Registration</option>
                        <option value="trademark">Trademark Registration</option>
                        <option value="startup">Startup India Registration</option>
                      </select>
                    </div>

                    <div className="form-row-2">
                      <div className="form-group">
                        <label>Number of Directors <span className="required">*</span></label>
                        <input
                          name="mca_director"
                          type="number"
                          placeholder="e.g. 2"
                          required
                          value={form.mca_director}
                          onChange={ch}
                        />
                      </div>
                      <div className="form-group">
                        <label>Number of Shares <span className="required">*</span></label>
                        <input
                          name="mca_shares"
                          type="number"
                          placeholder="e.g. 10000"
                          required
                          value={form.mca_shares}
                          onChange={ch}
                        />
                      </div>
                    </div>

                    <div className="form-row-2">
                      <div className="form-group">
                        <label>Authorised Capital (₹) <span className="required">*</span></label>
                        <input
                          name="mca_a_capital"
                          type="number"
                          placeholder="e.g. 100000"
                          required
                          value={form.mca_a_capital}
                          onChange={ch}
                        />
                      </div>
                      <div className="form-group">
                        <label>Paid-up Capital (₹) <span className="required">*</span></label>
                        <input
                          name="mca_p_capital"
                          type="number"
                          placeholder="e.g. 50000"
                          required
                          value={form.mca_p_capital}
                          onChange={ch}
                        />
                      </div>
                    </div>
                  </fieldset>

                  {/* Fieldset 3: Location */}
                  <fieldset className="form-section">
                    <legend>Location</legend>

                    <div className="form-row-2">
                      <div className="form-group">
                        <label>District <span className="required">*</span></label>
                        <input
                          name="mca_district"
                          placeholder="District"
                          required
                          value={form.mca_district}
                          onChange={ch}
                        />
                      </div>
                      <div className="form-group">
                        <label>Pincode <span className="required">*</span></label>
                        <input
                          name="mca_pincode"
                          type="number"
                          placeholder="6-digit pincode"
                          required
                          value={form.mca_pincode}
                          onChange={ch}
                        />
                      </div>
                    </div>

                    <div className="form-row-2">
                      <div className="form-group">
                        <label>State <span className="required">*</span></label>
                        <input
                          name="mca_state"
                          placeholder="State"
                          required
                          value={form.mca_state}
                          onChange={ch}
                        />
                      </div>
                      <div className="form-group">
                        <label>Country</label>
                        <input
                          name="mca_country"
                          placeholder="Country"
                          value={form.mca_country}
                          onChange={ch}
                        />
                      </div>
                    </div>
                  </fieldset>

                  <button type="submit" className="submit-btn" disabled={loading}>
                    {loading ? 'Submitting...' : 'Submit Application'}
                  </button>

                </form>
              </>
            )}
          </div>

        </div>
      </div>
      <Footer />
    </>
  );
};

export default McaForm;
