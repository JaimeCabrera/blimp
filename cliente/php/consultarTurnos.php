<?php

include "conexion.php";
$resultado = mysqli_query($con, "SELECT rutas.id_ruta,rutas.nombreRuta,rutas.recorrido,rutas.id_lineasdeBuses,rutas.id_ruta,lineasdebuses.denotacion FROM rutas,lineasdebuses WHERE rutas.id_lineasdeBuses = lineasdebuses.id_lineadeBuses");
while ($inforRutas = $resultado->fetch_array()) {
    $id = $inforRutas['id_ruta'];
    $idRutas = $inforRutas['id_ruta'];
    $nomRuta = $inforRutas['nombreRuta'];
    $recorrido = $inforRutas['recorrido'];
    $nombreLinea = $inforRutas['denotacion'];
    echo"<div class='row'>
            <div class='col-xs-4 col-md-1'>
                <a  class='thumbnail'>  <h4 style='display: inline-block;'>$nombreLinea </h4>            
                    <img src='assets/icon_bus.png' alt='turno'>
                </a>
            </div>";

    $resultadoTurnos = mysqli_query($con, "SELECT turno.horaDeSalida,turno.FK_ID_tipoHorario,turno.rutas_id_ruta,rutas.nombreRuta,rutas.id_ruta,horarios.tipo FROM turno,horarios,rutas WHERE turno.rutas_id_ruta = '$idRutas' AND turno.FK_ID_tipoHorario=horarios.id_tipoHorarios AND rutas.id_ruta = '$idRutas' ORDER BY turno.horaDeSalida ASC");
    $rowHoraSalida = Array();
    while ($turno = $resultadoTurnos->fetch_array()) {
        $rowHoraSalida[] = $turno['horaDeSalida'];
        $tipoHorario = $turno['FK_ID_tipoHorario'];
    }

    echo"<div class='col-xs-8 col-md-10'>
            <table class='table'>
				<thead>
					<th  class='success' style='color:#7D3C98'><h5>$nomRuta</h5> </th>
				</thead>
					<tbody style='color:#B9770E'>";
   						 $pos = 0;
   						 $cont = 4;
   						 foreach ($rowHoraSalida as $valor) {
        					if ($pos++ > $cont) {
           						 $pos = 0;
            					echo "<td  style='clear:both;float:left;padding:10px;'><b>" . $valor . "</b></td>";									
       						 } else {
            					echo "<td  style='float:left;padding:15px;'><b>" . $valor . "</b></td>";
            					
        					}
        					$cont=$cont+5;
   						 }
   				echo"</tbody>
      		</table>
    </div>
 </div>";


    
}
?>
