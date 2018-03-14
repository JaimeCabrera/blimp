<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include'' . $path . '/blimp/administrador/php/conexion.php';
$idHorario = $_POST['idTipoHorario'];
$idTipoRuta = $_POST['idTipoRutas'];
$horaSalida = $_POST['HoraSalida'];
echo $idHorario;
echo $idTipoRuta;
echo $horaSalida;
if (
        isset($_POST["idTipoHorario"]) &&
        isset($_POST["idTipoRutas"]) &&
        isset($_POST["HoraSalida"])
) {
    $sql1 = "INSERT INTO `turno` (`id_turno`, `horaDeSalida`, `FK_ID_tipoHorario`, `rutas_id_ruta`) VALUES (NULL,'" . $_POST["HoraSalida"] . "','$idHorario','$idTipoRuta')";
    $query = $con->query($sql1);

    if ($query != null) {
        print "<script>alert(\"Se ha Agregado exitosamente la nueva parada.\");</script>";
    } else {
        print "<script>alert(\"No se pudo agregar.\");</script>";
    }
}
header("location:verHorarios.php");
?>