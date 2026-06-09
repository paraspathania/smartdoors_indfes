import { createContext, useContext, useState, useEffect } from 'react';
import API from '../api';

const AuthContext = createContext(null);

export const AuthProvider = ({ children }) => {
  const [user, setUser]       = useState(null);
  const [loading, setLoading] = useState(true);

  // Restore session from localStorage on mount
  useEffect(() => {
    const token     = localStorage.getItem('smartdoors_token');
    const savedUser = localStorage.getItem('smartdoors_user');
    if (token && savedUser) {
      setUser(JSON.parse(savedUser));
    }
    setLoading(false);
  }, []);

  const login = async (email, password) => {
    const { data } = await API.post('/auth/login', { email, password });
    localStorage.setItem('smartdoors_token', data.token);
    localStorage.setItem('smartdoors_user',  JSON.stringify(data.user));
    setUser(data.user);
    return data;
  };

  const signup = async (name, mobile, email, password) => {
    const { data } = await API.post('/auth/signup', { name, mobile, email, password });
    localStorage.setItem('smartdoors_token', data.token);
    localStorage.setItem('smartdoors_user',  JSON.stringify(data.user));
    setUser(data.user);
    return data;
  };

  const logout = () => {
    localStorage.removeItem('smartdoors_token');
    localStorage.removeItem('smartdoors_user');
    setUser(null);
  };

  return (
    <AuthContext.Provider value={{ user, loading, login, signup, logout }}>
      {children}
    </AuthContext.Provider>
  );
};

export const useAuth = () => useContext(AuthContext);
