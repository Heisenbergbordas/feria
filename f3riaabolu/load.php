 
<?php
/*
* Script: Cargar datos de lado del servidor con PHP y MySQL
* Autor: sbordas@abolu.com
*/

//session_start();
require 'app/config/config.php';

/* Un arreglo de las columnas a mostrar en la tabla */



$columns = ['no_cli', 'cliente', 'correo', 'cli_telefono', 'cant_personas', 'cant_autos', 'vendedor', 'fecha_visita'];

/* Nombre de la tabla */
$table = "cliente";
$id = 'no_cli';

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

/* Filtrado */
$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

/* Limit */
$limit = isset($_POST['registros']) ? $conn->real_escape_string($_POST['registros']) : 10;
$pagina = isset($_POST['pagina']) ? $conn->real_escape_string($_POST['pagina']) : 0;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $limit;
}

$sLimit = "LIMIT $inicio , $limit";

/**
 * Ordenamiento
 */

 $sOrder = "";
 if(isset($_POST['orderCol'])){
    $orderCol = $_POST['orderCol'];
    $oderType = isset($_POST['orderType']) ? $_POST['orderType'] : 'asc';
    
    $sOrder = "ORDER BY ". $columns[intval($orderCol)] . ' ' . $oderType;
 }


/* Consulta */
$sql = "SELECT SQL_CALC_FOUND_ROWS " . implode(", ", $columns) . "
FROM $table
$where
$sOrder
$sLimit";
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

/* Consulta para total de registro filtrados */
$sqlFiltro = "SELECT FOUND_ROWS()";
$resFiltro = $conn->query($sqlFiltro);
$row_filtro = $resFiltro->fetch_array();
$totalFiltro = $row_filtro[0];

/* Consulta para total de registro filtrados */
$sqlTotal = "SELECT count($id) FROM $table ";
$resTotal = $conn->query($sqlTotal);
$row_total = $resTotal->fetch_array();
$totalRegistros = $row_total[0];

/* Mostrado resultados */
$output = [];
$output['totalRegistros'] = $totalRegistros;
$output['totalFiltro'] = $totalFiltro;
$output['data'] = '';
$output['paginacion'] = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $output['data'] .= '<tr>';
        $output['data'] .= '<td>' . $row['no_cli'] . '</td>';
        $output['data'] .= '<td>' . $row['cliente'] . '</td>';
        $output['data'] .= '<td>' . $row['correo'] . '</td>';
        $output['data'] .= '<td>' . $row['cli_telefono'] . '</td>';
        $output['data'] .= '<td>' . $row['cant_personas'] . '</td>';
        $output['data'] .= '<td>' . $row['cant_autos'] . '</td>';
        $output['data'] .= '<td>' . $row['vendedor'] . '</td>';
        $output['data'] .= '<td>' . $row['fecha_visita'] . '</td>';
        $output['data'] .= '<td><a class="btn btn-warning btn-sm" name= "editar" value = "editar"  href="editar.php?id='.$row['no_cli'] . '" > <i class="fa-solid fa-pen-to-square"></i>Editar</a></td>';
        //$output['data'] .= '<td><a class="btn btn-warning btn-sm" href="editar.php?id=' . $row['no_cli'] . '"> <i class="fa-solid fa-pen-to-square"></i>Editar</a></td>';
        //$output['data'] .= '<td><a class="btn btn-danger btn-sm" href="eliminar.php?id='. $row['no_cli'] .'"> <i class="fa-solid fa-trash"></i>Eliminar</a></td>';
        $output['data'] .= '</tr>';
    }
} else {
    $output['data'] .= '<tr>';
    $output['data'] .= '<td colspan="8">Informacion no disponible en la base de datos !!<i class="fa-regular fa-face-smile-wink"></i></td>';
    $output['data'] .= '</tr>';
}

if ($output['totalRegistros'] > 0) {
    $totalPaginas = ceil($output['totalRegistros'] / $limit);

    $output['paginacion'] .= '<nav>';
    $output['paginacion'] .= '<ul class="pagination">';

    $numeroInicio = 1;

    if(($pagina - 4) > 1){
        $numeroInicio = $pagina - 4;
    }

    $numeroFin = $numeroInicio + 9;

    if($numeroFin > $totalPaginas){
        $numeroFin = $totalPaginas;
    }

    for ($i = $numeroInicio; $i <= $numeroFin; $i++) {
        if ($pagina == $i) {
            $output['paginacion'] .= '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
        } else {
            $output['paginacion'] .= '<li class="page-item"><a class="page-link" href="#" onclick="nextPage(' . $i . ')">' . $i . '</a></li>';
        }
    }

    $output['paginacion'] .= '</ul>';
    $output['paginacion'] .= '</nav>';
}





echo json_encode($output, JSON_UNESCAPED_UNICODE);
