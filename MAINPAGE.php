<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style type="text/css">
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #dda0dd;
}

header {
    background-color: #afeeee;
    color: #000000;
    text-align: center;
    padding: 20px 0;
}

nav {
    background-color: #444;
    padding: 10px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 5px 10px;
    transition: background-color 0.3s ease;
}

nav ul li a:hover {
    background-color: #666;
    border-radius: 5px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
</head>

<body>
<header>
        <h1>Menú Principal</h1>
    </header>

<div id="header">
        <ul class="nav">
            <li> <a href="USUARIOS.php">BDD<br> <img src="BDDIMAGEN.png"  height=10%, width=10%><br></a></li>
            <li> <a href="DATOS.php">FORMULARIO<br><img src="FORMULARIOIMAGEN.jpg"  height=10%, width=10%><br></a>  </li>
            <li> <a href="PROMEDIO.php">PROMEDIO<br><img src="PROMEDIOIMAGEN.jpg"  height=10%, width=10%><br></a></li>
            <li> <a href="VIDEO.php">VIDEO<br><img src="VIDEOIMAGEN.png"  height=10%, width=10%><br></a>  </li>
        </ul>
    </div>
</body>
</html>
