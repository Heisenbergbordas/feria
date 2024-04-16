<?php

require 'app/config/config.php';

if (!empty($_POST["btneditar"])){
    if (!empty($_POST["cliente"])and !empty($_POST["correo"])and !empty($_POST["cli_telefono"])and  !empty($_POST["cant_personas"])and  !empty($_POST["cant_autos"]) and !empty($_POST["vendedor"]) and !empty($_POST["fecha_visita"])){
        $id=$_POST["id"];
        $cliente=$_POST["cliente"];
        $correo=$_POST["correo"];
        $cli_telefono=$_POST["cli_telefono"];
        $cant_personas=$_POST["cant_personas"];
        $cant_autos=$_POST["cant_autos"];
        $vendedor=$_POST["vendedor"];
        $fecha_visita=$_POST["fecha_visita"];
        $sql=$conn->query("UPDATE cliente SET cliente= '$cliente', correo= '$correo', cli_telefono= '$cli_telefono', cant_personas= $cant_personas, cant_autos= $cant_autos, vendedor= '$vendedor', fecha_visita = NOW(), where no_cli = $id ");
        if($sql==1){
            header("location:index.php");

        }else{
            echo "<div class='alert alert-danger'>Error al modificar registro del cliente!!</div>";
        }

    }else{
        echo "<div class='alert alert-warning'>Favor Digitar valores para los campos Cantidad de Personas y Autos!!</div>";
    }   

}

?>








