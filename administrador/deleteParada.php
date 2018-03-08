
<?php
require_once './php/database/databaseConnect.php';
$idParada = $_REQUEST["id_paradas"];
echo $idParada;
if (isset($_REQUEST["id_paradas"])) {
    $sql = ("DELETE FROM paradas WHERE paradas.id_paradas  = $idParada");
    $query = $con->query($sql);
    if ($query != null) {
        print "<script>alert(\"Se ha Eliminado exitosamente la  parada.\");window.location='home.php';</script>";
    } else {
        print "<script>alert(\"No se pudo agregar.\");window.location='home.php';</script>";
    }
}



//header("location:home.php");




    