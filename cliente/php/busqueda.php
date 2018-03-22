<?php
include "conexion.php";
$salida="";
if(isset($_POST['consulta'])){
    $result = mysqli_query($con, "SELECT rutas.nombreRuta, rutas.incioRuta, rutas.finRuta, rutas.recorrido,
      rutas.id_lineasdeBuses, lineasdebuses.denotacion, lineasdebuses.id_lineadeBuses, lineasdebuses.nombreLineaBus
       FROM rutas, `lineasdebuses`  where  rutas.id_lineasdeBuses=lineasdebuses.id_lineadeBuses AND (nombreLineaBus
       LIKE '%$_POST[consulta]%' OR finRuta LIKE '%$_POST[consulta]%' OR incioRuta LIKE '%$_POST[consulta]%' OR nombreRuta
       LIKE '%$_POST[consulta]%' OR recorrido LIKE '%$_POST[consulta]%' )");

    if($result-> num_rows > 0){
      while($fila=$result->fetch_array()){
        $salida.= "<div>
                  <div class='panel panel-primary'>
                    <div class='panel-body'>
                      <b>Ruta:</b> <a id='$fila[denotacion]' onclick='clicks(this.id)'>".$fila['denotacion']." (".$fila['nombreLineaBus'].") </a></br> <b>Inicio: </b>".$fila['incioRuta']." </br> <b>Fin: </b>".$fila['finRuta']."
                    </div>
                  </div>
                  </div>";
                }
    }else{
      $salida="<div class='well well-lg'>No se encuentra esa ruta :(</div>";
    }
}
echo $salida;
 ?>
