
<?php
/*
* Script: Cargar datos de lado del servidor con PHP y MySQL
* Autor: sbordas@abolu.com
*/

//session_start();
require 'app/config/config.php';


/* Aca creo la consulta que sera consumido por nuevo.php
en Seleccionar list Vendedor, seguido se ejecuta la consulta con la variable $vendedores */
$sqlvendedores = "SELECT co_ven, nombre,correo FROM vendedor";
$vendedores = $conn->query($sqlvendedores);

$vendedores->data_seek(0);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Registro Cliente Feria Abolu 2024</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="./assets/css/all.min.css" rel="stylesheet">
    </head>

    <main>
         <center><h2>Nuevo Registro Cliente Feria Abolu 2024</h2></center>

           
        <div class="container py-4 text-right">

            
            <form action="guardar.php" method="post" enctype="multipart/form-data">
            <input type="hidden" id="no_cli" name="no_cli">
            <div class="mb-3">
                <label for="cliente" class="form-label">Nombre del Cliente:</label>
                <input type="text" name="cliente" id="cliente" class="form-control" value="" placeholder="Nombre del Cliente">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo:</label>
                <input type="text" name="correo" id="correo" class="form-control" value="" placeholder="Correo">
            </div>
            <div class="mb-3">
                <label for="cli_telefono" class="form-label">Telefono:</label>
                <input type="text" name="cli_telefono" id="cli_telefono" class="form-control" value="" placeholder="Telefono">
            </div>

            <div class="mb-3">
                <label for="cant_personas" class="form-label">Cantidad de Personas:</label>
                <input type="text" name="cant_personas" id="cant_personas" class="form-control" value="" placeholder="# de acompañantes">
            </div>

            <div class="mb-3">
                <label for="cant-autos" class="form-label">Cantidad de Autos:</label>
                <input type="text" name="cant_autos" id="cant_autos" class="form-control" value="" placeholder="Cantida de autos">
            </div>

            <div class="mb-3">
                <label for="vendedor" class="form-label">Vendedor:</label>
                <select name="vendedor" id="vendedor" class="form-select" require>
                <option value="">Seleccionar Vendedor...</option>
                    <?php while ($row_vendedor = $vendedores->fetch_assoc()) { ?>
                        <option value="<?php echo $row_vendedor["co_ven"]; ?>"> <?= $row_vendedor ["nombre"]?></option>
                    <?php } ?>
                    
                </select>               

            </div>
            
            
            <div class="botones">              
              <a type="button" a href="index.php" onclick="close(this.window);" class="btn btn-secondary"><i class="fa-solid fa-door-closed"></i> Cerrar</a>
              <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
            </div>
            <br>
      
            </form>       
    
                    

        </div>
        

    </main>
     <!-- Bootstrap core JS -->   
     <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <body>
     

    </body>

</html>