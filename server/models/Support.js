const mongoose = require('mongoose');

const ticketSchema = new mongoose.Schema(
  {
    userId:    { type: mongoose.Schema.Types.ObjectId, ref: 'User', required: true },
    r_email:   { type: String, required: true },
    r_service: { type: String, required: true },
    r_des:     { type: String, required: true },
    status:    { type: String, default: 'Active' },
  },
  { timestamps: true }
);

const refundSchema = new mongoose.Schema(
  {
    userId:       { type: mongoose.Schema.Types.ObjectId, ref: 'User', required: true },
    refund_email: { type: String, required: true },
    refund_pay:   { type: String, required: true },
    query_types:  { type: String, required: true },
    arn_no:       { type: String, required: true },
    issue_refund: { type: String, required: true },
    status:       { type: String, default: 'Active' },
  },
  { timestamps: true }
);

const paymentSchema = new mongoose.Schema(
  {
    userId:    { type: mongoose.Schema.Types.ObjectId, ref: 'User', required: true },
    pay_email: { type: String, required: true },
    refund:    { type: String, required: true },
    type:      { type: String, required: true },
    arn:       { type: String, required: true },
    issue:     { type: String, default: '' },
    status:    { type: String, default: 'Active' },
  },
  { timestamps: true }
);

const appSupportSchema = new mongoose.Schema(
  {
    userId:            { type: mongoose.Schema.Types.ObjectId, ref: 'User', required: true },
    app_email:         { type: String, required: true },
    application:       { type: String, required: true },
    app_types:         { type: String, required: true },
    app_arn:           { type: String, required: true },
    issue_application: { type: String, required: true },
    status:            { type: String, default: 'Active' },
  },
  { timestamps: true }
);

module.exports = {
  Ticket:     mongoose.model('Ticket',     ticketSchema),
  Refund:     mongoose.model('Refund',     refundSchema),
  Payment:    mongoose.model('Payment',    paymentSchema),
  AppSupport: mongoose.model('AppSupport', appSupportSchema),
};
