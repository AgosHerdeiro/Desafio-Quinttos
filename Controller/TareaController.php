<?php

class TareaController
{
    private $tareaModel;

    public function __construct($tareaModel)
    {
        $this->tareaModel = $tareaModel;
    }

    public function mostrarTodasLasTareas()
    {
        $tareas = $this->tareaModel->mostrarTodasLasTareas();
        require('View/ListadoTareaView.php');
    }

    public function mostrarFormularioCrearTarea()
    {
        require('View/CrearTareaView.php');
    }

    public function crearTareaNueva()
    {
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];

        return $this->tareaModel->crearUnaTarea($titulo, $descripcion);
    }

    public function completarTarea()
    {
        $idTarea = $_POST["id"];

        return $this->tareaModel->completarUnaTarea($idTarea);
    }

    public function deshacerTareaCompletada()
    {
        $idTarea = $_POST["id"];

        return $this->tareaModel->deshacerUnaTareaCompletada($idTarea);
    }

    public function eliminarTarea()
    {
        $idTarea = $_POST["id"];

        return $this->tareaModel->eliminarUnaTarea($idTarea);
    }
}