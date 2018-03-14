<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blimp</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stilos.css">
    <!-- Custom Fonts -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" src="assets/favicon.png">
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
            </div>
        </div>
    </header>
    <!-- Header -->
    <section  id="search">
        <div class="container">
          <div class="row">
            <div class="col-lg-offset-1 col-lg-10">
              <div class="input-group">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-primary btn-lg">Buscar</button>
                </span>
                <input type="text" class="form-control" placeholder="Escriba lugar de destino..."  name="caja_busqueda" id="caja_busqueda">
              </div>
           </div>
          </div>
          <div class="row">
            <div class="col-lg-offset-1 col-lg-10" id="datos"></div>
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
                <div class="col-lg-4 col-lg-offset-2">
                  <h4 class="text-center">Misión</h4>
                    <p style="text-align:justify">Brindar a la ciudadanía en general información segura y real para la localización de su destino utilizando las lineas de bus alimentadores de la ciudad de Loja.      </p>
</p>
                </div>
                <div class="col-lg-4">
                      <h4 class="text-center">Visión</h4>
                    <p style="text-align:justify">Convertirse en el medio mas reccurente de informacion de vias de transporte publico para la ciudadania del sur del Ecuador.</p>
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
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
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
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
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
