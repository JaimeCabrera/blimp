<?php
include "conexion.php";
$result = mysqli_query($con, "SELECT rutas.nombreRuta, rutas.incioRuta, rutas.finRuta, rutas.recorrido,
  rutas.id_lineasdeBuses, lineasdebuses.denotacion, lineasdebuses.id_lineadeBuses, lineasdebuses.nombreLineaBus
  FROM rutas, lineasdebuses WHERE rutas.id_lineasdeBuses=lineasdebuses.id_lineadeBuses ");
$aum=0;
 while ($ruta = $result->fetch_array()) {
  $nombreRuta[$aum]= $ruta['nombreRuta'];
  $inicioRuta[$aum]=$ruta['incioRuta'];
  $finRuta[$aum]= $ruta['finRuta'];
  $recorrido[$aum]=$ruta['recorrido'];
  $id[$aum]=$ruta['denotacion'];
  $nombreLineaBus[$aum]= $ruta['nombreLineaBus'];
  ;
  $aum++;
 }


?>
