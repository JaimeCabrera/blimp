<?php

include './php/conexion.php';
$ID_ruta = $_POST['idruta'];

if (
        isset($_POST["idDireccion"]) &&
        isset($_POST["latitud"]) &&
        isset($_POST["longitud"])
) {
    $sql = "INSERT INTO paradas(id_paradas,direccion,latitud, longitud,rutas_id_ruta)VALUES (NULL,'" . $_POST["idDireccion"] . "',"
            . "'" . $_POST["latitud"] . "','" . $_POST["longitud"] . "','$ID_ruta')";
    $query = $con->query($sql);
    if ($query != null) {
        print "<script>alert(\"Se ha Agregado exitosamente la nueva parada.\");window.location='home.php';</script>";
    } else {
        print "<script>alert(\"No se pudo agregar.\");window.location='home.php';</script>";
    }
}
header("location:home.php");
?>