<?php

session_start();

if (isset($_SESSION['user'])) {
    header('Location: welcome.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Empacadora</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a <span>'La Empacadora'</span> </h2>
                <p>Si ya tienes una cuenta inicia sesión</p>
                <button class="sign-up-btn">Iniciar Sesión</button>
            </div>
        </div>

        <form action="data/user_register.php" class="form" method="POST">
            <h2 class="create-account">Crear una cuenta</h2>
            <p class="free-acount">Crear una cuenta gratis</p>
            <input type="text" name="cedula_sign-up" id="" placeholder="Cédula" required>
            <input type="text" name="nombre_sign-up" id="" placeholder="Nombre completo" required>
            <input type="password" name="password_sign-up" id="" placeholder="Contraseña" required>
            <input type="submit" value="Registrarse">
        </form>

    </div>

    <div class="container-form sign-in">
        <form action="data/login_user.php" class="form" id="form-login" method="POST">
            <h2 class="create-account">Iniciar Sesión</h2>
            <p class="free-acount">¿Aún no tienes cuenta?</p>
            <input type="text" name="cedula_sign-in" id="" placeholder="Cédula" required>
            <input type="password" name="password_sign-in" id="" placeholder="Contraseña" required>
            <input type="submit" value="Iniciar Sesión">
        </form>

        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo!</h2>
                <p>Si aún no tienes una cuenta registrate aquí </p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>

    </div>

    <script src="assets/js/script.js"></script>

</body>

</html>