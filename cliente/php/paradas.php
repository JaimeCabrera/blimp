<?php
include "conexion.php";
$result = mysqli_query($con, "SELECT * FROM paradas");
$num=0;
 while ($ruta = $result->fetch_array()) {
  $lat[$num]= $ruta['latitud'];
  $lng[$num]=$ruta['longitud'];
  $num++;
 }

?>
