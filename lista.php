
<?php require('hyf/header.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>lista de tesis</title>
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
    <tr> 
 <input type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://localhost/Prueba2/admin.php'" value=" Volver ">
</tr>

    </head>
    <body>

<table border>

     <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>

     
     <tr>  
        <TH> Alumno</TH> <TH> rut</TH> <TH> Titulo</TH> <TH> Descripcion</TH><TH> Tamaño</TH> <TH> Tipo</TH> <TH> Nombre archivo</TH>  
    
                
    </tr>
    <TR>
         <TD><?php echo $datos['nombre_alumno']; ?></TD> <TD><?php echo $datos['rut']; ?></TD> <TD><?php echo $datos['titulo']; ?></TD> 
         <TD><?php echo $datos['descripcion']; ?></TD> <TD><?php echo $datos['tamanio']; ?></TD><TD><?php echo $datos['tipo']; ?></TD>
         <td><a href="archivo.php?id=<?php echo $datos['id_documento']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
            </tr>    
    </TR>          
          <?php  } ?>
            
</TABLE>
         

              
         
    </body>
</html>

<?php require('hyf/footer.php'); ?>