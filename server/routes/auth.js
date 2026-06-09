const express = require('express');
const router  = express.Router();
const jwt     = require('jsonwebtoken');
const User    = require('../models/User');

// Helper: generate JWT
const generateToken = (id) =>
  jwt.sign({ id }, process.env.JWT_SECRET, { expiresIn: process.env.JWT_EXPIRE });

// ─── POST /api/auth/signup ────────────────────────────────────────────────────
router.post('/signup', async (req, res) => {
  try {
    const { name, mobile, email, password } = req.body;

    if (!name || !mobile || !email || !password)
      return res.status(400).json({ message: 'All fields are required' });

    const existing = await User.findOne({ $or: [{ email }, { mobile }] });
    if (existing)
      return res.status(409).json({ message: 'Email or mobile already registered' });

    const user = await User.create({ name, mobile, email, password });

    res.status(201).json({
      token: generateToken(user._id),
      user:  { id: user._id, name: user.name, email: user.email, mobile: user.mobile },
    });
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

// ─── POST /api/auth/login ─────────────────────────────────────────────────────
router.post('/login', async (req, res) => {
  try {
    const { email, password } = req.body;

    if (!email || !password)
      return res.status(400).json({ message: 'Email and password are required' });

    const user = await User.findOne({ email });
    if (!user || !(await user.matchPassword(password)))
      return res.status(401).json({ message: 'Invalid email or password' });

    res.json({
      token: generateToken(user._id),
      user:  { id: user._id, name: user.name, email: user.email, mobile: user.mobile },
    });
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

// ─── GET /api/auth/me ─────────────────────────────────────────────────────────
const protect = require('../middleware/auth');
router.get('/me', protect, (req, res) => {
  const { _id, name, email, mobile } = req.user;
  res.json({ id: _id, name, email, mobile });
});

// ─── POST /api/auth/forgot-password ──────────────────────────────────────────
router.post('/forgot-password', async (req, res) => {
  try {
    const { email, mobile, newPassword } = req.body;
    if (!email || !mobile || !newPassword) {
      return res.status(400).json({ message: 'Email, mobile, and new password are required' });
    }
    const user = await User.findOne({ email, mobile });
    if (!user) {
      return res.status(404).json({ message: 'User with provided email and mobile not found' });
    }
    user.password = newPassword;
    await user.save();
    res.json({ message: 'Password reset successful' });
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

module.exports = router;

