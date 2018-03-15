<?php
include "conexion.php";
$resultado = mysqli_query($con, "SELECT rutas.id_ruta,rutas.nombreRuta,rutas.recorrido,rutas.id_lineasdeBuses,rutas.id_ruta,lineasdebuses.denotacion FROM rutas,lineasdebuses WHERE rutas.id_lineasdeBuses = lineasdebuses.id_lineadeBuses") ;
	while ($inforRutas = $resultado->fetch_array()) {
	$id=			$inforRutas['id_ruta'];
	$idRutas=		$inforRutas['id_ruta'];
	$nomRuta=		$inforRutas['nombreRuta'];
	$recorrido=		$inforRutas['recorrido'];
	$nombreLinea =  $inforRutas['denotacion'];
	echo"<div class='panel-group' id='accordion'>";
		echo"<div class='panel panel-default'>";
			echo"<div class='panel-heading'>";
				echo" <h4 class='panel-title'>";
					echo"<i class='fas fa-bus'></i>";
					echo " <a data-toggle='collapse' data-parent='#accordion' href='#$id'data-role='button'>$nomRuta $nombreLinea</a></h4>";
			echo "</div>";
			echo"<div id='$id' class='panel-collapse collapse'>";
				echo "<div class='panel-body'>";
						//echo"<p style='color:blue;'>$recorrido</p>";
						$resultadoTurnos = mysqli_query($con,"SELECT turno.horaDeSalida,turno.FK_ID_tipoHorario,turno.rutas_id_ruta,rutas.nombreRuta,rutas.id_ruta,horarios.tipo FROM turno,horarios,rutas WHERE turno.rutas_id_ruta = '$idRutas' AND turno.FK_ID_tipoHorario=horarios.id_tipoHorarios AND rutas.id_ruta = '$idRutas'");
						 $rowHoraSalida =Array();
						while ($turno = $resultadoTurnos->fetch_array()) {
						    	$rowHoraSalida[] = $turno['horaDeSalida'];
						    	$tipoHorario = $turno['FK_ID_tipoHorario'];
							}
							echo "<div class='table-responsive'>";
							echo "<p>Listado de Turnos</p>";
						    	echo "<table class='table'>";
									if ($tipoHorario = '4') {
										echo "<tr class='info'>";
											foreach($rowHoraSalida as $row) {
        										echo "<td>".$row.":Horas</td>";
    											}
    									echo "</tr>";
    								echo "</table>";


    								echo "<table class='table'>";
										}elseif ($tipoHorario = '3') {
											echo "<tr class='info'>";
												foreach($rowHoraSalida as $row) {
        										echo "<td>".$row."Horas</td>";
    												}
    									echo "</tr>";
    								echo "</table>";


    								echo "<table class='table'>";
										}elseif ($tipoHorario = '2') {
											echo "<tr class='info'>";
												foreach($rowHoraSalida as $row) {
        												echo "<td>".$row." :Horas</td>";
    												}
    										echo "</tr>";
    								echo "</table>";

    								echo "<table class='table'>";
										}elseif ($tipoHorario = '1') {
											echo "<tr class='info'>";
												foreach($rowHoraSalida as $row) {
        												echo "<td>".$row."Horas</td>";
    												}
    											echo "</tr>";
    								echo "</table>";

										}

						echo "</table>";
						echo "</div>";
				echo"</div>";
			echo"</div>";
			$id = '';
		echo" </div>";
	echo"</div>";
	}
?>
