<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include'' . $path . '/blimp/administrador/php/conexion.php';
$ID_ruta = $_POST['idlinea'];

if (
        isset($_POST["nomRuta"]) &&
        isset($_POST["inicioRuta"]) &&
        isset($_POST["finRuta"]) &&
        isset($_POST["primerTurno"]) &&
        isset($_POST["ultimoTurno"]) &&
        isset($_POST["recorridoRuta"]) 
        
                                    ) 
    {
    $sql1 = "INSERT INTO rutas (id_ruta, nombreRuta, incioRuta, finRuta, primerTurno, ultimoTurno, recorrido,id_lineasdeBuses)VALUES (NULL,'" . $_POST["nomRuta"] . "','" . $_POST["inicioRuta"] . "','" . $_POST["finRuta"] . "','" . $_POST["primerTurno"] . "','" . $_POST["ultimoTurno"] . "','" . $_POST["recorridoRuta"] . "','$ID_ruta')";
    $query = $con->query($sql1);

    if ($query != null) {
        print "<script>alert(\"Se ha Agregado exitosamente la nueva parada.\");window.location='verRutas.php';</script>";
    } else {
        print "<script>alert(\"No se pudo agregar.\");window.location='verRutas.php';</script>";
    }
    }
header("location:verRutas.php");
?>