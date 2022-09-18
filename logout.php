<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start(); //Iniciar sesion si no fue iniciada
}
session_destroy();

header('location: index.php');
