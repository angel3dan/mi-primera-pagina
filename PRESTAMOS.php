<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ingresar los datos de la tabla prestamos</title>
</head>
<body>
<center>
<p>Introduzca los datos que le pide</p>
      <form action="MOSTRARPRESTAMOS.php" method="post" > <br>

        Asignatura:<input type="text" name="as" value="" maxlength="10"> <br>

        Usuario:<input type="number" name="u" value="" > <br>

        Fecha_Prestamo:<input type="date" name="fp" value=""> <br>

        Fecha_Devolucion:<input type="date" name="fd" value=""> <br>
        
        <input type="submit" value="Enviar">
        <button type="reset">Cancelar</button>
      </form>
</center>
</body>
</html>