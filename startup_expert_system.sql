CREATE DATABASE startup_expert_system;

USE startup_expert_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role ENUM('entrepreneur', 'investor', 'consultant') NOT NULL
);
