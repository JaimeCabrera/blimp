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
    echo"<div class='col-xs-12 col-md-4'>
                <a href='rutas.php?variable=$denotacion' class='thumbnail'>  <h5 style='display: inline-block;'>$denotacion $nombreRuta </h5>            
                    <img src='assets/icon_bus.png' alt='turno' style='width:10%; text-alling:right'>                    
                    <small style='color:#5d6d7e; display:inline-block' >Total de busquedas: $busquedas</small>
                </a>                
            </div>";
       
}
?>
