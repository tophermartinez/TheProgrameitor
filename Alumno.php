<?php 
	session_start();
	$tipo = $_SESSION['tipoUsu'];
	if ($tipo == 'Alumno') {
?>
<?php require('hyf/header.php'); ?>





<!DOCTYPE html>
<html>
	<head>
		<title>Alumno</title>
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

		<div class="bod">
			<div class="container">
				<div class="row" align="right">
					<input type="button" class="btn btn-primary" onclick="window.location.href='http://localhost/Prueba2/index.php'" value="Principal">
					<input type="button" class="btn btn-danger" onclick="window.location.href='http://localhost/Prueba2/mata.php'" value="Cerrar Session">
				</div>
			</div>
			<br/>
			<br/>
			<div class="Titulo">
				Alumno: <?=$_SESSION['nombreUsu']?>
			</div>
			<br/>







	</body>
</html>

<?php require('hyf/footer.php'); ?>
<?php
	}else{
		if ($tipo == 'Administrador') {
			header('location:admin.php');
		}else{
			header('location:index.php');
		}
	}
?>