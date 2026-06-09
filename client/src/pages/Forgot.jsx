import { useState } from 'react';
import { Link } from 'react-router-dom';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
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
      <div className="page-body">
        <div className="auth-page-wrapper">
          <div className="auth-card">
            <div className="auth-card-header">
              <h2>Reset your password</h2>
              <p>Enter your registered email and mobile number to assign a new password.</p>
            </div>
            
            {msg && <div className={success ? 'msg_success' : 'msg_item'}>{msg}</div>}
            
            {!success && (
              <form onSubmit={handleSubmit} className="auth-form">
                <div className="auth-field-group">
                  <label htmlFor="email">Registered Email</label>
                  <input
                    id="email"
                    type="email"
                    name="email"
                    placeholder="email@example.com"
                    required
                    value={form.email}
                    onChange={handleChange}
                  />
                </div>

                <div className="auth-field-group">
                  <label htmlFor="mobile">Registered Mobile</label>
                  <input
                    id="mobile"
                    type="text"
                    name="mobile"
                    placeholder="10-digit mobile number"
                    required
                    value={form.mobile}
                    onChange={handleChange}
                  />
                </div>

                <div className="auth-field-group">
                  <label htmlFor="newPassword">New Password</label>
                  <input
                    id="newPassword"
                    type="password"
                    name="newPassword"
                    placeholder="Minimum 6 characters"
                    required
                    value={form.newPassword}
                    onChange={handleChange}
                  />
                </div>

                <button className="auth-btn" type="submit" disabled={loading}>
                  {loading ? 'Resetting password…' : 'Reset Password'}
                </button>
              </form>
            )}
            
            <div className="auth-card-footer">
              <p><Link to="/login">&larr; Back to sign in</Link></p>
            </div>
          </div>
        </div>
        <Footer />
      </div>
    </>
  );
};

export default Forgot;
