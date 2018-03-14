
<html>
    <head>
        <title>Admin BusLineMap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="boostrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="boostrap/css/stilos.css">
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
                <li><b><a href = "verRutas.php" style="cursor: pointer;" id="Inicio"> <span class="glyphicon glyphicon glyphicon-send"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rutas</a></b></li>
                <li><b><a href="verHorarios.php"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;horarios </a></b></li>
            </ul>
        </nav>
        <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        require_once '' . $path . '/blimp/administrador/php/conexion.php';
       $resultado = mysqli_query($con, "SELECT * FROM rutas LEFT JOIN lineasdebuses ON rutas.id_lineasdeBuses =  lineasdebuses.id_lineadeBuses WHERE id_ruta = '" . $_REQUEST["id_ruta"] . "';");
        $con = $resultado->fetch_array();
        ?>
        <div class="editarParada">
            <div class="panel panel-success" >
                <!-- Default panel contents -->
                <div class="panel-heading" >
                    <h4 class="headingParadas">Esta seguro que desea eliminar la informacion de la siguiente ruta?</h4>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">

                        <form role="form" name="nuevaRuta" method="POST" action="deleteRuta.php?id_ruta=<?php echo $con['id_ruta']; ?>">
                            <div class="modal-body"> 
                                <div class="form-group">  
                                    <label for="id_ruta">ID Ruta</label>
                                    <input type="text" class="form-control" id="id_ruta" name="id_ruta" value="<?php echo $con['id_ruta']; ?>" disabled>
                                </div>
                                <div class="input-group">
                                    <label for="idDireccion">Nombre de la ruta</label>
                                    <input type="text" class="form-control" id="nomRuta" name="nomRuta" value="<?php echo $con['nombreRuta']; ?>" >
                                    <small class="text-muted"> </small>
                                </div>
                                <div class="input-group"> 
                                    <label for="latitud">lugar de inicio del recorrido de la ruta</label>
                                    <input type="text" class="form-control" id="inicioRuta" name="inicioRuta" value="<?php echo $con['incioRuta']; ?>" aria-describedby="sizing-addon2">
                                </div>
                                <div class="input-group"> 
                                    <label for="latitud">lugar de finalizacion del recorrido de la ruta</label>
                                    <input type="text" class="form-control" id="finRuta" name="finRuta" value="<?php echo $con['finRuta']; ?>" aria-describedby="sizing-addon2">
                                </div>
                                <div class="input-group"> 
                                    <label for="longitud">Primer turno</label>
                                    <input type="text" class="form-control" id="primerTurno" name="primerTurno" value="<?php echo $con['primerTurno']; ?>" aria-describedby="sizing-addon1">
                                    <small class="text-muted">  hora de salida del primer turno</small>
                                </div> 
                                <div class="input-group"> 
                                    <label for="longitud">Ultimo turno</label>
                                    <input type="text" class="form-control" id="ultimoTurno" name="ultimoTurno" value="<?php echo $con['ultimoTurno']; ?>" aria-describedby="sizing-addon2">
                                    <small class="text-muted"> hora de la salida del ultimo turno</small>
                                </div>
                                <div class="input-group"> 
                                    <label for="longitud">Recorrido de la ruta</label>
                                    <input type="text" class="form-control" id="recorridoRuta" name="recorridoRuta" value="<?php echo $con['recorrido']; ?>" aria-describedby="sizing-addon2">
                                    <small class="text-muted"> nombre de las calles de el recorrido de la ruta</small>
                                </div>
                                <div class="input-group"> 

                                    <label for="listaLineas">Seleccione Ruta ala que pertenece la nueva parada</label>
                                    <select class="form-control" id="idruta" name="idlinea">

                                        <option value="<?php echo $con['id_lineasdeBuses']; ?>"><?php echo $con['nombreLineaBus']; ?></option>';

                                    </select>    
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button id="save-parada" name="save-parada" type="submit" class="btn btn-success">Eliminar</button>
                                <a id="cancel" href="verRutas.php" class="btn btn-danger" data-dismiss="modal">Cancelar</a>                                    
                            </div>
                        </form>
                        <div class="alert alert-success" id="registroEliminado"role="alert">Registro Eliminado con exito</div>
                    </div>
                </div>
                <!-- Table -->
            </div>
        </div>
    </body>
</html>
