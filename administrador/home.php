<?php
$path = $_SERVER['DOCUMENT_ROOT'];
session_start();
if(!isset($_SESSION["id_administrador"]) || $_SESSION["id_administrador"]==null){
	print "<script>alert(\"Acceso invalido asd!\");window.location='index.php';</script>";
}
?>
<html>
    <head>
        <title>Admin BusLineMap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="boostrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="boostrap/css/stilos.css">
       <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet"> 
        <link rel="stylesheet" href="boostrap/css/bootstrap-responsive.min.css">
        <script type="text/javascript" src="boostrap/js/mapbox-gl.js"></script>
        <link rel="stylesheet" href="boostrap/css/mapbox-gl.css">
    </head>
    <script>
        $(document).ready(function () {

            $("#rutas1").click(function () {
                /*alert("The paragraph was clicked.");*/
                $("#seccionRecargar1").show();
                $("#seccionRecargar").hide();
            });
           

        });
    </script>
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
                        <li><a href="https://blimp.eestudiantes.ec" target="_blank">Ver como cliente</a></li>
                    </ul>
                    <nav class="nav navbar-nav navbar-right">
                        <p style="color: #C5C7CD;" class="navbar-text">Bienvenido Administrador</p>
                        <p style="color: white;" class="navbar-text">Salir  <a href="php/logout.php"><span style="color: white;" class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></p>
                    </nav>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--Menu vertical inicio-->
        <div id="mostrar-nav">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs" aria-expanded="true">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="mostrar" id="bs">
            <ul class="menu">
                <li ><b><a id="Paradas" href= "home.php"style="cursor: pointer;" ><span class="glyphicon glyphicon-bed"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paradas </a></b></li>
                <li><b><a  href="verRutas.php"style="cursor: pointer;" id="rutas"> <span class="glyphicon glyphicon glyphicon-send"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rutas</a></b></li>
                <li><b><a href="verHorarios.php"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;horarios </a></b></li>
                               
            </ul>
        </nav>
        <!--Menu vertical fin-->
        <!--divs dond estara el contenido de las paginas-->
        <div class="seccionRecargar" id="seccionRecargar" name="seccionRecargar">
           <?php include''.$path.'/blimp/administrador/php/verParadas.php';?>           
        </div><br>
        <div class="seccionRecargar1" id="seccionRecargar1">
        </div>
    </body>
    <script type="text/javascript" src="js/paradas.js"></script>
    <br>
    <div class="footer" >
        <div class="container">
            <center> <b class="copyright"><a href="http://unl.edu.ec/"> UNL</a> &copy; <?php echo date("Y")?> BusLineMap </b>
                <h4>Universidad Nacional de Loja</h4>
                <h5>Carrera de Ingeniería en Sistemas</h5>
            </center>     
    </div>
</div>
</html>