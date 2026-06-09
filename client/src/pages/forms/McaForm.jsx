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
      <title>MCA / Company Registration – Indfes Smartdoors</title>
      <Navbar />
      <div className="form-page">
        <div className="form-container">
          <h2>Company Registration (MCA)</h2>
          {error && <div className="msg_error">{error}</div>}
          {arn ? (
            <div className="arn-box">
              <h3>✅ Application Submitted!</h3>
              <p>Your Application Reference Number:</p>
              <p className="arn-number">{arn}</p>
              <p>Status: <b>Pending for Validation</b></p>
            </div>
          ) : (
            <form onSubmit={e => { e.preventDefault(); submit(form); }}>
              <label>Full Name</label>
              <input name="mca_name" placeholder="Full Name" required value={form.mca_name} onChange={ch} />

              <label>Date of Birth</label>
              <input name="mca_date" type="date" required value={form.mca_date} onChange={ch} />

              <label>Gender</label>
              <select name="mca_gender" value={form.mca_gender} onChange={ch}>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>

              <label>Service Type</label>
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

              <label>Number of Directors</label>
              <input name="mca_director" type="number" placeholder="e.g. 2" required value={form.mca_director} onChange={ch} />

              <label>Authorised Capital (₹)</label>
              <input name="mca_a_capital" type="number" placeholder="e.g. 100000" required value={form.mca_a_capital} onChange={ch} />

              <label>Paid-up Capital (₹)</label>
              <input name="mca_p_capital" type="number" placeholder="e.g. 50000" required value={form.mca_p_capital} onChange={ch} />

              <label>Number of Shares</label>
              <input name="mca_shares" type="number" placeholder="e.g. 10000" required value={form.mca_shares} onChange={ch} />

              <label>Phone Number</label>
              <input name="mca_phone" type="tel" placeholder="10-digit number" required value={form.mca_phone} onChange={ch} />

              <label>Email</label>
              <input name="mca_email" type="email" placeholder="email@example.com" required value={form.mca_email} onChange={ch} />

              <label>District</label>
              <input name="mca_district" placeholder="District" required value={form.mca_district} onChange={ch} />

              <label>Pincode</label>
              <input name="mca_pincode" type="number" placeholder="6-digit pincode" required value={form.mca_pincode} onChange={ch} />

              <label>State</label>
              <input name="mca_state" placeholder="State" required value={form.mca_state} onChange={ch} />

              <label>Country</label>
              <input name="mca_country" placeholder="Country" value={form.mca_country} onChange={ch} />

              <center><button type="submit" disabled={loading}>{loading ? 'Submitting…' : 'Submit'}</button></center>
            </form>
          )}
        </div>
      </div>
      <Footer />
    </>
  );
};

export default McaForm;
