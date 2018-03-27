
<html>
    <head>
        <title>Admin BusLineMap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="boostrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="boostrap/css/stilos.css">
        <script type="text/javascript" src="boostrap/js/mapbox-gl.js"></script>
        <link rel="stylesheet" href="boostrap/css/mapbox-gl.css">
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
        <nav class="mostrar" id="bs">
            <ul class="menu">
                <li ><b><a id="Paradas" href= "home.php"style="cursor: pointer;" ><span class="glyphicon glyphicon-bed"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paradas </a></b></li>
                <li><b><a  href="verRutas.php"style="cursor: pointer;" id="Inicio"> <span class="glyphicon glyphicon glyphicon-send"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rutas</a></b></li>
                <li><b><a href="verHorarios.php"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;horarios </a></b></li>
                             
            </ul>
        </nav>
        <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        require_once '' . $path . '/blimp/administrador/php/conexion.php';
        $resultado = mysqli_query($con, "SELECT * FROM paradas LEFT JOIN rutas ON paradas.rutas_id_ruta = rutas.id_ruta WHERE id_paradas = '" . $_REQUEST["id_paradas"] . "'; ");
        $con = $resultado->fetch_array();
        ?>
        <div class="editarParada">
            <div class="panel panel-success" >
                <!-- Default panel contents -->
                <div class="panel-heading" >
                    <h5 class="headingParadas">Editar Informacion de las Paradas</h5>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">

                        <form role="form" name="nuevaParada" method="POST" action="update.php?id_paradas=<?php echo $con["id_paradas"]; ?>">
                            <div class="form-group">  
                                 
                                 <label for="id_parada">ID parada</label>
                                <input type="text" class="form-control" id="idParadas" name="idParadas" value="<?php echo $con['id_paradas'];?>" disabled>

                            </div>                                  
                            <div class="input-group">
                                <label for="idDireccion">Dirección</label>
                                <input type="text" class="form-control" id="Direccion" name="Direccion" value="<?php echo $con["direccion"]; ?>" >
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
                                <label for="latit">Latitud</label>
                                <input type="text" class="form-control" id="Latitud" name="Latitud"  aria-describedby="sizing-addon2" value="<?php echo $con['latitud']; ?> " >
                            </div>
                            <div class="input-group"> 
                                <label for="longit">Longitud</label>
                                <input type="text" class="form-control" id="Longitud" name="Longitud"  aria-describedby="sizing-addon2"value="<?php echo $con['longitud']; ?>">
                                <small class="text-muted"> Las coordenar de la ubicacion de la parada</small>
                            </div> 

                            <div class="input-group">                               
                                <label for="listaRutas">Seleccione Ruta ala que pertenece la nueva parada</label>
                                <select class="form-control" id="idruta" name="idruta">                                                    
                                    <option id="IDruta" value="<?php echo $con['rutas_id_ruta']; ?>"> <?php echo $con["nombreRuta"] ?></option>
                                </select>    
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button  type="submit" class="btn btn-success">Guardar</button>
                        <button id="cancel" type="submit" href="home.php" class="btn btn-danger" >Cancelar</button>                                    
                    </div>
                    </form>
                    <div class="alert alert-success" id="registroEliminado"role="alert">Registro Eliminado cone exito</div>
                </div>
            </div>
            <!-- Table -->
        </div>
    </div>
</body>
</html>
