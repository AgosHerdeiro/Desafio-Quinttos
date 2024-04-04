CREATE DATABASE gestiontareas;

CREATE TABLE Tarea (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(50),
    descripcion TEXT,
    estado BIT(1) DEFAULT 0
);