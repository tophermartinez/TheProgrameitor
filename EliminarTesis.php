
<?php 
 require('hyf/header.php'); 
 include 'config.inc.php';
 $db=new conect_mysql();
 $sql = "select*from tbl_documentos";
 $query = $db->execute($sql);
?>

<!doctype html>
<html ng-app="miapp" >
    <head>
        <title>lista de tesis</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/angular.js"></script>
        <script src="js/angular_router.js"></script>
<script>
 angular.module('miapp', ['ui.router'])
angular.module('miapp')
  .controller('ListController', function($scope) {
    $scope.todos="asdasd";
  })
</script>
    </head>
<body  ng-controller="ListController">
    <div class="text-center" style="margin-top:-50px;">
		<!--<button class="Agr       BTN-LG btn btn-primary"><span class="glyphicon glyphicon-user"></span> Ingresar</button>-->
        <a class="btn btn-primary btn-lg" href="index.php"
        >
        Volver
    </button>
		<a class="btn BTN-LG btn-primary" href="verTesis.php">
			<spam class="glyphicon glyphicon-search"></spam> Ver y descargar tesis </a>
		<a class="btn BTN-LG btn-primary" href="Descargarformulario.php">Descargar Formulario</a>
		<a class="btn BTN-LG btn-primary" href="Quienessomos.php">Quienes Somos?</a>
	</div>
    <br>

    <div class="bus row">

                <fileset>
                    <legend>Buscar</legend>
                    <form action="BuscartesisTesis.php" method="post">
                        <div class="forEliminar col-md-2">
                            Rut Alumno:
                            <input type="text" id="id-buscar" name="id-buscar" class="form-control" required>
                            
                        </div>
                        <div class="divBtnEliminar col-md-1 form-group">
                            <label for="btnBuscar"></label>
                            </br>
                            <input type="submit" value="Buscar" class="btn btn-danger" id="buscar">
                        </div>
                        <div class="forEliminar col-md-8"></div>
                    </form>
                </fileset>
            </div>

    <table class=" fixed_headers">
        <thead>
            <tr>  
                <th> Alumno{{todos}}</th> 
                <th> Rut</th> 
                <th> Titulo</th> 
                <th> Descripcion</th>
                <th> Tamaño</th> 
                <th> Tipo</th> 
                <th> Nombre archivo</th>  
            </tr>
            </thead>
            <tbody>     <?php 

                $con = new mysqli("localhost","root","","prueba2");

                $idBuscar = $_POST['id-buscar'];

                $consulta = "select * from  tbl_documentos WHERE rut like '%$idBuscar%'";

                $respuesta = $con->query($consulta);


             while($datos=$db->fetch_row($respuesta)){ ?>
            <tr>
                <td><?php echo ucwords($datos['nombre_alumno']); ?></td> 
                <td><?php echo $datos['rut']; ?></td> 
                <td><?php echo ucwords($datos['titulo']); ?></td> 
                <td><?php echo ucwords($datos['descripcion']); ?></td> 
                <td><?php echo $datos['tamanio']; ?></td>
                <td><?php echo $datos['tipo']; ?></td>
                <td><a class="btn btn-success btn-block btn-lg" href="archivo.php?id=<?php echo $datos['id_documento']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
               <td><a class="btn btn-danger btn-block btn-lg" href="eliminarTe.php?id=<?php echo $datos['id_documento']?>">Eliminar</a></td>
            </tr>  
                 <?php  } ?>
            </tbody>
</table>
         

              
         
    </body>
</html>

<?php require('hyf/footer.php'); ?>