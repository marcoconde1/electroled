<?php
session_start();
$dir = dirname(__FILE__);
require_once $dir."/conexion.php";
$link = conectarse();

$usuario = $_POST["usuario"];
$password = $_POST["contrasena"];

$r = mysqli_query($link, "SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena='$password'");

if(mysqli_num_rows($r)) {
    if($row = mysqli_fetch_array($r)) {
        if($row["contrasena"] == $password) {
            $_SESSION["cc"] = $row["id"];
            header("Location: inicio.html");
        }
    }
} else {
    header("Location: inicio_sesion.php?error=error_datos");
    exit();
}
?>
