
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ingresar los datos personales</title>
</head>
<body>
<center>
<h1>Introduzca los datos que le pide</h1><br>

      <!--DATOS  PERSONALES-->
      <p>Introduzca sus datos personales </p>
      <form action="MOSTRARDATOS.php" method="post" > 
        Nombre(s):<input type="text" name="nombre" value="" > <br>
        Apellido(s):<input type="text" name="apellidos" value="" > <br>
        Edad:<input type="text" name="edad" value="" maxlength="2"> <br>
        Email:<input type="text" name="email" value="" > <br>
        Direccion:<input type="text" name="direccion" value="" > <br>
        Telefono:<input type="text" name="telefono" value="" maxlength="10"> <br><br>

      <!--GENERO-->
        <p>Introduzca Su Genero</p>
        <input type="radio" id="Masculino" name="otciones" value="Masculino">
        <label for="Masculino">Hombre</label>
        <input type="radio" id="Femenino" name="otciones" value="Femenino">
        <label for="Femenino">Mujer</label><br><br><br>

      <!--ESPECIALIDAD-->
        <p>Selecciona una Especialidad:</p>
        <select name="Especialidad">
            <option value="Mecanica">Mecanica</option>
            <option value="Mecatronica">Mecatronica</option>
            <option value="Ofimatica">Ofimatica</option>
            <option value="Programacion">Programacion</option>
            <option value="Electricidad">Electricidad</option>
            <option value="Administracion_de_recursos_humanos">Administracion_de_recursos_humanos</option>
        </select><br><br><br>

        <!--ASIGNATURAS-->
        <p>Selecciona tus Asignaturas:</p>
        <input type="checkbox" id="Quimica" name="opciones[]" value="Quimica">
        <label for="Quimica">Quimica</label><br>

        <input type="checkbox" id="Paginas_Web" name="opciones[]" value="Paginas_Web">
        <label for="Paginas_Web">Paginas_Web</label><br>

        <input type="checkbox" id="Aplicaciones_Servidor" name="opciones[]" value="Aplicaciones_Servidor">
        <label for="Aplicaciones_Servidor">Aplicaciones_Servidor 3</label><br>

        <input type="checkbox" id="Probabilidad" name="opciones[]" value="Probabilidad">
        <label for="Probabilidad">Probabilidad 3</label><br>

        <input type="checkbox" id="Calculo" name="opciones[]" value="Calculo">
        <label for="Calculo">Calculo</label><br>

        <input type="checkbox" id="Fisica" name="opciones[]" value="Fisica">
        <label for="Fisica">Fisica</label><br><br><br>

        <!--ACTIVIDADES-->
       <p>Selecciona tus Actividades:</p>
        <input type="checkbox" id="Futbol" name="op[]" value="Futbol">
        <label for="Futbol">Futbol</label><br>

        <input type="checkbox" id="Atletismo" name="op[]" value="Atletismo">
        <label for="Atletismo">Atletismo</label><br>

        <input type="checkbox" id="Voleibol" name="op[]" value="Voleibol">
        <label for="Voleibol">Voleibol</label><br>

        <input type="checkbox" id="Danza" name="op[]" value="Danza">
        <label for="Danza">Danza</label><br><br><br>

        Comentario:<input type="text" name="comentario" value="" > <br><br><br>


        <input type="submit" value="Enviar">
        <button type="reset">Cancelar</button><br>
      </form>


</center>
</body>
</html>

