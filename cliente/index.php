<!-- PreHead -->
<?php include("prehead.php"); ?>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/busqueda.js"></script>
  <script type="text/javascript">
    function clicks(valor) {
      location.href='rutas.php?variable='+valor;
    }
  </script>
</head>
<body id="page-top" class="index">
  <!-- Navigation -->
  <?php include("navbar.php"); ?>
  <!-- Header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <img class="img-responsive" src="assets/logo.svg" alt="">
          <div class="intro-text">
            <span class="skills">guiandote a tu destino...</span>
          </div>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
          <div class="input-group">
            <span class="input-group-btn">
              <input type="text" class="form-control" placeholder="Escriba lugar de destino..."  name="caja_busqueda" id="caja_busqueda">
            </span>
          </div>
       </div>
      </div>

      <div class="row">
        <div class="col-lg-offset-2 col-lg-8 panel-body" id="datos"></div>
      </div>
    </div>
  </header>
  <section id="masbuscadas">
    <div class="container">
        <div class="col-lg-12 text-center">
          <h2>más buscadas...</h2>
          <br>

        </div>
      <div class="row">
        <div class="col-lg-12" id="sitios">
          <?php include "php/rutasMasBuscadas.php";?>
        </div>
      </div>
    </div>
  </section>
  <!-- Nosotros Section -->
  <section class="success" id="nosotros">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Quiénes somos</h2>
          <hr class="star-light">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-2">
          <h4 class="text-center">Misión</h4>
            <p style="text-align:justify">
              Brindar a la ciudadanía en general información segura y real para la localización de su destino utilizando las lineas de bus alimentadores de la ciudad de Loja.
            </p>
        </div>
        <div class="col-md-4">
          <h4 class="text-center">Visión</h4>
          <p style="text-align:justify">
            Convertirse en el medio mas reccurente de informacion de vias de transporte publico para la ciudadania del sur del Ecuador.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Equipo Section -->
  <section id="equipo">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Nuestro Equipo</h2>
          <hr class="star-primary">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 col-md-offset-1">
          <img src="assets/equipo.jpeg" style="width:100%"></img>
        </div>
        <div class="col-md-5">
          <p style="text-align:justify">
            El equipo de trabajo de el presente proyecto está conformado por personas comprometidas y profesionales,
            quienes están al servicio de la ciudadania de Loja.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php include("footer.php"); ?>
