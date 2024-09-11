const Bull = require('../models/bull.model');

exports.registerBull = async (req, res) => {
  try {
    const bull = new Bull({
      ownerName: req.body.ownerName,
      ownerAadhaar: req.body.ownerAadhaar,
      ownerPhone: req.body.ownerPhone,
      ownerAddress: req.body.ownerAddress,
      assistantName: req.body.assistantName,
      assistantPhone: req.body.assistantPhone,
      breed: req.body.breed,
      isNative: req.body.isNative === 'yes',
      bullAge: req.body.bullAge,
      dentition: req.body.dentition,
      icd: req.body.icd,
      height: req.body.height,
      identificationMarks: req.body.identificationMarks,
      ownerAadhaarImage: req.files['ownerAadhaarImage'][0].path,
      medicalCertificate: req.files['medicalCertificate'][0].path,
      bullImage: req.files['bullImage'][0].path,
      pledgeAccepted: req.body.pledgeAccepted === 'on',
      eventPlace: req.body.eventPlace
    });

    const savedBull = await bull.save();
    res.status(201).json({ message: 'Bull registered successfully', bull: savedBull });
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
};

exports.getBullsByEventPlace = async (req, res) => {
  try {
    const bulls = await Bull.find({ eventPlace: req.params.eventPlace });
    if (!bulls || bulls.length === 0) {
      return res.status(404).json({ message: 'No bulls found for this event place' });
    }
    res.status(200).json(bulls);
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
};
