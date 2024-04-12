<?php
$dir = dirname(__FILE__);
require_once $dir."/conexion.php";
$link = conectarse();

$correo_electronico = mysqli_real_escape_string($link, $_POST['email']);
$usuario = mysqli_real_escape_string($link, $_POST['usuario']);
$password = mysqli_real_escape_string($link, $_POST['contrasena']);

$u = mysqli_query($link, "SELECT * FROM usuario WHERE usuario='$usuario'");
$c = mysqli_query($link, "SELECT * FROM usuario WHERE email='$correo_electronico'");

if(mysqli_num_rows($u) > 0) {
    header("Location: creacion_cuenta.php?error=usuario_existente");
    exit();
} else {
    if(mysqli_num_rows($c) > 0) {
        header("Location: creacion_cuenta.php?error=email_existente");
        exit();
    } else {
        $insert_query = "INSERT INTO usuario (usuario, email, contrasena) VALUES ('$usuario', '$correo_electronico', '$password')";
        if(mysqli_query($link, $insert_query)) {
            header("Location: inicio_sesion.php");
            exit();
        } else {
             header("Location: creacion_cuenta.php?error=registro_error");
             exit();
        }
    } 
}

mysqli_close($link);
?>
