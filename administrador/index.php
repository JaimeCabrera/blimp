<?php session_start(); ?>
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
        <?php include "php/navbar.php"; ?>
        <div class="login">
            <div class= "col-md-12 col-xs-12" >
                <div class="row">
                    <div class="col-md-6">
                        <h2>Login Bus Line Map</h2>
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <form role="form" name="login" action="php/login.php" method="post">
                                    <div class="form-group">
                                        <label for="username">Ingrese el Nombre de usuario o email</label>
                                        &nbsp;
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                                        &nbsp;
                                        <div class="alert alert-danger" role="alert" id="usuario">Debe Ingresar su usuario o email!</div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Ingrese la Contrase&ntilde;a</label>
                                        &nbsp;
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
                                        &nbsp;
                                        <div class="alert alert-danger" role="alert" id="passwd">Debe Ingresar su password!</div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Acceder</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/valida_login.js"></script>
        <?php include "php/footer.php"; ?>
    </body>
</html>