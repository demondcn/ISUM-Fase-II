-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS isum;

-- Usar la base de datos
USE isum;

-- Crear la tabla de usuarios
CREATE TABLE IF NOT EXISTS login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);
