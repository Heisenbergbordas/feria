<?php
require 'app/config/config.php';
$id = $_GET["id"];
//echo $id;
$sql=$conn->query("SELECT * FROM cliente WHERE no_cli=$id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Feria Abolu 2024</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h1 class="text-center alert alert-secondary">Actualizar Datos</h1>
        <input type="hidden" name="id" value="<?= $_GET ["id"] ?>">

        <?php

            //var_dump($datos);
            //exit;

             include "actualiza.php";
            //aca se recorren las filas
            while ($datos=$sql->fetch_object()) { ?>
                <div class="mb-1">
                    <label for="editar" class="form-label">Nombre del Cliente</label>
                    <input type="text" class="form-control" name="cliente" value="<?=$datos->cliente?>" readonly="readonly">
                </div>
                <div class="mb-1">
                    <label for="editar" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo"  value="<?=$datos->correo ?>">
                </div>
                <div class="mb-1">
                    <label for="editar" class="form-label">Numero de Telefono</label>
                    <input type="text" name="cli_telefono" id="cli_telefono" class="form-control" value="<?=$datos->cli_telefono ?>">
                </div>
                <div class="mb-1">
                    <label for="editar" class="form-label">Cantidad de Personas</label>
                    <input type="int" name="cant_personas" id="cant_personas" class="form-control" value="<?=$datos->cant_personas ?>" required>
                </div>
                <div class="mb-1">
                    <label for="editar" class="form-label">Cantidad de Autos</label>
                    <input type="int" name="cant_autos" id="cant_autos" class="form-control" value="<?=$datos->cant_autos ?>" required>
                </div>

                <div class="mb-1">
                    <label for="editar" class="form-label">Vendedor:</label>
                    <input type="text" name="vendedor" id="vendedor" class="form-control" value="<?=$datos->vendedor ?>" readonly="readonly">
                </div>

                <div class="mb-1">
                        <label for="fecha_visita">Fecha de Visita:</label>
                        <input type="text" name="fecha_visita" id="fecha_visita" class="form-control" value="<?=$datos->fecha_visita ?>" readonly="readonly">   
                    </div>              

            <?php }
        ?>

        <br>

         <a type="button" a href="index.php" onclick="close(this.window);" class="btn btn-secondary"><i class="fa-solid fa-door-closed"></i> Cerrar</a>
         <button type="submit" class="btn btn-primary" name="btneditar" value="ok" ><i class="fa-regular fa-file-pen"></i> Editar</button>
              
    </form>


</body>

</html>