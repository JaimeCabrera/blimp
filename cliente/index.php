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
              <!-- <button type="button" class="btn btn-primary btn-lg">Buscar</button> -->
              <input type="text" class="form-control" placeholder="Escriba lugar de destino..."  name="caja_busqueda" id="caja_busqueda">
            </span>
          </div>
       </div>
      </div>
      
      <div class="row">
        <div class="col-lg-offset-2 col-lg-8" id="datos"></div>
      </div>
      <!-- sitios mas buscados-->
      <div class="row">
          <h5 style="color:#ecf0f1;text-align: center;"> rutas mas buscadas... </h5><br>
          <div class=" col-md-12" id="sitios">
              <?php include "php/rutasMasBuscadas.php";?>
          </div>
      </div>
    </div>
  </header>
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
  <!-- Contact Section -->
  <section id="contacto">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Contáctanos</h2>
          <hr class="star-primary">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor ingrese su nombre">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Por favor ingrese su email.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Teléfono</label>
                <input type="tel" class="form-control" placeholder="Teléfono" id="phone" required data-validation-required-message="Por favor ingrese su teléfono">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Mensaje</label>
                <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por favor ingrese su mensaje"></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="row">
              <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php include("footer.php"); ?>
