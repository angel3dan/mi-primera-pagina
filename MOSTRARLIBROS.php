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
    $Asignatura= $_POST['asignatura'];
    $ISBN= $_POST['isbn'];
    $Genero_Literario= $_POST['genero'];
    $Titulo= $_POST['titulo'];
    $Editorial= $_POST['editorial'];
    $Idioma= $_POST['idioma'];
    $Codigo_autor= $_POST['autor'];
    $N_paginas= $_POST['paginas'];
    
    

    echo "La Asignatura Que El Usuario Ingreso Es: $Asignatura <br>";
    echo "El isbn Que El Usuario Ingreso Es: $ISBN <br>";
    echo "El Genero Que El usuario Ingreso Es: $Genero_Literario <br>";
    echo "El Titulo Que El Usuario Ingreso Es: $Titulo <br>";
    echo "El Editorial Que El Usuario Ingreso Es: $Editorial <br>";
    echo "El Idioma Que El Usuario Ingreso Es: $Idioma <br>";
    echo "Los Codigo Autor Que El usuario Ingreso Es: $Codigo_autor <br>";
    echo "El Numero De Paginas Que El Usuario Ingreso Es: $N_paginas <br>";


    $insertarDatos="INSERT `libros`(`Asignatura`, `ISBN`, `Genero_Literario`, `Titulo`, `Editorial`, `Idioma`, `Codigo_Autor`, `Numero_Paginas`)   VALUES ('$Asignatura','$ISBN','$Genero_Literario','$Titulo','$Editorial','$Idioma','$Codigo_autor','$N_paginas')";
    $ejecutarInsertar=mysqli_query($enlace,$insertarDatos);
   ?>  
 

 <p>Haz  click en el Boton "Siguente" para seguir </p>
    <form action="PRESTAMOS.php" method="post">
    <input type="submit" value="Siguente">
    </form>

   </center>
</body>
</html>
