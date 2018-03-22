<?php
include "conexion.php";
$result = mysqli_query($con, "SELECT * FROM lineasdebuses ORDER BY lineasdebuses.numeroConsultas DESC LIMIT 3");
//print_r($result);
while ($linea = $result->fetch_array()) {
    $idLinea = $linea['id_lineadeBuses'];
    $denotacion = $linea['denotacion'];
    $busquedas = $linea['numeroConsultas'];
    $resultado = mysqli_query($con, "SELECT * FROM  rutas WHERE rutas.id_lineasdeBuses = '$idLinea' ");
    while ($ruta = $resultado->fetch_array()) {
        $nombreRuta = $ruta['nombreRuta'];
        $inicioRuta = $ruta['incioRuta'];
        $finRuta = $ruta['finRuta'];
        $recorrido = $ruta['recorrido'];
    }
    echo"<div class='col-md-4'>
            <div class='panel panel-info'>
            <div class='panel-heading'> 
                <a href='rutas.php?variable=$denotacion' style='cursor:hand; '>$denotacion</a> 
            </div>
                <div class='panel-body' style='color:#5d6d7e'>
                    $recorrido<br><br>
                    <small style='color: #abb2b9'>Total de busquedas: $busquedas</small>
                </div>
            </div>
        </div>";
}
?>
