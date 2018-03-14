<?php
require_once './php/database/databaseConnect.php';
$idruta = $_REQUEST["id_ruta"];
echo $idruta;
if (isset($_REQUEST["id_ruta"])) {
    $sql = ("DELETE FROM rutas WHERE rutas.id_ruta  = $idruta");
    $query = $con->query($sql);
    if ($query != null) {
        print "<script>alert(\"Se ha Eliminado exitosamente la  parada.\");window.location='verRutas.php';</script>";
    } else {
        print "<script>alert(\"No se pudo agregar.\");window.location='verRutas.php';</script>";
    }
}
header("location:verRutas.php");