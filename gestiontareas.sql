CREATE DATABASE gestiontareas;

CREATE TABLE Tarea (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(50),
    descripcion TEXT,
    estaCompletada BOOLEAN DEFAULT 0
);