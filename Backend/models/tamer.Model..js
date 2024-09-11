const mongoose = require('mongoose');

const tamerSchema = new mongoose.Schema({
  tamer_name: { type: String, required: true },
  tamer_email: { type: String, required: true },
  tamer_phone: { type: String, required: true },
  tamer_address: { type: String, required: true },
  tamer_aadhar: { type: String, required: true },
  weight: { type: String, required: true },
  height: { type: String, required: true },
  blood: { type: String, required: true },
  emergency_name: { type: String, required: true },
  emergency_number: { type: String, required: true },
  aadhar_card_image: { type: Buffer, required: true },
  medical_certificate_image: { type: Buffer, required: true },
  photo: { type: Buffer, required: true },
  eventPlace: { type: String, required: true },
});

module.exports = mongoose.model('Tamer', tamerSchema);
