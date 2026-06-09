import { useState } from 'react';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import API from '../api';
import { useAuth } from '../context/AuthContext';
import './Track.css';
import './forms/ServiceForm.css';

const Raise = () => {
  const { user } = useAuth();
  const [form, setForm]     = useState({ r_service: '', r_des: '' });
  const [success, setSuccess] = useState('');
  const [error, setError]   = useState('');
  const [loading, setLoading] = useState(false);

  const handleSubmit = async e => {
    e.preventDefault(); setLoading(true); setError(''); setSuccess('');
    try {
      await API.post('/support/ticket', form);
      setSuccess('Your ticket has been raised successfully!');
      setForm({ r_service: '', r_des: '' });
    } catch (err) {
      setError(err.response?.data?.message || 'Failed to raise ticket.');
    } finally { setLoading(false); }
  };

  return (
    <>
      <title>Raise a Ticket – Indfes Smartdoors</title>
      <Navbar />
      <div className="form-page">
        <div className="form-container">
          <h2>Raise a Support Ticket</h2>
          {success && <div className="msg_success">{success}</div>}
          {error   && <div className="msg_error">{error}</div>}
          <form onSubmit={handleSubmit}>
            <label>Service / Issue Type</label>
            <input
              type="text" placeholder="e.g. E-PAN, GST Registration…"
              value={form.r_service} required
              onChange={e => setForm({ ...form, r_service: e.target.value })}
            />
            <label>Describe your issue</label>
            <textarea
              placeholder="Describe your issue in detail…"
              value={form.r_des} required rows={5}
              onChange={e => setForm({ ...form, r_des: e.target.value })}
            />
            <center><button type="submit" disabled={loading}>{loading ? 'Submitting…' : 'Raise Ticket'}</button></center>
          </form>
        </div>
      </div>
      <Footer />
    </>
  );
};

export default Raise;
