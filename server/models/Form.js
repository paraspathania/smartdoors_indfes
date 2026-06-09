const mongoose = require('mongoose');

// One flexible collection covers all 11 service form types.
// formType: mca | pension | msme | district | individual | legal | roc | student | accounting | agri | goi
const formSchema = new mongoose.Schema(
  {
    arnNumber: { type: String, required: true, unique: true },
    formType:  { type: String, required: true },
    userId:    { type: mongoose.Schema.Types.ObjectId, ref: 'User', required: true },
    email:     { type: String, required: true },
    status:    { type: String, default: 'Pending for Validation' },
    formData:  { type: mongoose.Schema.Types.Mixed, required: true }, // all form-specific fields
  },
  { timestamps: true }
);

module.exports = mongoose.model('Form', formSchema);
