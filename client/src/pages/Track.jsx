import { useState } from 'react';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import API from '../api';
import './Track.css';

const Track = () => {
  const [arn, setArn]       = useState('');
  const [result, setResult] = useState(null);
  const [error, setError]   = useState('');
  const [loading, setLoading] = useState(false);

  const handleSubmit = async e => {
    e.preventDefault();
    setLoading(true); setError(''); setResult(null);
    try {
      const { data } = await API.get(`/track/${arn.trim()}`);
      setResult(data);
    } catch (err) {
      setError(err.response?.data?.message || 'Application not found.');
    } finally {
      setLoading(false);
    }
  };

  return (
    <>
      <title>Track Status – Indfes Smartdoors</title>
      <Navbar />
      <div className="page-body">
        <div className="track-section">
          <div className="logarea">
            {error && <div className="msg_item">{error}</div>}
            <p id="Loginh">Track Application Status</p>
            <div className="fields">
              <form onSubmit={handleSubmit}>
                <input
                  type="text" 
                  placeholder="Application Reference Number (ARN)"
                  value={arn} 
                  onChange={e => setArn(e.target.value)} 
                  required
                />
                <div className="log_button">
                  <button type="submit" disabled={loading}>{loading ? 'Tracking…' : 'Track'}</button>
                </div>
              </form>
            </div>
            {result && (
              <div className="track-result">
                <p><b>ARN:</b> {result.arnNumber}</p>
                <p><b>Service:</b> {result.formType?.toUpperCase()}</p>
                <p><b>Status:</b> <span className="status-badge">{result.status}</span></p>
                <p><b>Submitted:</b> {new Date(result.createdAt).toLocaleDateString('en-IN')}</p>
              </div>
            )}
          </div>
        </div>
        <Footer />
      </div>
    </>
  );
};

export default Track;
