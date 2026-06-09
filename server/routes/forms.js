const express = require('express');
const router  = express.Router();
const { nanoid } = require('nanoid');
const protect = require('../middleware/auth');
const Form    = require('../models/Form');

// Valid form types
const VALID_TYPES = [
  'mca', 'pension', 'msme', 'district', 'individual',
  'legal', 'roc', 'student', 'accounting', 'agri', 'goi',
];

// ─── POST /api/forms/:type ────────────────────────────────────────────────────
// Submit a new service form (protected)
router.post('/:type', protect, async (req, res) => {
  try {
    const { type } = req.params;

    if (!VALID_TYPES.includes(type))
      return res.status(400).json({ message: `Unknown form type: ${type}` });

    const arnNumber = `${type.toUpperCase()}-${nanoid(10).toUpperCase()}`;

    const form = await Form.create({
      arnNumber,
      formType: type,
      userId:   req.user._id,
      email:    req.user.email,
      formData: req.body,
    });

    res.status(201).json({
      message:   'Form submitted successfully',
      arnNumber: form.arnNumber,
      status:    form.status,
    });
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

// ─── GET /api/forms/my ────────────────────────────────────────────────────────
// Get all forms submitted by the logged-in user
router.get('/my', protect, async (req, res) => {
  try {
    const forms = await Form.find({ userId: req.user._id })
      .select('arnNumber formType status createdAt')
      .sort({ createdAt: -1 });
    res.json(forms);
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

module.exports = router;
