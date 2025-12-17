CREATE DATABASE IF NOT EXISTS smartfashion;
USE smartfashion;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    alamat TEXT,
    email VARCHAR(100),
    password VARCHAR(255),
    telpon VARCHAR(15)
);
