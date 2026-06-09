import { useState } from 'react';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import API from '../api';
import './forms/ServiceForm.css';

const Refunds = () => {
  const [form, setForm]     = useState({ refund_pay: 'refund', query_types: '', arn_no: '', issue_refund: '' });
  const [success, setSuccess] = useState('');
  const [error, setError]   = useState('');
  const [loading, setLoading] = useState(false);

  const handleSubmit = async e => {
    e.preventDefault(); setLoading(true); setError(''); setSuccess('');
    try {
      await API.post('/support/refund', form);
      setSuccess('Your refund request has been submitted!');
      setForm({ refund_pay: 'refund', query_types: '', arn_no: '', issue_refund: '' });
    } catch (err) {
      setError(err.response?.data?.message || 'Failed to submit refund request.');
    } finally { setLoading(false); }
  };

  const ch = e => setForm({ ...form, [e.target.name]: e.target.value });

  return (
    <>
      <title>Refund Request – Indfes Smartdoors</title>
      <Navbar />
      <div className="form-page">
        <div className="form-container">
          <h2>Refund Request</h2>
          {success && <div className="msg_success">{success}</div>}
          {error   && <div className="msg_error">{error}</div>}
          <form onSubmit={handleSubmit}>
            <label>Request Type</label>
            <select name="refund_pay" value={form.refund_pay} onChange={ch}>
              <option value="refund">Refund</option>
              <option value="payment">Payment Issue</option>
              <option value="other">Other</option>
            </select>

            <label>Query Category</label>
            <select name="query_types" value={form.query_types} required onChange={ch}>
              <option value="">Select category…</option>
              <option value="c1">Application Not Processed</option>
              <option value="c2">Payment Deducted, No Service</option>
              <option value="c3">Duplicate Payment</option>
              <option value="c4">Service Cancelled</option>
              <option value="c5">Other Issue</option>
            </select>

            <label>Application Reference Number (ARN)</label>
            <input name="arn_no" type="text" placeholder="Your ARN number" required value={form.arn_no} onChange={ch} />

            <label>Describe your issue</label>
            <textarea name="issue_refund" placeholder="Describe your refund issue in detail…" required value={form.issue_refund} onChange={ch} />

            <center><button type="submit" disabled={loading}>{loading ? 'Submitting…' : 'Submit Request'}</button></center>
          </form>
        </div>
      </div>
      <Footer />
    </>
  );
};

export default Refunds;
