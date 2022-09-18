<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start(); //Inicio de Sesión
}

if (isset($_SESSION['logged_id'])) {
    die('Acceso Denegado!');
}
