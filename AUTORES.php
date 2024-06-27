<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ingresar los datos de la tabla usuarios</title>
</head>
<body>
<center>
<p>Introduzca los datos que le pide</p>
      <form action="MOSTRARAUTORES.php" method="post" > <br>

        Codigo_del_autor:<input type="number" name="codigo" value=""> <br>

        Nombre(s):<input type="text" name="nombre" value="" maxlength="20"> <br>

        Apellido(s):<input type="text" name="apellidos" value="" maxlength="20"> <br>

        Nacionalidad:<input type="text" name="nacionalidad" value="" maxlength="15"> <br>

        <input type="submit" value="Enviar">
        <button type="reset">Cancelar</button>
      </form>
</center>
</body>
</html>