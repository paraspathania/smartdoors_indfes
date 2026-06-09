import { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import { useAuth } from '../context/AuthContext';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import './Auth.css';

const Signup = () => {
  const { signup } = useAuth();
  const navigate   = useNavigate();
  const [form, setForm]     = useState({ name: '', phone: '', email: '', password: '' });
  const [msg, setMsg]       = useState('');
  const [loading, setLoading] = useState(false);

  const handleChange = e => setForm({ ...form, [e.target.name]: e.target.value });

  const handleSubmit = async e => {
    e.preventDefault();
    setMsg('');

    // 1. Name check
    if (form.name.trim().length < 3) {
      setMsg('Name must be at least 3 characters long.');
      return;
    }

    // 2. Phone check (must be exactly 10 digits)
    const phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(form.phone)) {
      setMsg('Phone number must be exactly 10 digits.');
      return;
    }

    // 3. Email check
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(form.email)) {
      setMsg('Please enter a valid email address.');
      return;
    }

    // 4. Password check
    if (form.password.length < 6) {
      setMsg('Password must be at least 6 characters long.');
      return;
    }

    setLoading(true);
    try {
      await signup(form.name, form.phone, form.email, form.password);
      navigate('/dashboard');
    } catch (err) {
      setMsg(err.response?.data?.message || 'Registration failed. Please verify your entries.');
    } finally {
      setLoading(false);
    }
  };

  return (
    <>
      <title>Sign Up – Indfes Smartdoors</title>
      <Navbar />
      <div className="page-body">
        <div className="auth-page-wrapper">
          <div className="auth-card">
            <div className="auth-card-header">
              <h2>Create your account</h2>
              <p>Get started by registering your details for applications and compliance tracking.</p>
            </div>
            
            {msg && <div className="msg_item">{msg}</div>}
            
            <form onSubmit={handleSubmit} className="auth-form" noValidate>
              <div className="auth-field-group">
                <label htmlFor="name">Full Name</label>
                <input
                  id="name"
                  type="text"
                  name="name"
                  placeholder="e.g. Prince Kumar"
                  required
                  value={form.name}
                  onChange={handleChange}
                />
              </div>

              <div className="auth-field-group">
                <label htmlFor="phone">Phone Number</label>
                <input
                  id="phone"
                  type="tel"
                  name="phone"
                  placeholder="10-digit mobile number"
                  required
                  value={form.phone}
                  onChange={handleChange}
                />
              </div>

              <div className="auth-field-group">
                <label htmlFor="email">Email Address</label>
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
                <label htmlFor="password">Password</label>
                <input
                  id="password"
                  type="password"
                  name="password"
                  placeholder="Minimum 6 characters"
                  required
                  value={form.password}
                  onChange={handleChange}
                />
              </div>

              <button className="auth-btn" type="submit" disabled={loading}>
                {loading ? 'Creating account…' : 'Sign Up'}
              </button>
            </form>
            
            <div className="auth-card-footer">
              <p>Already have an account? <Link to="/login">Sign in here</Link></p>
            </div>
          </div>
        </div>
        <Footer />
      </div>
    </>
  );
};

export default Signup;
