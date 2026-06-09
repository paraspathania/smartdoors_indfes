const express = require('express');
const router  = express.Router();
const protect = require('../middleware/auth');
const { Ticket, Refund, Payment, AppSupport } = require('../models/Support');

// ─── POST /api/support/ticket ─────────────────────────────────────────────────
router.post('/ticket', protect, async (req, res) => {
  try {
    const { r_service, r_des } = req.body;
    const ticket = await Ticket.create({
      userId:    req.user._id,
      r_email:   req.user.email,
      r_service,
      r_des,
    });
    res.status(201).json({ message: 'Ticket raised successfully', ticket });
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

// ─── POST /api/support/refund ─────────────────────────────────────────────────
router.post('/refund', protect, async (req, res) => {
  try {
    const { refund_pay, query_types, arn_no, issue_refund } = req.body;
    const refund = await Refund.create({
      userId:       req.user._id,
      refund_email: req.user.email,
      refund_pay,
      query_types,
      arn_no,
      issue_refund,
    });
    res.status(201).json({ message: 'Refund request submitted', refund });
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

// ─── POST /api/support/payment ────────────────────────────────────────────────
router.post('/payment', protect, async (req, res) => {
  try {
    const { refund, type, arn, issue } = req.body;
    const payment = await Payment.create({
      userId:    req.user._id,
      pay_email: req.user.email,
      refund,
      type,
      arn,
      issue: issue || '',
    });
    res.status(201).json({ message: 'Payment query submitted', payment });
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

// ─── GET /api/support/my-tickets ─────────────────────────────────────────────
router.get('/my-tickets', protect, async (req, res) => {
  try {
    const tickets = await Ticket.find({ userId: req.user._id }).sort({ createdAt: -1 });
    res.json(tickets);
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

module.exports = router;
