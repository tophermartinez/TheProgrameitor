<?php
	include('Modelo/Conexion.php');
	session_start();
	$_SESSION = array();
	session_destroy();
	$con->query('TRUNCATE TABLE carro');
	header('location:index.php');
?>