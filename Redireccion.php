<?php
	session_start();
	$tipo = $_SESSION['tipoUsu'];
	if ($tipo == 'Administrador' || $tipo == 'Alumno') {
		if ($tipo == 'Administrador') {
			header('location:admin.php');
		}
		if ($tipo == 'Alumno') {
			header('location:Alumno.php');
		}
	}else{
		header('location:index.php');
	}
?>