const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 3000;

// Replace 'your_database_connection_string' with your actual database connection string
const mongoose = require('mongoose');
mongoose.connect('your_database_connection_string', { useNewUrlParser: true, useUnifiedTopology: true });

const reviewSchema = new mongoose.Schema({
    name: String,
    rating: Number,
    comment: String
});

const Review = mongoose.model('Review', reviewSchema);

app.use(express.static('public'));
app.use(bodyParser.json());

app.get('/api/reviews', async (req, res) => {
    try {
        const reviews = await Review.find();
        res.json(reviews);
    } catch (error) {
        res.status(500).json({ error: 'Internal Server Error' });
    }
});

app.post('/api/reviews', async (req, res) => {
    const { name, rating, comment } = req.body;
    
    // Validate input (add more validation if needed)

    const newReview = new Review({ name, rating, comment });

    try {
        await newReview.save();
        res.status(201).json({ message: 'Review submitted successfully' });
    } catch (error) {
        res.status(500).json({ error: 'Internal Server Error' });
    }
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
