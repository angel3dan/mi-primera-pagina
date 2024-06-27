<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h3>Mostrar Datos de la tabla usuarios</h3>
<?php
  $servidor="localhost";
  $usuario="root";
  $contrasena="";
  $basedatos="proyecto";
  $enlace=mysqli_connect($servidor,$usuario,$contrasena,$basedatos);
  ?>

  <?php
    $Numero_Usuario= $_POST['numero'];
    $Nombre= $_POST['nombre'];
    $Apellidos= $_POST['apellidos'];
    $Direccion= $_POST['direccion'];
    $Poblacion= $_POST['poblacion'];
    $Codigo_postal= $_POST['postal'];
    $Telefono= $_POST['telefono'];
    $Fecha_De_Nacimiento= $_POST['nacimiento'];
    $Sancionado= $_POST['sancionado'];

    echo "El Numero Del Usuario Que Ingreso Es: $Numero_Usuario <br>";
    echo "El Nombre Que El Usuario Ingreso Es: $Nombre <br>";
    echo "Los Apellidos Que El usuario Ingreso Son: $Apellidos <br>";
    echo "la Direccion Que El Usuario Ingreso Es: $Direccion <br>";
    echo "La Poblacion Que El Usuario Ingreso Es: $Poblacion <br>";
    echo "El Codigo Postal Que El Usuario Ingreso Es: $Codigo_postal <br>";
    echo "El Numero De Telefono Que El Usuario Ingreso Es: $Telefono <br>";
    echo "La Fecha De Nacimiento Que Ingreso El Usuario Es: $Fecha_De_Nacimiento <br>";
    echo "¿El Usuario Es Sancionado?: $Sancionado <br>";

    $insertarDatos="INSERT INTO `usuarios`(`Numero_Usuario`, `Nombre(s)`, `Apellido(s)`, `Direccion`, `Poblacion`, `Codigo_Postal`, `Telefono`, `Fecha_De_Nacimiento`, `Sancionado`) VALUES ('$Numero_Usuario','$Nombre','$Apellidos','$Direccion' ,'$Poblacion' ,'$Codigo_postal' ,'$Telefono' ,'$Fecha_De_Nacimiento' ,'$Sancionado')";
    $ejecutarInsertar=mysqli_query($enlace,$insertarDatos);
   ?>  
 

 <p>Haz  click en el Boton "Siguente" para seguir </p>
    <form action="AUTORES.php" method="post">
    <input type="submit" value="Siguente">
    </form>

   </center>
</body>
</html>
