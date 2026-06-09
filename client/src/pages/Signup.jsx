import { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import { useAuth } from '../context/AuthContext';
import Navbar from '../components/Navbar';
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
    setLoading(true);
    try {
      await signup(form.name, form.phone, form.email, form.password);
      navigate('/dashboard');
    } catch (err) {
      setMsg(err.response?.data?.message || 'Registration failed.');
    } finally {
      setLoading(false);
    }
  };

  return (
    <>
      <title>Sign Up – Indfes Smartdoors</title>
      <Navbar />
      <div className="loginarea">
        <div className="logarea_left">
          <img src="/create.png" alt="Signup" style={{ width: '100%', height: '80%', marginTop: '10%' }} />
        </div>
        <div className="logarea_right">
          <div id="formarea">
            {msg && <div className="msg_item">{msg}</div>}
            <center><h3>SignUp</h3></center>
            <form onSubmit={handleSubmit}>
              <input id="forms" type="text"   name="name"     placeholder="Name"     required value={form.name}     onChange={handleChange} /><br />
              <input id="forms" type="number" name="phone"    placeholder="Phone"    required value={form.phone}    onChange={handleChange} /><br />
              <input id="forms" type="email"  name="email"    placeholder="E-mail"   required value={form.email}    onChange={handleChange} /><br />
              <input id="forms" type="password" name="password" placeholder="Password" required value={form.password} onChange={handleChange} /><br />
              <center>
                <button type="submit" disabled={loading}>{loading ? 'Signing up…' : 'Signup'}</button>
              </center>
            </form>
            <center style={{ marginTop: '10px' }}>
              Already registered? <Link to="/login">Login here</Link>
            </center>
          </div>
        </div>
      </div>
    </>
  );
};

export default Signup;
