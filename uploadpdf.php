<?php require('hyf/header.php'); ?>
<?php
include_once 'config.inc.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<title>subir tesis</title>
		<!-- Identificar dispositovo -->
	<meta name="viewport" content="width=device-width">
	
	<!-- Vincular css bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<!-- Vincular css propio -->
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="sweetalert.css">
	<!-- vincular jquery -->
    <script src="sweetalert.min"></script>
	<script src="js/jquery.js"></script>

	<!-- vinculamos javascript propio -->
	<script type="text/javascript" src="js/script.js"></script>

	<script src="js/bootstrap.min.js"></script>

    <tr> 
        <input type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://localhost/Prueba2/admin.php'" value=" Volver ">
    </tr>

	</head>
	<body>

 <div style="box-shadow:5px 5px 25px black; border-radius:10px;border-color:#fafafa !important;height:400px; width: 480px;margin: auto;border: 1px solid blue;padding: 30px;position:relative;top:-40px;">
     <div class="text-center" style="margin-top:-20px;">
            <h4>Subir Tesis</h4>
            </div>
            <form method="post" action="" enctype="multipart/form-data">
                <table class="table">
                	<tr>
                        <td><label>Alumno</label></td>
                        <td><input class="form-control" type="text" name="nombre_alumno" required></td>
                        <td></td>
                    </tr>
                	<tr>
                        <td><label>Rut</label></td>
                        <td><input class="form-control"  type="number" name="rut" placeholder="Sin puntos ni guion" required></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input class="form-control"  type="text" name="titulo" required></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label>Descripcion</label></td>
                        <td><textarea class="form-control"  name="descripcion" required ></textarea></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input  class="btn btn-success btn-block" type="file" name="archivo" required></td>
                    <tr>
                        <td><a class="btn btn-primary btn-lg btn-block" href="verTesis.php">Lista</a></td>
                        <td><input class="btn btn-success btn-lg btn-block" type="submit" value="subir" name="subir"></td>
                    </tr>
                </table>
            </form>            
        </div>

	</body>
</html>
<?php 
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/upload/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
        	 $nombre_alumno= $_POST['nombre_alumno'];
        	  $rut= $_POST['rut'];
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos
            (nombre_alumno,rut,titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES
            ('$nombre_alumno',$rut,'$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "<script>  $(document).ready(function(){  swal('Tesis cargada correctamente','','success') })</script>";
            }
        } else {
            echo "<script>  $(document).ready(function(){  swal('Error Cargando tesis','','error') })</script>";
        }
    }
}
?>
<?php require('hyf/footer.php'); ?>