<?php 
	require'conexion.php';
	$resultadoTurnos = mysqli_query($con,"SELECT turno.horaDeSalida,turno.FK_ID_tipoHorario,turno.rutas_id_ruta,rutas.nombreRuta,rutas.id_ruta,horarios.tipo FROM turno,horarios,rutas WHERE turno.rutas_id_ruta = '$idRutas' AND turno.FK_ID_tipoHorario=horarios.id_tipoHorarios AND rutas.id_ruta = '$idRutas'");

						while ($turno = $resultadoTurnos->fetch_array()) {
						    $horaDeSalida = $turno['horaDeSalida'];
						    //echo"$horaDeSalida";
						    ?>
						    <D
						    <?php
						}

?>