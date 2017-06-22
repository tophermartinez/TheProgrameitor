<?php require('hyf/header.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>ver archivo</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<tr>
		<input type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://localhost/Prueba2/verTesis.php'" value=" Volver ">
	</tr>-->
</head>

<body>
	<div class="text-center" style="margin-top:-50px;">
		<!--<button class="Agr       BTN-LG btn btn-primary"><span class="glyphicon glyphicon-user"></span> Ingresar</button>-->
        <a class="btn btn-primary btn-lg" href="verTesis.php"
        >
        Volver
    </button>
		<a class="btn BTN-LG btn-primary" href="verTesis.php">
			<spam class="glyphicon glyphicon-search"></spam> Ver y descargar tesis </a>
		<a class="btn BTN-LG btn-primary" href="Descargarformulario.php">Descargar Formulario</a>
		<a class="btn BTN-LG btn-primary" href="Quienessomos.php">Quienes Somos?</a>
	</div>
	<?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select * from tbl_documentos where id_documento=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){?>
		<p>NO tiene archivos</p>
		<?php }else{ ?>
		<iframe class="text-center" src="archivos/upload/<?php echo $datos['nombre_archivo']; ?>" 
		style="width:100%;height:450px;"></iframe>
		<div class="text-center">
		<a 
		class="btn btn-success btn-lg"
		style="position:absolute;top:100px;right:15px;zoom:1.5;"
		href="archivos/upload/<?php echo $datos['nombre_archivo']; ?>" 
		download>Descargar</a>
		</div>
		<?php } } ?>
		<?php require('hyf/footer.php'); ?>
</body>

</html>
