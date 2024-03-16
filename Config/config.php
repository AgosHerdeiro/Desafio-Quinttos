<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASS = '';
const DB_PORT = '3306';
const DB_DATABASE = 'gestiontareas';

function conexion()
{
    $con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASS, DB_DATABASE);

    if (!$con) {
        echo 'error';
    }

    return $con;
}

const DIR_ROOT = "http://localhost/desafioquinttos/";