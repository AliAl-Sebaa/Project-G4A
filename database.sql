CREATE DATABASE key_it_maintenance;

USE key_it_maintenance;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100) UNIQUE,
department VARCHAR(100),
password VARCHAR(255),
role ENUM('Admin','Employee','Technician'),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE requests(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
type VARCHAR(50),
description TEXT,
priority VARCHAR(20),
status VARCHAR(20) DEFAULT 'Pending',
technician_id INT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE request_comments(
id INT AUTO_INCREMENT PRIMARY KEY,
request_id INT,
user_id INT,
comment TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE notifications(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
message TEXT,
is_read INT DEFAULT 0,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users(name,email,department,password,role)
VALUES(
'System Admin',
'admin@keycompany.com',
'IT',
'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
'Admin'
);
