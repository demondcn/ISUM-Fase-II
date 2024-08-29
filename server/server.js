const express = require('express');
const mysql = require('mysql');
const cors = require('cors');
const bodyParser = require('body-parser');  // Asegúrate de instalar body-parser con `npm install body-parser`
const app = express();

app.use(cors());
app.use(bodyParser.json());

const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "1234",
    database: "isum"
});

db.connect((err) => {
    if (err) {
        console.error('Error connecting to MySQL:', err);
        return;
    }
    console.log('Connected to MySQL');
    // Automatización del código:
    // Crear la base de datos y la tabla si no existen
    const createDatabaseQuery = `
        CREATE DATABASE IF NOT EXISTS isum;
    `;
    db.query(createDatabaseQuery, (err) => {
        if (err) {
            console.error('Error creating database:', err);
            return;
        }

        // Seleccionar la base de datos y crear la tabla
        db.query("USE isum;", (err) => {
            if (err) {
                console.error('Error selecting database:', err);
                return;
            }

            const createTableQuery = `
                CREATE TABLE IF NOT EXISTS login (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(255) NOT NULL,
                    email VARCHAR(255) UNIQUE NOT NULL,
                    password VARCHAR(255) NOT NULL
                );
            `;
            db.query(createTableQuery, (err) => {
                if (err) {
                    console.error('Error creating table:', err);
                    return;
                }
                console.log('Database and table are ready');
            });
        });
    });
});

// Manejo del registro de usuario
app.post('/register', (req, res) => {
    const { name, email, password } = req.body;

    const sql = "INSERT INTO login (name, email, password) VALUES (?, ?, ?)";
    const values = [name, email, password];

    db.query(sql, values, (err, results) => {
        if (err) {
            console.error('Error registering user:', err);
            return res.status(500).json({ message: "Error al registrar el usuario" });
        }
        return res.status(201).json({ message: "Usuario registrado exitosamente" });
    });
});

// Manejo del inicio de sesión
app.post('/login', (req, res) => {
    const { email, password } = req.body;

    const sql = "SELECT * FROM login WHERE email = ? AND password = ?";
    const values = [email, password];

    db.query(sql, values, (err, data) => {
        if (err) {
            console.error('Error during login:', err);
            return res.status(500).json({ message: "Login Fallido" });
        }
        if (data.length > 0) {
            return res.json({ message: "Login Exitoso", data });
        } else {
            return res.status(401).json({ message: "Credenciales Incorrectas" });
        }
    });
});

app.listen(8081, () => {
    console.log("Servidor corriendo en el puerto 8081");
});


