<?php
include "php/paradas.php";
include "php/rutasInformacion.php";
header("Access-Control-Allow-Origin: *");
?>
<!-- PreHead -->
<?php include("prehead.php"); ?>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script src="js/trazaLinea.js"></script>
  <!-- <script type="text/javascript" src="js/bus.js"></script> -->
  <script src="js/mapbox-gl.js"></script>
  <link href="css/mapbox-gl.css" rel='stylesheet' />
  <script src="js/creaLineaMapa.js"></script>
</head>
<body id="page-top" class="index" >
  <!-- Navigation -->
  <?php include("navbar.php"); ?>
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
            <h3>RUTAS</h3>
            <div class="panel-group" id="accordion">
              <div class="panel panel-success">
                <?for ($i=0; $i < $aum; $i++) { ?>
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?echo $i?>"  id="<?echo $id[$i];?>" onclick="activarRuta(this.id)">
                        <?echo $nombreLineaBus[$i]."  (". $nombreRuta[$i].")"?>
                      </a>
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
      var i = 0;
      mapboxgl.accessToken = 'pk.eyJ1IjoiZ3Fyb290IiwiYSI6ImNqZGx6OGh1cjBmcjMzMm85MGw0Y3hkaXkifQ.aUDBTOBjCfRtDhKGWfGNcQ';
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v9',
        center: [-4.0291619,-79.2114938],
        zoom: 13.4
      });
      // Add geolocate control to the map.
map.addControl(new mapboxgl.GeolocateControl({
    positionOptions: {
        enableHighAccuracy: true
    },
    trackUserLocation: true
}));
 
      map.on('load', function () {
        creaMapa();
        var lat =<?php echo json_encode($lat); ?>;
        var lng =<?php echo json_encode($lng); ?>;
        for (var i = 0; i <= "<?echo $num?>"; i++) {
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
                    "coordinates": [lat[i], lng[i]]
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
          if (isset($_GET['variable'])) {
            $variable = $_GET['variable'];
            echo"activarRuta('" . $variable . "')";
          }
        ?>
      });
    
  </script>
  <!-- Footer -->
<?php include("footer.php"); ?>