
<!DOCTYPE html>
<html>
    <head>
        <title>BusLineMap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stilos.css">

        <script type="text/javascript" src="js/mapbox-gl.js"></script>
        <link href="css/mapbox-gl.css" rel="stylesheet" />
        <script type="text/javascript" src="js/bus.js"></script>
        <script type="text/javascript" src="js/busqueda.js"></script>
        <script type="text/javascript">
        function clicks(valor) {

          location.href='rutas.php?variable='+valor;
        }



        </script>
    </head>

    <body  >
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
                            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="rutas.php">Ver todas las rutas</a></li>
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
        <div id="pagina">
            <div class="container">
                <div class="page-header">
                    <div class="jumbotron">
                        <h2> Logotipo y mas Informacion de la aplicacion</h2>
                        <p>...</p>
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <label class="btn btn-default" >Buscar!</label>
                    </span>
                    <input type="text" class="form-control" placeholder="Escriba lugar de destino..."  name="caja_busqueda" id="caja_busqueda">
                  </div>
               </div> </br> </br>
             </br>
                <div id="datos">

                </div>
                


        </div>
        <!--fin de la pagina-->
        <br>
        <!--Pie de la PAgina-->

        <div class="panel-footer" id="footer">
            <h4>Universidad Nacional de Loja</h4>
            <h5>Carrera de Ingeniería en Sistemas</h5>
            <h5></h5>
        </div>
    </body>
</html>
