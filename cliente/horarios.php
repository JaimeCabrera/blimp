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
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" src="assets/blimpfavicon.png">
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
        <!-- Horairios Section -->
      <section id="horarios">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <h2>Horarios de los Buses Urbanos</h2>
                      <hr class="star-primary">
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                           <?php
                            include'php/consultarRutas.php';
                           ?>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
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
                                <a href="https://www.facebook.com/universidadnacionaloja" class="btn-social btn-outline"><i class="fab fa-facebook-f"></i></a>
                            </li>
                                <a href="https://twitter.com/nacionaldeloja" class="btn-social btn-outline"><i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Acerca de blimp</h3>
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
                        Copyright &copy; blimp 2018. Powered by: <a href="http://desarrollotroll.com/" style="color:white; font-weight:bold; text-decoration:underline">desarrollotroll</a>
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
