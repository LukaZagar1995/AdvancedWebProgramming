const mongoose = require('mongoose');

const ProjectSchema = new mongoose.Schema({
    name: {
        type: String,
        required: true
    },

    description: {
        type: String ,
        required: true
    },

    price: {
        type: Number,
        required: true
    },

    done_jobs: {
        type: String ,
        required: false
    },

    leader: {
        type: mongoose.Schema.Types.ObjectId,
        ref: 'User'
    },

    workers: [{
        type: mongoose.Schema.Types.ObjectId,
        ref: 'User'
    }],

    start_date: {
        type: Date,
        default: Date.now,
        required: true
    },

    end_date: {
        type: Date,
        required: true
    },

    isActive: {
        type: Boolean,
        default: true
    }
});

const Project = mongoose.model('Project', ProjectSchema);

module.exports = Project;