<?php 	session_start();  require('hyf/header.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Tesis Online</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="text-center" style="margin-top:-50px;">
		<button class="Agr       BTN-LG btn btn-primary"><span class="glyphicon glyphicon-user"></span> Ingresar</button>
		<a class="btn BTN-LG btn-primary" href="verTesis.php">
			<spam class="glyphicon glyphicon-search"></spam> Ver y descargar tesis </a>
		<a class="btn BTN-LG btn-primary" href="Descargarformulario.php">Descargar Formulario</a>
		<a class="btn BTN-LG btn-primary" href="Quienessomos.php">Quienes Somos?</a>
	</div>
	<br>
	<br>
	<br>
	<form class="pr" action="Controlador/login.php" method="post">
		<div class="iniSession ">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="r col-md-6 sombra">
					<h4>Iniciar Session</h4>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row text-center">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center asd sombra" style="">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6 form-group text-center">
							<center>
								<label for="nombreV">Nombre de usuario:</label>
								<input class="form-control" maxlength="15" type="text" name="nombreUsuario" required placeholder="Usuario">
							</center>
						</div>
						<div class="col-md-3"></div>
					</div>
					<div class="row text-center">
						<div class="col-md-3"></div>
						<div class="col-md-6 form-group text-center">
							<label for="contraseña">Contraseña:</label>
							<input class="form-control" maxlength="15" type="password" name="contraseña" required placeholder="**********">
						</div>
						<div class="col-md-3"></div>
					</div>
					<br>
					<div class="row text-center">
						<input type="submit" class="btn btn-primary btn-lg" value="Entrar"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="reset" class="btn btn-primary btn-lg" value="Limpiar">
					</div>
					<br>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
		</div>
	</form>
	<div class="container imgnLogo" align="center">
				<img src="imagenes/logoipchile2.jpg" class="img-responsive" alt="" />
			</div>
	<div class="session">
		<h1>Session iniciada como:
			<?=$_SESSION['tipoUsu'] ?>
		</h1>
		<br/>
		<input type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://localhost/Prueba2/Redireccion.php'"
		    value="Menu">
		<input type="button" class="btn btn-danger btn-lg" onclick="window.location.href='http://localhost/Prueba2/mata.php'" value="Cerrar Session">
	</div>
	</div>
	<!--<input class="verSession" name="verSession" type="hidden" value="<?=$_SESSION['tipoUsu'] ?>">-->
</body>

</html>
<?php require('hyf/footer.php'); ?>