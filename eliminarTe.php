<?php 


$id = $_GET["id"];

	$con = new mysqli("localhost","root","","prueba2");

	$consulta = "delete from tbl_documentos WHERE id_documento = $id";

	$con->query($consulta);

	header('location:verTesis.php');



 ?>