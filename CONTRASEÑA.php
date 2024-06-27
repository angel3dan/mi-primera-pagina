<?php
session_start();

// Verificar si el usuario ya está autenticado, si es así, redirigirlo a la página de inicio.
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: MAINPAGE.php');
    exit;
}

// Verificar si el formulario de login ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si se han proporcionado nombre de usuario y contraseña
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Validar las credenciales (aquí deberías tener una lógica para verificar en tu base de datos)
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Supongamos que aquí hay una función de autenticación (puedes reemplazarla con tu propia lógica de autenticación)
        if ($username === 'cetis26' && $password === 'alumno') {
            // Iniciar sesión y redirigir al usuario a la página de inicio
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location: MAINPAGE.php');
            exit;
        } else {
            // Si las credenciales no son válidas, mostrar un mensaje de error
            $error = "Nombre de usuario o contraseña incorrectos";
        }
    } else {
        // Si no se proporcionaron nombre de usuario y contraseña, mostrar un mensaje de error
        $error = "Por favor, ingrese nombre de usuario y contraseña";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) { ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Nombre de usuario:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
