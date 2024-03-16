<?php
require_once('Config/config.php');

require_once('Model/TareaModel.php');
require_once('Controller/TareaController.php');

$con = conexion();
$tareaModel = new TareaModel($con);
$tareaController = new TareaController($tareaModel);

$tareaController->mostrarFormularioCrearTarea();
$tareaController->mostrarTodasLasTareas();

if (isset($_POST['guardar'])) {

    if ($tareaController->crearTareaNueva()) {
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    } else {
        echo 'error';
    }
}

if (isset($_POST['completar']) || isset($_POST['deshacer'])) {
    $success = isset($_POST['completar']) ? $tareaController->completarTarea() : $tareaController->deshacerTareaCompletada();

    if (!$success) {
        echo 'error';
    } else {
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    }
}

if (isset($_POST['eliminar'])) {

    if ($tareaController->eliminarTarea()) {
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    } else {
        echo 'error';
    }
}