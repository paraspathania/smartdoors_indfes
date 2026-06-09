import { BrowserRouter as Router, Routes, Route, Navigate } from 'react-router-dom';
import { AuthProvider } from './context/AuthContext';
import PrivateRoute from './components/PrivateRoute';
import ScrollToTop from './components/ScrollToTop';

import Home from './pages/Home';
import ServicesPage from './pages/ServicesPage';
import Login from './pages/Login';
import Signup from './pages/Signup';
import Forgot from './pages/Forgot';
import Dashboard from './pages/Dashboard';
import Track from './pages/Track';
import Raise from './pages/Raise';
import Refunds from './pages/Refunds';

import McaForm from './pages/forms/McaForm';
import PensionForm from './pages/forms/PensionForm';
import MsmeForm from './pages/forms/MsmeForm';
import IndividualForm from './pages/forms/IndividualForm';
import StudentForm from './pages/forms/StudentForm';
import RocForm from './pages/forms/RocForm';
import GoiForm from './pages/forms/GoiForm';
import LegalForm from './pages/forms/LegalForm';
import AccountingForm from './pages/forms/AccountingForm';
import EDistrictForm from './pages/forms/EDistrictForm';

function App() {
  return (
    <AuthProvider>
      <Router>
        <ScrollToTop />
        <Routes>
          {/* Public Routes */}
          <Route path="/" element={<Home />} />
          <Route path="/services" element={<ServicesPage />} />
          <Route path="/login" element={<Login />} />
          <Route path="/signup" element={<Signup />} />
          <Route path="/forgot" element={<Forgot />} />

          {/* Protected Routes */}
          <Route path="/dashboard" element={<PrivateRoute><Dashboard /></PrivateRoute>} />
          <Route path="/track" element={<PrivateRoute><Track /></PrivateRoute>} />
          <Route path="/raise" element={<PrivateRoute><Raise /></PrivateRoute>} />
          <Route path="/refunds" element={<PrivateRoute><Refunds /></PrivateRoute>} />

          {/* Service Forms */}
          <Route path="/forms/mca" element={<PrivateRoute><McaForm /></PrivateRoute>} />
          <Route path="/forms/pension" element={<PrivateRoute><PensionForm /></PrivateRoute>} />
          <Route path="/forms/msme" element={<PrivateRoute><MsmeForm /></PrivateRoute>} />
          <Route path="/forms/individual" element={<PrivateRoute><IndividualForm /></PrivateRoute>} />
          <Route path="/forms/student" element={<PrivateRoute><StudentForm /></PrivateRoute>} />
          <Route path="/forms/roc" element={<PrivateRoute><RocForm /></PrivateRoute>} />
          <Route path="/forms/goi" element={<PrivateRoute><GoiForm /></PrivateRoute>} />
          <Route path="/forms/agri" element={<PrivateRoute><GoiForm /></PrivateRoute>} />
          <Route path="/forms/legal" element={<PrivateRoute><LegalForm /></PrivateRoute>} />
          <Route path="/forms/accounting" element={<PrivateRoute><AccountingForm /></PrivateRoute>} />
          <Route path="/forms/district" element={<PrivateRoute><EDistrictForm /></PrivateRoute>} />

          {/* Catch-all redirect to Home */}
          <Route path="*" element={<Navigate to="/" replace />} />
        </Routes>
      </Router>
    </AuthProvider>
  );
}

export default App;
