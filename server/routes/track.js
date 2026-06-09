const express = require('express');
const router  = express.Router();
const protect = require('../middleware/auth');
const Form    = require('../models/Form');

// ─── GET /api/track/:arn ──────────────────────────────────────────────────────
router.get('/:arn', protect, async (req, res) => {
  try {
    const form = await Form.findOne({ arnNumber: req.params.arn });

    if (!form)
      return res.status(404).json({ message: 'Invalid ARN. Application not found.' });

    res.json({
      arnNumber: form.arnNumber,
      formType:  form.formType,
      status:    form.status,
      createdAt: form.createdAt,
    });
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

module.exports = router;
