
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
if (!isset($_SESSION["id_administrador"]) || $_SESSION["id_administrador"] == null) {
    print "<script>alert(\"Acceso invalido asd!\");window.location='index.php';</script>";
}
?>
<html>
    <head>
        <title>Admin BusLineMap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="boostrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="boostrap/css/stilos.css">
        <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet"> 
        <link rel="stylesheet" href="boostrap/css/bootstrap-responsive.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">BusLineMap</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav nav">
                    </ul>
                    <nav class="nav navbar-nav navbar-right">
                        <p style="color: #C5C7CD;" class="navbar-text">Bienvenido Administrador</p>
                        <p style="color: white;" class="navbar-text">Salir  <a href="php/logout.php"><span style="color: white;" class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></p>
                    </nav>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--Menu vertical inicio-->
        <div id="mostrar-nav">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs" aria-expanded="true">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <nav class="mostrar" id="bs">
            <ul class="menu">
                <li ><b><a id="Paradas" href= "home.php"style="cursor: pointer;" ><span class="glyphicon glyphicon-bed"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paradas </a></b></li>
                <li><b><a  href="verRutas.php" style="cursor: pointer;" id="rutas"> <span class="glyphicon glyphicon glyphicon-send"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rutas</a></b></li>
                <li><b><a href="verhorarios.php"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;horarios </a></b></li>
                <!--<li><b><a href="#"><span class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lineas </a></b></li>        -->        
            </ul>
        </nav>
        <!--Menu vertical fin-->
        <!--divs dond estara el contenido de las paginas-->
        <div class="seccionRecargar" id="seccionRecargar" name="seccionRecargar">

            <div class="panel panel-success" style="background-color: #f8f9f9;">
    <!-- Default panel contents -->
    <div class="panel-heading" style=" background-color:  #454545 ; color: #f5f5f5;">
                    <h4 class="headingParadas">&nbsp;&nbsp;<span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;Horarios</h4>
                </div>
                <div class="panel-body">
                    <script>

                        function nuevoHorario() {
                            $('#myModal').on('shown.bs.modal', function () {
                                $('#myInput').focus();
                            });
                        }
                    </script>
                    &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                                                    onclick="nuevoHorario()">Nuevo horario&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span></button> 
                </div>
                <!-- TLiastado de tunros de las lineas de buses  -->
                <div class="container-fluid">
                    <?php
                    require_once '' . $path . '/blimp/administrador/php/database/databaseConnect.php';
                    $resultado = mysqli_query($con, "SELECT rutas.id_ruta,rutas.nombreRuta,rutas.recorrido,rutas.id_lineasdeBuses,rutas.id_ruta,lineasdebuses.denotacion FROM rutas,lineasdebuses WHERE rutas.id_lineasdeBuses = lineasdebuses.id_lineadeBuses");
                    while ($inforRutas = $resultado->fetch_array()) {
                        $id = $inforRutas['id_ruta'];
                        $idRutas = $inforRutas['id_ruta'];
                        $nomRuta = $inforRutas['nombreRuta'];
                        $recorrido = $inforRutas['recorrido'];
                        $nombreLinea = $inforRutas['denotacion'];
                        echo"<div class='panel-group' id='accordion'>";
                        echo"<div class='panel panel-success'>";
                        echo"<div class='panel-heading'>";
                        echo" <h4 class='panel-title'>";
                        echo"<span class='glyphicon glyphicon-bed' aria-hidden='true' ></span>";
                        echo " <a data-toggle='collapse' data-parent='#accordion' href='#$id'data-role='button'style='text-decoration:none;color: #3a3b3b; '>$nomRuta $nombreLinea</a></h4>";
                        echo "</div>";
                        echo"<div id='$id' class='panel-collapse collapse'>";
                        echo "<div class='panel-body' style='background-color:#fafafa  ;'>";
                        //echo"<p style='color:blue;'>$recorrido</p>";
                        $resultadoTurnos = mysqli_query($con, "SELECT turno.horaDeSalida,turno.FK_ID_tipoHorario,turno.rutas_id_ruta,rutas.nombreRuta,rutas.id_ruta,horarios.tipo FROM turno,horarios,rutas WHERE turno.rutas_id_ruta = '$idRutas' AND turno.FK_ID_tipoHorario=horarios.id_tipoHorarios AND rutas.id_ruta = '$idRutas'");
                        $rowHoraSalida = Array();
                        while ($turno = $resultadoTurnos->fetch_array()) {
                            $rowHoraSalida[] = $turno['horaDeSalida'];
                            $tipoHorario = $turno['FK_ID_tipoHorario'];
                        }
                        echo "<div class='table-responsive'>";
                        echo "<p>Listado de Turnos</p>";
                        echo "<table class='table'>";
                        if ($tipoHorario = '4') {
                            echo "<tr class='success'>";
                            foreach ($rowHoraSalida as $row) {
                                echo "<td>" . $row . ":Horas</td>";
                            }
                            # echo "<td>"."<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'onclick='nuevoHorario()'>nuevo horario&nbsp;&nbsp;<span class='glyphicon glyphicon-plus'></span></button> ". "</td>";
                            echo "</tr>";
                            echo "</table>";
                            echo "<table class='table'>";
                        } elseif ($tipoHorario = '3') {
                            echo "<tr class='success'>";
                            foreach ($rowHoraSalida as $row) {
                                echo "<td>" . $row . "Horas</td>";
                            }
                            echo "</tr>";
                            echo "</table>";


                            echo "<table class='table'>";
                        } elseif ($tipoHorario = '2') {
                            echo "<tr class='success'>";
                            foreach ($rowHoraSalida as $row) {
                                echo "<td>" . $row . " :Horas</td>";
                            }
                            echo "</tr>";
                            echo "</table>";

                            echo "<table class='table'>";
                        } elseif ($tipoHorario = '1') {
                            echo "<tr class='success'>";
                            foreach ($rowHoraSalida as $row) {
                                echo "<td>" . $row . "Horas</td>";
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
                </div>
                <!--inicio modal Crear hoarios-->
                <!-- 
                    Create - Read - Update    
                    Creamos una ventana Modal que utilizaremos para crear un nuevo idioma, actualizarlo o mostrarlo.
                    We create a modal window used to create a new language, update or display.-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Formulario para crear un nuevo horario</h4>
                            </div>
                            <form role="form" name="nuevoHorario" method="POST" action="crearTurno.php">
                                <div class="modal-body">                                    
                                    <div class="input-group">
                                        <label for="HoraSalida">Hora de salida</label>
                                        <input type="time" min="05:00"  max="22:00" class="form-control" id="HoraSalida" name="HoraSalida" placeholder="00:00" maxlength="5" required>
                                        <small class="text-muted"> </small>
                                    </div>
                                    <div class="input-group"> 
                                        <?php
                                        $resultadoHorarios = mysqli_query($con, "SELECT * FROM `blimp`.`horarios`");
                                        ?>
                                        <label for="idTipoHorario">Seleccione el tipo  de horario</label>
                                        <select class="form-control" id="idTipoHorario" name="idTipoHorario" required>
                                            <?php
                                            while ($reshorarios = $resultadoHorarios->fetch_array()) {
                                                echo '<option value="' . $reshorarios[id_tipoHorarios] . '">' . $reshorarios["descripcion"] . '</option>';
                                            }
                                            ?>
                                        </select>    
                                    </div>
                                    <div class="input-group"> 
                                        <?php
                                        $resultadoRutas = mysqli_query($con, "SELECT * FROM `blimp`.`rutas`  ");
                                        ?>
                                        <label for="listaLineas">Seleccione la ruta que le pertenece el horario nuevo</label>
                                        <select class="form-control" id="idTipoRutas" name="idTipoRutas" required>
                                            <?php
                                            while ($resrutas = $resultadoRutas->fetch_array()) {
                                                echo '<option value="' . $resrutas[id_ruta] . '">' . $resrutas["nombreRuta"] . '</option>';
                                            }
                                            ?>
                                        </select>    
                                    </div>
                     
                                </div>
                                <div class="modal-footer">
                                    <button id="save-parada" name="save-parada" type="submit" class="btn btn-success">Guardar</button>
                                    <a id="cancel"type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</a>                                    
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->  
            </div>
        </div>
        <br>
        <div class="seccionRecargar1" id="seccionRecargar1">
        </div>
    </body>
    <?php include'' . $path . '/blimp/administrador/php/footer.php'; ?>




