<?php

class TareaModel
{
    private $id;
    private $titulo;
    private $descripcion;
    private $estaCompletado;
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getEstaCompletado()
    {
        return $this->estaCompletado;
    }

    function setEstaCompletado($estaCompletado)
    {
        $this->estaCompletado = $estaCompletado;
    }

    public function mostrarTodasLasTareas()
    {
        $query = $this->database->query('SELECT * FROM Tarea');

        return $query->fetch_all(MYSQLI_ASSOC);
    }

    public function crearUnaTarea($titulo, $descripcion)
    {
        return $this->database->query("INSERT INTO Tarea (titulo, descripcion) VALUES ('$titulo', '$descripcion')");
    }

    public function completarUnaTarea($idTarea)
    {
        return $this->database->query('UPDATE Tarea SET estado = 1 WHERE id = ' . $idTarea);
    }

    public function deshacerUnaTareaCompletada($idTarea)
    {
        return $this->database->query('UPDATE Tarea SET estado = 0 WHERE id = ' . $idTarea);
    }

    public function eliminarUnaTarea($idTarea)
    {
        return $this->database->query("DELETE FROM Tarea WHERE id = '$idTarea'");
    }
}