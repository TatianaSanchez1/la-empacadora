<?php
include('../database/Database.php');
require_once('../class/User.php');

$userId = $_POST['cedula_sign-up'];
$userName = $_POST['nombre_sign-up'];
$userPassword = $_POST['password_sign-up'];

$query = "INSERT INTO users(id, name, password) VALUES (?,?,?)";

// Verificar que el e-mail no exista
$verify_id = "SELECT * FROM users WHERE id = ?";
$result = $user->getRow($verify_id, [$userId]);
if ($result > 0) {
    echo '
            <script>
                alert("Esta cédula ya está registrado.");
                window.location = "../index.php";
            </script>
        ';
    exit();
}

$execute = $user->insertRow($query, [$userId, $userName, $userPassword]);

if ($execute) {
    echo '
            <script> 
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>';
} else {
    echo '
            <script> 
                alert("Intentalo de nuevo. Usuario no almacenado");
                window.location = "../index.php";
            </script>';
}


$user->Disconnect();
