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
      <form action="MOSTRARLIBROS.php" method="post" > <br>

        Asignatura:<input type="text" name="asignatura" value="" maxlength="10"> <br>

        ISBN:<input type="text" name="isbn" value="" maxlength="10"> <br>

        Genero_Literario:<input type="text" name="genero" value="" maxlength="20"> <br>

        Titulo:<input type="text" name="titulo" value="" maxlength="40"> <br>

        Editorial:<input type="text" name="editorial" value="" maxlength="20"> <br>

        Idioma:<input type="text" name="idioma" value="" maxlength="10"> <br>

        Codigo_autor:<input type="number" name="autor" value="" > <br>

        N°_paginas:<input type="number" name="paginas" value="" > <br>


        
        <input type="submit" value="Enviar">
        <button type="reset">Cancelar</button>
      </form>
</center>
</body>
</html>