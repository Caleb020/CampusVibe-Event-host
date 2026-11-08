-- Create CampusVibe database
CREATE DATABASE IF NOT EXISTS campusvibe;

-- Select the database
USE campusvibe;


-- Table for student event registrations
CREATE TABLE registrations (

    id INT AUTO_INCREMENT PRIMARY KEY,

    full_name VARCHAR(100) NOT NULL,

    registration_number VARCHAR(50) NOT NULL,

    email VARCHAR(100) NOT NULL,

    phone VARCHAR(20) NOT NULL,

    event_name VARCHAR(150) NOT NULL,

    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    -- Prevent the same student registering twice for one event
    UNIQUE KEY unique_registration (registration_number, event_name)

);


-- Table for contact messages
CREATE TABLE messages (

    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    email VARCHAR(100) NOT NULL,

    subject VARCHAR(150) NOT NULL,

    message TEXT NOT NULL,

    date_sent TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);