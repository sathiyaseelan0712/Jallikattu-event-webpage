const express = require('express');
const cors = require('cors');
const authRoutes = require('./routes/router');

const app = express();
app.use(cors());

// app.use(cors(({
//     origin: 'https://typeracer-pi.vercel.app',
//     methods: ['GET', 'POST', 'PUT', 'DELETE'],
//     credentials: true,
//   }))); 
app.use(express.json()); 

// Routes
app.use('/api', authRoutes);

// Error Handling Middleware
app.use((err, req, res, next) => {
    console.error(err.stack);
    res.status(500).send('Something broke!');
});

module.exports = app;
