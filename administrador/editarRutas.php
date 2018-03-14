<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include'' . $path . '/blimp/administrador/php/conexion.php';
$id = $_REQUEST["id_ruta"];
$nomRuta = $_POST['nomRuta'];
$inRuta = $_POST['inicioRuta'];
$finRuta= $_POST['finRuta'];
$priTurno =$_POST['primerTurno'];
$ultTurno = $_POST['ultimoTurno'];
$recorrido = $_POST['recorridoRuta'];

if (
        isset($_POST["nomRuta"]) &&
        isset($_POST["inicioRuta"]) &&
        isset($_POST["finRuta"]) &&
        isset($_POST["primerTurno"]) &&
        isset($_POST["ultimoTurno"]) &&
        isset($_POST["recorridoRuta"]) 
        
                                    ) 
    {
    $sql1 = ("UPDATE rutas SET nombreRuta='$nomRuta', incioRuta='$inRuta', finRuta = '$finRuta', primerTurno = '$priTurno', ultimoTurno = '$ultTurno', recorrido ='$recorrido' WHERE id_ruta = '$id'");
    $query = $con->query($sql1);

    if ($query != null) {
        print "<script>alert(\"Se ha Agregado exitosamente la nueva parada.\");window.location='verRutas.php';</script>";
    } else {
        print "<script>alert(\"No se pudo agregar.\");window.location='verRutas.php';</script>";
    }
    }
header("location:verRutas.php");
?>