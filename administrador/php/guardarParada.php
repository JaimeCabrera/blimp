<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include ''.$path.'/blimp/administrador/php/database/databaseConnect.php';
include ''.$path.'/blimp/administrador/php/database/paradasController.php';
$dConnect1 = new DatabaseConnect;
$cdb = $dConnect1->dbConnectSimple();

$paradaController = new ParadasController();
$paradaController->cdb = $cdb;
if (isset($_POST["save-parada"])) {
    $idDireccion = $_POST['idDireccion'];
    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];
    $idRutas = $_POST['rutas_id_ruta'];
    $paradaController->create($idDireccion, $latitud, $longitud, $idRutas);
}
?> 