<?php
include "conexion.php";
$result = mysqli_query($con, "SELECT * FROM paradas");
$num=0;
$num1=0;
$num2=0;
$num3=0;
$num4=0;
$num5=0;
$num6=0;
 while ($ruta = $result->fetch_array()) {
  $lat[$num]= $ruta['latitud'];
  $lng[$num]=$ruta['longitud'];

  if($ruta['rutas_id_ruta']==1){
    $luno[$num1]=$num;
    $num1++;
  }else  if($ruta['rutas_id_ruta']==2){
    $ldos[$num2]=$num;
    $num2++;
  }else  if($ruta['rutas_id_ruta']==3){
    $ltres[$num3]=$num;
    $num3++;
  }else  if($ruta['rutas_id_ruta']==4){
    $lcuatro[$num4]=$num;
    $num4++;
  }else  if($ruta['rutas_id_ruta']==5){
    $lcinco[$num5]=$num;
    $num5++;
  }else  if($ruta['rutas_id_ruta']==6){
    $lseis[$num6]=$num;
    $num6++;
  }
  $num++;
 }

?>
