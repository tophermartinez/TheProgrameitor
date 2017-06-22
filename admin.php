<?php 
	session_start();
	$tipo = $_SESSION['tipoUsu'];
	if ($tipo == 'Administrador') {
?>
<?php require('hyf/header.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Administrador</title>
		<meta name="viewport" content="width=device-width">
	
		<!-- Vincular css bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Vincular css propio -->
		<link rel="stylesheet" href="css/estilos.css">
		
		<!-- vincular jquery -->
		<script src="js/jquery.js"></script>

		<!-- vinculamos javascript propio -->
		<script type="text/javascript" src="js/script.js"></script>

		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div style="color:white;position:absolute;top:60px;left:700px;z-index:2345678;">
				<h3>Administrador: <?=$_SESSION['nombreUsu']?></h1>
			</div>
		<div class="bod">
			<div class="container">
				<div class="row" >
					<div class="col-md-12 text-center">
					<button class="Mant btn btn-primary btn-lg"><spam class="glyphicon glyphicon-user"></spam> Crear Alumno</button>
					<input type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://localhost/Prueba2/uploadpdf.php'" value=" Subir pdf">
						<input type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://localhost/Prueba2/index.php'" value="Principal">
					<input type="button" class="btn btn-danger btn-lg" onclick="window.location.href='http://localhost/Prueba2/mata.php'" value="Cerrar Session">
					
					</div>
				</div>
			</div>
			<br/>
			<br/>
			
			<br/>
			<div class="container">
				<div class="row">
				<div class="col-md-12 text-center">
					
				<form class="mantUsu" action="http://localhost/Prueba2/Controlador/Mantenedor.php" method="post">
					<div class="blanco">
						<div class="container">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="r col-md-6">
									<h4>Nuevo Alumno:</h4>
								</div>
								<div class="col-md-3"></div>
							</div>
							</br>
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<fieldset>
										<legend>Datos del alumno</legend>
										<div class="row">
											<div class="col-md-5 form-group">
												<label for="nombreV">RUT</label>
												<input class="form-control" maxlength="40" type="text" name="nomCompleto" required>
											</div>
											
											<div class="col-md-4 form-group" style="margin-left:100px;">
												<label for="nombreV">Nombre completo:</label>
												<input class="form-control" type="text" maxlength="11" name="rut" required>
											</div>
											<div class="col-md-6 form-group">
												<label for="rutV">Nombre de usuario:</label>
												<input class="form-control" type="text" maxlength="20" name="nomUsuario" required>
											</div>
											<div class="col-md-6 form-group">
												<label for="rutV">Contraseña</label>
												<input class="form-control" type="password" maxlength="20" name="passw" required>
											</div>
										</div>
										<div class="text-right">
											<input type="submit" class="btn btn-primary" value="Crear">

										</div>

									</fieldset>
								</div>
								<div class="col-md-3"></div>
							</div>
						</div>
					</div>
				</form>
				<div class="container imgnLogo" align="center">
					<img src="imagenes/logoipchile2.jpg" class="img-responsive" alt="" />
				</div>
			</div>
			</div>
		</div>
	</body>
</html>

<?php require('hyf/footer.php'); ?>
<?php
	}else{
		if ($tipo == 'Alumno') {
			header('location:Alumno.php');
		}else{
			header('location:index.php');
		}
	}
?>