<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h3>MOSTRAR PROMEDIO</h3>

<?php
  $servidor="localhost";
  $usuario="root";
  $contrasena="";
  $basedatos="proyecto";
  $enlace=mysqli_connect($servidor,$usuario,$contrasena,$basedatos);
  ?>


<?php
    $Calificacion1 = $_POST['cal1'];
    $Calificacion2 = $_POST['cal2'];
    $Calificacion3 = $_POST['cal3'];
    $promedio=($Calificacion1+$Calificacion2+$Calificacion3)/3;
    echo "El promedio final de las tres calificaciones es de: $promedio <br>"; 
    
    $insertarDatos="INSERT INTO `calfinal`(`Calificacion_1`, `Calificacion_2`, `Calificacion_3`, `Promedio`) VALUES ('$Calificacion1','$Calificacion2','$Calificacion3','$promedio')";
    $ejecutarInsertar=mysqli_query($enlace,$insertarDatos);

   ?> 

<form action="MAINPAGE.php" method="post">
    <input type="submit" value="Regresar">
    </form>
    </center>
</body>
</html>