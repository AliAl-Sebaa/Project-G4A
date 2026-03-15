CREATE DATABASE IF NOT EXISTS key_it_maintenance;
USE key_it_maintenance;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(100),
email VARCHAR(100) UNIQUE,
password VARCHAR(255),
department VARCHAR(50),
role ENUM('Admin','Employee','Technician') DEFAULT 'Employee',
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE requests (
id INT AUTO_INCREMENT PRIMARY KEY,
ticket_id VARCHAR(20),
user_id INT,
request_type VARCHAR(50),
category VARCHAR(100),
priority VARCHAR(20),
status VARCHAR(20) DEFAULT 'Pending',
description TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users(full_name,email,password,department,role)
VALUES(
'System Admin',
'admin@keycompany.com',
'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
'IT',
'Admin'
);