<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h3>Mostrar Datos de la tabla libros</h3>
<?php
  $servidor="localhost";
  $usuario="root";
  $contrasena="";
  $basedatos="proyecto";
  $enlace=mysqli_connect($servidor,$usuario,$contrasena,$basedatos);
  ?>

  <?php
    $Asignatura= $_POST['as'];
    $Usuario= $_POST['u'];
    $Fecha_Prestamo= $_POST['fp'];
    $Fecha_Devolucion= $_POST['fd'];

    
    

    echo "La Asignatura Que El Usuario Ingreso Es: $Asignatura <br>";
    echo "El usuario Que El Usuario Ingreso Es: $Usuario <br>";
    echo "La Fecha De Prestamo Que El usuario Ingreso Es: $Fecha_Prestamo <br>";
    echo "La Fecha Devolucion Que El Usuario Ingreso Es: $Fecha_Devolucion <br>";



    $insertarDatos="INSERT INTO `prestamos`(`Asignatura`, `Usuario`, `Fecha_Prestamo`, `Fecha_Devolucion`) VALUES ('$Asignatura','$Usuario','$Fecha_Prestamo','$Fecha_Devolucion')";
    $ejecutarInsertar=mysqli_query($enlace,$insertarDatos);
   ?>  
 

    <form action="MAINPAGE.php" method="post">
    <input type="submit" value="Regresar">
    </form>

   </center>
</body>
</html>
