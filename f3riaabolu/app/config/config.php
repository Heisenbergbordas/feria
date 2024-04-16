<?php
/*
* Script: Conexión a base de datos de MySQL con PHP
* Autor: sbordas@abolu.com
*/


/* Creando una nueva conexión a la base de datos. */
//$conn = new mysqli("localhost", "root", "", "clientes");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "clientes");

/* Comprobando si hay un error de conexión. */
if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}
