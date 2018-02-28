<?php
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

</head>
<body>
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
					<a class="navbar-brand" href="home.php">BusLineMap</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav nav">
						
					</ul>
					<nav class="nav navbar-nav navbar-right">
						
						<p style="color: #C5C7CD;" class="navbar-text">Bienvenido Administrador</p>
						<p style="color: white;" class="navbar-text">Salir  <a href="php/logout.php"><span style="color: white;" class="glyphicon glyphicon-log-out" aria-hidden="true"></span> </a></p>
					</nav>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		
		<div class="row">
			<div class="col-md-2">
				<div class="container-fluid" >
					<ul class="nav nav-pills nav-stacked" id="navs1">
						<li role="presentation" class="active"><a href="#">Home</a></li>
						<li role="presentation"><a href="#">Profile</a></li>
						<li role="presentation"><a href="#">Messages</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include "php/footer.php"; ?>
</body>
</html>