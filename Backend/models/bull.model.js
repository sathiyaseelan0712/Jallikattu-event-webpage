const mongoose = require("mongoose");

const bullSchema = new mongoose.Schema({
  ownerName: { type: String, required: true },
  ownerAadhaar: { type: String, required: true },
  ownerPhone: { type: String, required: true },
  ownerAddress: { type: String, required: true },
  assistantName: { type: String, required: true },
  assistantPhone: { type: String, required: true },
  breed: { type: String, required: true },
  isNative: { type: Boolean, required: true },
  bullAge: { type: Number, required: true },
  dentition: { type: Number, required: true },
  icd: { type: Number, required: true },
  height: { type: Number, required: true },
  identificationMarks: { type: String, required: true },
  ownerAadhaarImage: { type: String, required: true }, 
  medicalCertificate: { type: String, required: true },
  bullImage: { type: String, required: true }, 
  pledgeAccepted: { type: Boolean, required: true },
  eventPlace: { type: String, required: true }, 
});

module.exports = mongoose.model("Bull", bullSchema);
