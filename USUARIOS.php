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
      <form action="MOSTRARUSUARIOS.php" method="post" > <br>

        Numero_del_usuario:<input type="number" name="numero" value=""> <br>

        Nombre(s):<input type="text" name="nombre" value="" > <br>

        Apellido(s):<input type="text" name="apellidos" value="" maxlength="40"> <br>

        Direccion:<input type="text" name="direccion" value="" maxlength="30"> <br>

        Poblacion:<input type="text" name="poblacion" value="" maxlength="20" > <br>

        Codigo_Postal:<input type="text" name="postal" value="" maxlength="5" > <br>

        Telefono:<input type="text" name="telefono" value="" maxlength="10" > <br>

        Fecha_de_nacimiento:<input type="date" name="nacimiento" value="" > <br>

    <p>Si esta sancionado ingrese una opcion ya sea Si o No</p>
        <label for="sancionado">sancionado:</label>
        <select name="sancionado" id="sancionado">
            <option value="SI">Si</option>
            <option value="NO">No</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
        <button type="reset">Cancelar</button><br>
      </form>
</center>
</body>
</html>