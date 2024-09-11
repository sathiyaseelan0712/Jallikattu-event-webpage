const express = require('express');
const router = express.Router();
const bullController = require('../controllers/bull.controller');
const tamerController = require('../controllers/tamer.controller');
const upload = require('../middleware/upload');

// Bull registration routes
router.post(
  '/bulls/register',
  upload.fields([
    { name: 'ownerAadhaarImage', maxCount: 1 },
    { name: 'medicalCertificate', maxCount: 1 },
    { name: 'bullImage', maxCount: 1 }
  ]),
  bullController.registerBull
);

router.get('/bulls/:eventPlace', bullController.getBullsByEventPlace);

router.post('/tamer/register', upload.fields([
  { name: 'aadhar_card_image', maxCount: 1 },
  { name: 'medical_certificate_image', maxCount: 1 },
  { name: 'photo', maxCount: 1 }
]), (req, res) => {
  console.log('Body:', req.body);
  console.log('Files:', req.files);
  tamerController.submitTamerForm(req, res);
});

module.exports = router;

