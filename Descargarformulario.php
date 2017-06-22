<?php require('hyf/header.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>descargar formulario</title>
		<!-- Identificar dispositovo -->
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

<div class="text-center" style="margin-top:-50px;">
		<!--<button class="Agr       BTN-LG btn btn-primary"><span class="glyphicon glyphicon-user"></span> Ingresar</button>-->
        <a class="btn btn-primary btn-lg" href="Redireccion.php"
        >
        Volver
    </button>
		<a class="btn BTN-LG btn-primary" href="verTesis.php">
			<spam class="glyphicon glyphicon-search"></spam> Ver y descargar tesis </a>
		<a class="btn BTN-LG btn-primary" href="Descargarformulario.php">Descargar Formulario</a>
		<a class="btn BTN-LG btn-primary" href="Quienessomos.php">Quienes Somos?</a>
	</div>

<div class="container" style="margin-top:50px;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 panel panel-default">
			<div class="panel-heading">
				.
			</div>
			<div class="panel-body text-center" style="height:300px;">
				
				<br><br><h3>Formulario de autorizacion de publicación de Tesis</h3><br><br>
<a class="btn btn-success btn-lg" style="zoom:1.5;" href="../Prueba2/archivos/formulario.pdf" dowmload>
Descargar Archivo
</a>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<!--</tr>
<tr> 
  <input type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://localhost/Prueba2/Redireccion.php'" value="Menu">
</tr>-->


	</body>
</html>

<?php require('hyf/footer.php'); ?>