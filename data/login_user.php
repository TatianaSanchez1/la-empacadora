<?php
require_once('../class/User.php');

if (isset($_POST['cedula_sign-in'])) {
    $id = $_POST['cedula_sign-in'];
    $up = $_POST['password_sign-in'];

    $result = $user->user_login($id, $up);

    if ($result > 0) {
        // echo 'succ';
        $return['logged'] = true;
        $return['url'] = "welcome.php";
        $_SESSION['user'] = $id;
        // $_SESSION['logged_id'] = $result['user_id'];
        // $_SESSION['logged_type'] = $result['user_type'];
        $_SESSION['uniqid'] = uniqid();

        header("location: ../welcome.php");
    } else {
        // echo 'fail';
        $return['logged'] = false;
        $return['msg'] = "Usuario o contraseña invalido!";
    }

    echo json_encode($return);
} //end isset

$user->Disconnect();
