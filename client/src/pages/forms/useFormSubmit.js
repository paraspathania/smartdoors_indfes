import { useState } from 'react';
import API from '../../api';

/**
 * useFormSubmit — shared form submission hook for all service forms.
 * @param {string} formType  — e.g., 'mca', 'pension', 'msme', etc.
 */
const useFormSubmit = (formType) => {
  const [loading, setLoading] = useState(false);
  const [arn, setArn]         = useState(null);
  const [error, setError]     = useState('');

  const submit = async (formData) => {
    setLoading(true); setError('');
    try {
      const { data } = await API.post(`/forms/${formType}`, formData);
      setArn(data.arnNumber);
    } catch (err) {
      setError(err.response?.data?.message || 'Submission failed. Please try again.');
    } finally {
      setLoading(false);
    }
  };

  return { submit, loading, arn, error };
};

export default useFormSubmit;
