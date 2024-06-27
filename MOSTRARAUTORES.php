<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h3>Mostrar Datos de la tabla autores</h3>
<?php
  $servidor="localhost";
  $usuario="root";
  $contrasena="";
  $basedatos="proyecto";
  $enlace=mysqli_connect($servidor,$usuario,$contrasena,$basedatos);
  ?>

  <?php
    $Codigo= $_POST['codigo'];
    $Nombre= $_POST['nombre'];
    $Apellidos= $_POST['apellidos'];
    $Nacionalidad= $_POST['nacionalidad'];
    

    echo "El Codigo De Autor Que El Usuario Ingreso Es: $Codigo <br>";
    echo "El Nombre Que El Usuario Ingreso Es: $Nombre <br>";
    echo "Los Apellidos Que El usuario Ingreso Son: $Apellidos <br>";
    echo "la Nacionalidad Que El Usuario Ingreso Es: $Nacionalidad <br>";

    $insertarDatos="INSERT INTO `autores`(`Codigo_Autor`, `Nombre(s)`, `Apellido(s)`, `Nacionalidad`)   VALUES ('$Codigo','$Nombre','$Apellidos','$Nacionalidad')";
    $ejecutarInsertar=mysqli_query($enlace,$insertarDatos);
   ?>  
 

 <p>Haz  click en el Boton "Siguente" para seguir </p>
    <form action="LIBROS.php" method="post">
    <input type="submit" value="Siguente">
    </form>

   </center>
</body>
</html>
