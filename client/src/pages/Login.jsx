import { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import { useAuth } from '../context/AuthContext';
import Navbar from '../components/Navbar';
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
    setLoading(true);
    try {
      await login(form.email, form.password);
      navigate('/dashboard');
    } catch (err) {
      setMsg(err.response?.data?.message || 'Login failed. Please try again.');
    } finally {
      setLoading(false);
    }
  };

  return (
    <>
      <title>Login – Indfes Smartdoors</title>
      <Navbar />
      <div className="logsection">
        <div id="left">
          <img src="/loginhere.png" alt="Login" style={{ width: '90%', height: '90%', marginLeft: '5%', marginTop: '3%' }} />
        </div>
        <div id="right">
          <div className="formarea">
            {msg && <div className="msg_item">{msg}</div>}
            <h4>Login</h4>
            <form onSubmit={handleSubmit}>
              <input
                id="user" type="email" name="email"
                placeholder="Email" required
                value={form.email} onChange={handleChange}
              />
              <input
                id="check" type="password" name="password"
                placeholder="Password" required
                value={form.password} onChange={handleChange}
              />
              <center>
                <button id="logbut" type="submit" disabled={loading}>
                  {loading ? 'Logging in…' : 'Login'}
                </button>
              </center>
            </form>
            <center style={{ marginTop: '10px' }}>
              <Link to="/signup" style={{ marginLeft: '15px' }}>New user? Sign Up</Link>
              &nbsp;|&nbsp;
              <Link to="/forgot">Forgot Password?</Link>
            </center>
          </div>
        </div>
      </div>
    </>
  );
};

export default Login;
