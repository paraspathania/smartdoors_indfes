import axios from 'axios';

const API = axios.create({ baseURL: import.meta.env.VITE_API_URL });

// Attach JWT to every request automatically
API.interceptors.request.use((config) => {
  const token = localStorage.getItem('smartdoors_token');
  if (token) config.headers.Authorization = `Bearer ${token}`;
  return config;
});

export default API;
