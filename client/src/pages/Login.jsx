import { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import { useAuth } from '../context/AuthContext';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import './Auth.css';

const Login = () => {
  const { login } = useAuth();
  const navigate  = useNavigate();
  const [form, setForm]   = useState({ email: '', password: '' });
  const [msg, setMsg]     = useState('');
  const [loading, setLoading] = useState(false);

  const handleChange = e => setForm({ ...form, [e.target.name]: e.target.value });

  const handleSubmit = async e => {
    e.preventDefault();
    setMsg('');

    // Client-side validations
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(form.email)) {
      setMsg('Please enter a valid email address.');
      return;
    }

    if (form.password.length < 6) {
      setMsg('Password must be at least 6 characters long.');
      return;
    }

    setLoading(true);
    try {
      await login(form.email, form.password);
      navigate('/dashboard');
    } catch (err) {
      setMsg(err.response?.data?.message || 'Login failed. Please verify your credentials.');
    } finally {
      setLoading(false);
    }
  };

  return (
    <>
      <title>Login – Indfes Smartdoors</title>
      <Navbar />
      <div className="page-body">
        <div className="auth-page-wrapper">
          <div className="auth-card">
            <div className="auth-card-header">
              <h2>Sign in to your account</h2>
              <p>Enter your registered credentials to access your dashboard.</p>
            </div>
            
            {msg && <div className="msg_item">{msg}</div>}
            
            <form onSubmit={handleSubmit} className="auth-form" noValidate>
              <div className="auth-field-group">
                <label htmlFor="user">Email Address</label>
                <input
                  id="user" 
                  type="email" 
                  name="email"
                  placeholder="email@example.com" 
                  required
                  value={form.email} 
                  onChange={handleChange}
                />
              </div>
              
              <div className="auth-field-group">
                <div className="label-row">
                  <label htmlFor="check">Password</label>
                  <Link to="/forgot" className="forgot-link">Forgot password?</Link>
                </div>
                <input
                  id="check" 
                  type="password" 
                  name="password"
                  placeholder="••••••••" 
                  required
                  value={form.password} 
                  onChange={handleChange}
                />
              </div>

              <button className="auth-btn" type="submit" disabled={loading}>
                {loading ? 'Signing in…' : 'Sign In'}
              </button>
            </form>
            
            <div className="auth-card-footer">
              <p>New to Smartdoors? <Link to="/signup">Create an account</Link></p>
            </div>
          </div>
        </div>
        <Footer />
      </div>
    </>
  );
};

export default Login;
