const Tamer = require('../models/tamer.Model.');

// Handle form submission logic
exports.submitTamerForm = async (req, res) => {
  const tamerData = new Tamer({
    tamer_name: req.body.tamer_name,
    tamer_email: req.body.tamer_email,
    tamer_phone: req.body.tamer_phone,
    tamer_address: req.body.tamer_address,
    tamer_aadhar: req.body.tamer_aadhar,
    weight: req.body.weight,
    height: req.body.height,
    blood: req.body.blood,
    emergency_name: req.body.emergency_name,
    emergency_number: req.body.emergency_number,
    aadhar_card_image: req.files['aadhar_card_image'][0].buffer,
    medical_certificate_image: req.files['medical_certificate_image'][0].buffer,
    photo: req.files['photo'][0].buffer,
    eventPlace: req.body.eventPlace
  });

  try {
    await tamerData.save();
    res.send('Data has been successfully submitted.');
  } catch (err) {
    res.status(500).send('Error: ' + err.message);
  }
};
