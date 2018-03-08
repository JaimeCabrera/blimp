<?php
include "php/paradas.php";
include "php/rutasInformacion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus Line Map</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/stilos.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="js/trazaLinea.js"></script>
    <!-- <script type="text/javascript" src="js/bus.js"></script> -->
    <script src="js/mapbox-gl.js"></script>
    <link href="css/mapbox-gl.css" rel='stylesheet' />
    <script src="js/creaLineaMapa.js"></script>
    <style>
        /*body { margin:-1%; padding:30%; }*/
        /* #map { position:relative;; top:auto; bottom:auto; width:71%;  } */
        /* #Lista{    margin-left: 62%;  position: absolute;} */
        .container{
          padding-right: 0%;
          padding-left: 2%;
          width: 78%;}
    </style>

</head>
<body id="page-top" class="index">
      <!-- Navigation -->
      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="index.php#page-top">BusLineMap</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="hidden">
                          <a href="index.php#page-top"></a>
                      </li>
                      <li class="page-scroll">
                          <a href="rutas.php">Rutas</a>
                      </li>
                      <li class="page-scroll">
                          <a href="horarios.php">Horarios</a>
                      </li>
                      <li class="page-scroll">
                          <a href="index.php#nosotros">Nosotros</a>
                      </li>
                      <li class="page-scroll">
                          <a href="index.php#contacto">Contacto</a>
                      </li>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
      </nav>
      <!-- Rutas Section -->


      <section id="rutas">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2>Rutas de los Buses Urbanos</h2>
                    <hr class="star-primary">
                  </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div id="map"></div>
                </div>
                  <div class="col-md-4">
                    <div id="Lista">
                        <h3 style="color:#337ab7;" >RUTAS</h3>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <?for ($i=0; $i < $aum; $i++) { ?>
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?echo $i?>"  id="<?echo $id[$i];?>" onclick="activarRuta(this.id)">
                                            <?echo $nombreLineaBus[$i]."  (". $nombreRuta[$i].")"?></a>
                                    </h4>
                                </div>
                                <div id="collapse<?echo $i?>" class="panel-collapse collapse collapse">
                                    <div class="panel-body"><b>Inicia:</b><?echo " ".$inicioRuta[$i]." "?> </br> <b>Recorrido:</b><?echo " ".$recorrido[$i]." "?> </br><b>Termina: </b><?echo" ".$finRuta[$i]." "?></div>
                                </div>
                                <?}?>
                              </div>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
        </section>

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
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Ubicación</h3>
            Av. Pío Jaramillo Alvarado y Reinaldo Espinosa, La Argelia
            Loja – Ecuador
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Redes sociales</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/universidadnacionaloja" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                                <a href="https://twitter.com/nacionaldeloja" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Acerca de moviggo</h3>
                        serviciocliente@blimp.com<br>
            Teléfono (593) (07) 258-8669 ext. 128
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; blimp 2016. Powered by: <a href="http://desarrollotroll.com/" style="color:white; font-weight:bold; text-decoration:underline">desarrollotroll</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="index.php#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
</body>
</html>
