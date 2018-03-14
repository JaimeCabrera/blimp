
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
if (!isset($_SESSION["id_administrador"]) || $_SESSION["id_administrador"] == null) {
    print "<script>alert(\"Acceso invalido asd!\");window.location='index.php';</script>";
}
require_once '' . $path . '/blimp/administrador/php/database/databaseConnect.php';
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
                    <h4 class="headingParadas">&nbsp;&nbsp;<span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;&nbsp;Rutas</h4>
                </div>

                <div class="panel-body">
                    <script>

                        function nuevaRuta() {
                            $('#myModalRutas').on('shown.bs.modal', function () {
                                $('#myInput').focus();
                            });
                        }
                    </script>
                    &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalRutas"
                                                    onclick="nuevaRuta();">Nueva Ruta&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span></button> 
                </div>
                <!-- Table -->
                <div class="container-fluid">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" >
                            <thead class="tablaParadas">
                                <tr>
                                    <th style="width: 35px;">#</th>
                                    <th>Nombre de la ruta</th>
                                    <th >recorrido</th>
                                    <th >Linea de Bus</th>
                                    <!--<th >Incio-fin de la ruta</th>-->
                                    <th style="width: 180px; text-align: center;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <form role="form" name="formListCbLanguage" method="post" action="verRutas.php">
                                <?php
                                try {
                                    $resultado = mysqli_query($con, "SELECT * FROM rutas LEFT JOIN lineasdebuses ON rutas.id_lineasdeBuses = lineasdebuses.id_lineadeBuses");
                                    while ($rutas = $resultado->fetch_array()) {

                                        echo"<tr>";
                                        echo "<td>" . $rutas['id_ruta'] . "</td>";
                                        echo "<td>" . $rutas['nombreRuta'] . "</td>";
                                        echo "<td>" . $rutas['recorrido'] . "</td>";
                                        echo "<td>" . $rutas['nombreLineaBus'] . "</td>";
                                        # echo "<td>" . $paradas['incioRuta'] . "-". $paradas['finRuta'] . "</td>";
                                        #href='form_edit.php?id_paradas=" . $paradas["id_paradas"] . "'  para editar
                                        echo"<td>";
                                        $id = $rutas["id_ruta"];
                                        echo"&nbsp;";
                                        echo " <a class='btn btn-success btn-xs' href='form_editRutas.php?id_ruta=" . $rutas["id_ruta"] . "' id='editarRutas.'" . $rutas["id_ruta"] . "''  name='" . $rutas["id_ruta"] . "' style='cursor: pointer;text-decoration:none;'                         

                                >&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-edit'></span>
                                Editar</a>";
                                        echo" <a class='btn btn-danger btn-xs' id='deleteRuta' href='form_deleteRuta.php?id_ruta=" . $rutas["id_ruta"] . "' name='" . $rutas["id_ruta"] . "' style='cursor: pointer;text-decoration:none;' title='Eliminar'                       

                                >&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-trash'></span>
                                Eliminar</a>";

                                        echo"</td>";


                                        echo"</tr> ";
                                    }
                                } catch (Exception $exception) {
                                    echo 'Error hacer la consulta: ' . $exception;
                                }
                                ?>  

                            </form>        
                            </tbody>      
                        </table>                    
                    </div>

                    <div class="alert alert-success" id="registroEliminado"role="alert">Registro Eliminado cone exito</div>
                </div>
                <!--inicio modal Crear Parad-->
                <!-- 
                    Create - Read - Update    
                    Creamos una ventana Modal que utilizaremos para crear un nuevo idioma, actualizarlo o mostrarlo.
                    We create a modal window used to create a new language, update or display.-->

                <div class="modal fade" id="myModalRutas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Formulario para crear una nueva ruta</h4>
                            </div>
                            <form role="form" name="nuevaRuta" method="POST" action="crearRuta.php">
                                <div class="modal-body">                                    
                                    <div class="input-group">
                                        <label for="idDireccion">Nombre de la ruta</label>
                                        <input type="text" class="form-control" id="nomRuta" name="nomRuta" placeholder="ruta.." maxlength="200" required>
                                        <small class="text-muted"> </small>
                                    </div>
                                    <div class="input-group"> 
                                        <label for="latitud">lugar de inicio del recorrido de la ruta</label>
                                        <input type="text" class="form-control" id="inicioRuta" name="inicioRuta" maxlength="100" placeholder="fin de la ruta" aria-describedby="sizing-addon2" required>
                                    </div>
                                    <div class="input-group"> 
                                        <label for="latitud">lugar de finalizacion del recorrido de la ruta</label>
                                        <input type="text" class="form-control" id="finRuta" name="finRuta" maxlength="100" placeholder="fin de la ruta" aria-describedby="sizing-addon2" required>
                                    </div>
                                    <div class="input-group"> 
                                        <label for="longitud">Primer turno</label>
                                        <input type="time" min="05:00" max="22:00" class="form-control" id="primerTurno" name="primerTurno" placeholder="00:00" aria-describedby="sizing-addon1" required>
                                        <small class="text-muted">  hora de salida del primer turno</small>
                                    </div> 
                                    <div class="input-group"> 
                                        <label for="longitud">Ultimo turno</label>
                                        <input type="time" min="05:00" max="22:00" class="form-control" id="ultimoTurno" name="ultimoTurno" placeholder="00:00" aria-describedby="sizing-addon2" required>
                                        <small class="text-muted"> hora de la salida del ultimo turno</small>
                                    </div>
                                    <div class="input-group"> 
                                        <label for="longitud">Recorrido de la ruta</label>
                                        <input type="text" class="form-control" id="recorridoRuta"  name="recorridoRuta" placeholder="nombre de calles" aria-describedby="sizing-addon2" required>
                                        <small class="text-muted"> nombre de las calles de el recorrido de la ruta</small>
                                    </div>


                                    <div class="input-group"> 
                                        <?php
                                        $resultadoLineas = mysqli_query($con, "SELECT * FROM `blimp`.`lineasdebuses`  ");
                                        ?>
                                        <label for="listaLineas">Seleccione Ruta a la que pertenece la nueva parada</label>
                                        <select class="form-control" id="idruta" name="idlinea" required>
                                            <?php
                                            while ($reslineas = $resultadoLineas->fetch_array()) {
                                                echo '<option value="' . $reslineas[id_lineadeBuses] . '">' . $reslineas["nombreLineaBus"] . '</option>';
                                            }
                                            ?>
                                        </select>    
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button id="save-parada" name="save-parada" type="submit" class="btn btn-success">Guardar</button>
                                   <a id="cancel" href="verHorarios.php"  class="btn btn-danger" data-dismiss="modal">Cancelar</a>                                
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




