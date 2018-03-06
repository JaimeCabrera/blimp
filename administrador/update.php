<?php

require_once './php/database/databaseConnect.php';
#$ID_ruta = $_POST['idruta'];
$idRuta = $_REQUEST['id_paradas'];
$dir = $_POST["Direccion"];
$lat = $_POST["Latitud"];
$long = $_POST["Longitud"];
$idParada = $_POST["idruta"];


if (isset($_POST["Direccion"]) &&isset($_POST["Latitud"]) && isset($_POST["Longitud"])) 
{
    	$sql = ("UPDATE paradas SET  direccion='$dir',latitud='$lat',longitud='$long',rutas_id_ruta='$idParada' WHERE id_paradas = '$idRuta' ");
    	
    	$query = $con->query($sql);
    	if ($query != null) {
        print "<script>;window.location='home.php';</script>";
    } else {
        print "<script>alert(\"No se pudo agregar.\");window.location='home.php';</script>";
    }
}
header("home.php");

