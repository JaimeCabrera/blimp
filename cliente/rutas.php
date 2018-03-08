<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>Rutas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="js/trazaLinea.js"></script>
          <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stilos.css">
        <link rel="stylesheet" href="css/stilos.css">
        <script type="text/javascript" src="js/bus.js"></script>
        <script src="js/mapbox-gl.js"></script>
        <link href="css/mapbox-gl.css" rel='stylesheet' />
        <script src="js/creaLineaMapa.js"></script>
        <script type="text/javascript">

        function clicks(m) {
          alert(m);
        }
      </script>
        <style>
            /*body { margin:-1%; padding:30%; }*/
            #map { position:relative;; top:auto; bottom:auto; width:71%;  }
            #pagina3 {margin-left: 0%;}
            #Lista{    margin-left: 62%;  position: absolute;}
            .container{
              padding-right: 0%;
              padding-left: 2%;
              width: 78%;}
        </style>
    </head>
    <body ><!-- onload="myFunction()"-->
        <br>
        <div class="container-fluid">
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
                        <a class="navbar-brand" href="index.php">BusLineMap</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav">
                            <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="rutas.php">Ver todas las rutas</a></li>
                            <li><a href="horarios.php">Ver los Horarios</a></li>
                        </ul>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Buscar</button>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!--pagina-->
        <!--Pagina con el mapa de las ubicaciones de las paradas-->


        <div id="pagina3" class="container">
            <h4>Rutas de los Buses Urbanos de la Ciudad de Loja</h4>
            <div id="Lista">
                <h3 id="verga" style="color:#337ab7;" >RUTAS</h3>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"  id="L-1" onclick="activarRuta(this.id)">
                                    Linea 1</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">Esta pasa por su casa.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" id="L-3" onclick="activarRuta(this.id)">
                                    Línea 3</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">Tome esta linea ahora y va directo al chongo.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" id="L4">
                                    Línea 4</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">Informacion: Pasa por Esteban Godoy, Julio Ordoñes, El VAlle, Epoca</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map"></div>


        </div>
        <!--fin de la pagina-->
        <br>
        <!--Pie de la PAgina-->
        <?php
          include "php/paradas.php";


        ?>


        <script>

          var i=0;

            mapboxgl.accessToken = 'pk.eyJ1IjoiZ3Fyb290IiwiYSI6ImNqZGx6OGh1cjBmcjMzMm85MGw0Y3hkaXkifQ.aUDBTOBjCfRtDhKGWfGNcQ';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v9',
                center: [-79.2052894, -3.9954844],
                zoom: 14.4
            });


            map.on('load', function () {

            creaMapa();
              var lat=<?php echo json_encode($lat);?>;
              var lng=<?php echo json_encode($lng);?>;

           for (var i = 0; i <= <?echo $num?> ; i++) {
             map.addLayer({
                  "id": i.toString(),
                  "type": "symbol",
                  "source": {
                      "type": "geojson",
                      "data": {
                          "type": "FeatureCollection",
                          "features": [{
                                  "type": "Feature",
                                  "geometry": {
                                      "type": "Point",
                                      "coordinates":[lat[i],lng[i]]
                                  },
                                  "properties": {
                                      "title": "Parada",
                                      "icon": "bus"
                                  }
                                }]
                      }
                  },
                  "layout": {
                      "icon-image": "{icon}-15",
                      "text-field": "{title}",
                      "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
                      "text-offset": [0, 0.6],
                      "text-anchor": "top"
                  }
              });
            }



              <?php


                if (isset($_GET['variable'])){
                    $variable = $_GET['variable'];

                    echo"activarRuta('".$variable."')";

                }


              ?>
          });

        </script>
        <div class="panel-footer" id="footer">
            <h4>Universidad Nacional de Loja</h4>
            <h5>Carrera de Ingeniería en Sistemas</h5>
            <h5></h5>
        </div>
    </body>
</html>
