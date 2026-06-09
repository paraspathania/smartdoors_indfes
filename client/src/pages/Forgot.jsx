import { useState } from 'react';
import { Link } from 'react-router-dom';
import Navbar from '../components/Navbar';
import API from '../api';
import './Auth.css';

const Forgot = () => {
  const [form, setForm]     = useState({ email: '', mobile: '', newPassword: '' });
  const [msg, setMsg]       = useState('');
  const [success, setSuccess] = useState(false);
  const [loading, setLoading] = useState(false);

  const handleChange = e => setForm({ ...form, [e.target.name]: e.target.value });

  const handleSubmit = async e => {
    e.preventDefault();
    setLoading(true);
    setMsg('');
    try {
      await API.post('/auth/forgot-password', form);
      setSuccess(true);
      setMsg('Password updated successfully! You can now log in.');
      setForm({ email: '', mobile: '', newPassword: '' });
    } catch (err) {
      setMsg(err.response?.data?.message || 'Failed to reset password. Please verify your details.');
    } finally {
      setLoading(false);
    }
  };

  return (
    <>
      <title>Forgot Password – Indfes Smartdoors</title>
      <Navbar />
      <div className="loginarea">
        <div className="logarea_left">
          <img src="/forgot.svg" alt="Forgot Password" style={{ width: '100%', height: '80%', marginTop: '10%' }} />
        </div>
        <div className="logarea_right">
          <div id="formarea">
            {msg && <div className={success ? 'msg_success' : 'msg_item'}>{msg}</div>}
            <center><h3>Forgot Password</h3></center>
            {!success && (
              <form onSubmit={handleSubmit}>
                <input
                  id="forms" type="email" name="email"
                  placeholder="Registered Email" required
                  value={form.email} onChange={handleChange}
                /><br />
                <input
                  id="forms" type="text" name="mobile"
                  placeholder="Registered Mobile" required
                  value={form.mobile} onChange={handleChange}
                /><br />
                <input
                  id="forms" type="password" name="newPassword"
                  placeholder="New Password" required
                  value={form.newPassword} onChange={handleChange}
                /><br />
                <center>
                  <button type="submit" disabled={loading}>
                    {loading ? 'Resetting…' : 'Reset'}
                  </button>
                </center>
              </form>
            )}
            <center style={{ marginTop: '15px' }}>
              <Link to="/login">Back to Login</Link>
            </center>
          </div>
        </div>
      </div>
    </>
  );
};

export default Forgot;
