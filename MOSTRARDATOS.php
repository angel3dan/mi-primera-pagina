<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar los datos que ingrese el usuario</title>
</head>
<body>
<center>
<h3>Mostrar Datos</h3>
<?php
  $servidor="localhost";
  $usuario="root";
  $contrasena="";
  $basedatos="proyecto";
  $enlace=mysqli_connect($servidor,$usuario,$contrasena,$basedatos);
  ?>



<?php
    $Nombre = $_POST['nombre'];
    $Apellidos = $_POST['apellidos'];
    $Edad = $_POST['edad'];
    $Email = $_POST['email'];
    $Direccion = $_POST['direccion'];
    $Telefono =$_POST['telefono'];
    $Genero =$_POST['otciones'];
    $Especialidad =$_POST['Especialidad'];
    $Comentario =$_POST['comentario'];


    echo "El nombre que ingresado es: $Nombre <br>";
    echo "Los apellidos que ingreso son: $Apellidos <br>";
    echo "La edad que ingreso es: $Edad <br>";
    echo "El email que ingreso es: $Email <br>";
    echo "La direccion que ingreso es: $Direccion <br>";
    echo "El telefono que ingreso es: $Telefono <br>";
    echo "El sexo que ingreso es: $Genero <br>";
    echo "La Especialidad que ingreso es: $Especialidad <br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificamos si se han seleccionado opciones
        if (!empty($_POST['opciones'])) {
            // Obtener las opciones seleccionadas
            $opcionesSeleccionadas = $_POST['opciones'];
    
            // Mostrar las opciones seleccionadas
            echo "<h5>Asignaturas Seleccionadas:</h5>";
            foreach ($opcionesSeleccionadas as $opcion) {
                echo "<p>$opcion</p>";
            }
        } else {
            echo "<p>No se han seleccionado opciones.</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificamos si se han seleccionado opciones
        if (!empty($_POST['op'])) {
            // Obtener las opciones seleccionadas
            $Seleccionadas = $_POST['op'];
    
            // Mostrar las opciones seleccionadas
            echo "<h5>Actividades Seleccionadas:</h5>";
            foreach ($Seleccionadas as $ot) {
                echo "<p>$ot</p>";
            }
        } else {
            echo "<p>No se han seleccionado opciones.</p>";
        }
    }
    echo "El Comentario que ingreso es: $Comentario <br>";

    $insertarDatos="INSERT INTO  `datos`(`Nombre(s)`, `Apellido(s)`, `Edad`, `E-mail`, `Direccion`, `Telefono`, `Genero`, `Especialidad`) VALUES ('$Nombre','$Apellidos','$Edad','$Email','$Direccion','$Telefono','$Genero','$Especialidad','$opcion','$ot','$Comentario')";
    $ejecutarInsertar=mysqli_query($enlace,$insertarDatos);
   ?> 
       <form action="MAINPAGE.php" method="post"><br><br>
    <input type="submit" value="Regresar">
    </form>
   </center>
</body>
</html>

