
<?php

$path = $_SERVER['DOCUMENT_ROOT'];
#session_start();
if(!isset($_SESSION["id_administrador"]) || $_SESSION["id_administrador"]==null){
    print "<script>alert(\"Acceso invalido asd!\");window.location='../index.php';</script>";
}
require_once '' . $path . '/blimp/administrador/php/database/databaseConnect.php';
?>
<div class="panel panel-success" style="background-color:  #fbfcfc ;">
    <!-- Default panel contents -->
    <div class="panel-heading" style=" background-color:  #454545 ; color: #f5f5f5;">
        <h4 class="headingParadas">&nbsp;&nbsp;<span class="glyphicon glyphicon-bed"></span>&nbsp;&nbsp;&nbsp;Paradas</h4>
    </div>

    <div class="panel-body">
        <script>

            function nuevaParada( ) {
                $('#myModal').on('shown.bs.modal', function () {
                    $('#myInput').focus();
                });
            }
        </script>
        &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
        onclick="nuevaParada()">Nueva Parada&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span></button> 
    </div>
    <!-- Table -->
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" >
                <thead class="tablaParadas">
                    <tr>
                        <th>#</th>
                        <th>Direccion</th>
                        <th>Latitud</th>
                        <th>Longitud</th>
                        <th>Nombre de la ruta</th>
                        <th style="width: 180px; text-align: center;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <form role="form" name="formListCbLanguage" method="post" action="../home.php">
                     <?php
                        try {

                            $resultado = mysqli_query($con, "SELECT * FROM paradas LEFT JOIN rutas ON paradas.rutas_id_ruta = rutas.id_ruta ORDER by id_paradas");
                            
                           
                            while ($paradas = $resultado->fetch_array()) {

                                echo"<tr>";
                                echo "<td>" . $paradas['id_paradas'] . "</td>";
                                echo "<td>" . $paradas['direccion'] . "</td>";
                                echo "<td>" . $paradas['latitud'] . "</td>";
                                echo "<td>" . $paradas['longitud'] . "</td>";
                                echo "<td>" . $paradas['nombreRuta'] . "</td>";
                                #href='form_edit.php?id_paradas=" . $paradas["id_paradas"] . "'  para editar
                                echo"<td>";
                                $id=$paradas["id_paradas"];
                                echo"&nbsp;";
                                echo " <a class='btn btn-success btn-xs' href='form_edit.php?id_paradas=" . $paradas["id_paradas"] . "' id='editarParada.'".$paradas["id_paradas"]."''  name='".$paradas["id_paradas"]."' style='cursor: pointer;text-decoration:none;'                         

                                >&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-edit'></span>
                                Editar</a>";
                                echo" <a class='btn btn-danger btn-xs' id='deleteParada' href='form_delete.php?id_paradas=" . $paradas["id_paradas"] . "' name='".$paradas["id_paradas"]."' style='cursor: pointer;text-decoration:none;' title='Eliminar'                       

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

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Crear Nueva parada</h4>
                    </div>
                    <form role="form" name="nuevaParada" method="POST" action="insertParada.php">
                        <div class="modal-body">                                    
                            <div class="input-group">
                                <label for="idDireccion">Direccion</label>
                                <input type="text" class="form-control" id="idDireccion" name="idDireccion" placeholder="Ej. Calle1 interseccion calle2" required >
                                <small class="text-muted"> Calle principal y calle secundaria.</small>
                            </div><br>
                            <style type='text/css'>
    #info {
        display: block;
        position: relative;
        margin: 1% 1% auto;

        width: 100%;
        padding: 1px;
        border: none;
        border-radius: 3px;
        font-size: 12px;
        text-align: center;
        color: #222;
        background: #fff;
    }
</style>
<div id="map" style="width: 100%; height: 40%;"></div>
<pre id='info'></pre>
                            
                            <script>
                                 var a = 0;
                                 mapboxgl.accessToken = 'pk.eyJ1IjoiZ3Fyb290IiwiYSI6ImNqZGx6OGh1cjBmcjMzMm85MGw0Y3hkaXkifQ.aUDBTOBjCfRtDhKGWfGNcQ';
                                    var map = new mapboxgl.Map({
                                        container: 'map',
                                        style: 'mapbox://styles/mapbox/streets-v9',
                                        center: [-79.1996278, -3.9914916],

                                        zoom: 13.7
                                    });
                                    var nav = new mapboxgl.NavigationControl();
                                    map.addControl(nav, 'top-right');
                                    map.addControl(new mapboxgl.FullscreenControl());
                                    map.on('mousemove', function (e) {
                                    document.getElementById('info').innerHTML =
                                     JSON.stringify(e.point) + '<br />' +
                                     // e.lngLat is the longitude, latitude geographical position of the event
                                     JSON.stringify(e.lngLat);
                                    });
                                // Add geolocate control 5o the map.
                                /*map.on('click', function(e){
                                var coord =e.lngLat;
                                var long=coord.lng.toFixed(6);
                                var lati=coord.lat.toFixed(6);
                                document.getElementById("latitud").setAttribute("value",lati);
                                document.getElementById("longitud").setAttribute("value",long);
                              

                                });
                               */
                            
                            </script>
                            <div class="input-group"> 
                                <label for="latitud">Latitud</label>
                                <input type="text" class="form-control" id="latitud" name="latitud" placeholder="Latitud" aria-describedby="sizing-addon2"maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
                                <small class="text-muted"> Las coordenadas de la ubicacion de la parada</small>
                            </div>
                            <div class="input-group"> 
                                <label for="longitud">Longitud</label>
                                <input type="text" class="form-control" id="longitud" name="longitud" placeholder="longitud" aria-describedby="sizing-addon2" required>
                                <small class="text-muted"> Las coordenar de la ubicacion de la parada</small>
                            </div> 



                            <div class="input-group"> 
                                <?php
                                $resultadoRutas = mysqli_query($con, "SELECT * FROM `blimp`.`rutas`  ");
                                ?>
                                <label for="listaRutas">Seleccione Ruta ala que pertenece la nueva parada</label>
                                <select class="form-control" id="idruta" name="idruta">
                                    <?php
                                    while ($resParadas = $resultadoRutas->fetch_array()) {
                                        echo '<option value="' . $resParadas[id_ruta] . '">' . $resParadas[nombreRuta] . '</option>';
                                    }
                                    ?>
                                </select>    
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="save-parada" name="save-parada" type="submit" class="btn btn-success">Guardar</button>
                            <a id="cancel" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</a>                                    
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->  
    </div>

