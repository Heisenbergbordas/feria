<?php

//Aca establezco conexion con la base de datos y envio los datos escritos en el formulario nuevo.php a la BD(clientes - tabla = cliente)

require 'app/config/config.php';

$cliente = $conn->real_escape_string($_POST['cliente']);
$correo = $conn->real_escape_string($_POST['correo']);
$cli_telefono = $conn->real_escape_string($_POST['cli_telefono']);
$cant_personas = $conn->real_escape_string($_POST['cant_personas']);
$cant_autos = $conn->real_escape_string($_POST['cant_autos']);
$vendedor = $conn->real_escape_string($_POST['vendedor']);
$fecha_visita = $conn->real_escape_string($_POST['fecha_visita']);

$sql = "INSERT INTO cliente (cliente, correo, cli_telefono, cant_personas, cant_autos, vendedor, fecha_visita)
VALUES ('$cliente', '$correo', '$cli_telefono', '$cant_personas', '$cant_autos', '$vendedor', NOW())";

if($conn->query($sql)){
    $id = $conn->insert_id;
}

header('Location: index.php'); 




