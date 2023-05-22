<?php

session_start();

include('../model/conexion.php');

if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $consulta = mysqli_query($conexion, "SELECT email, password, name FROM usuarios WHERE email='$email' AND password='$password' ");
    $resultado = mysqli_num_rows($consulta);

    if ($resultado != 0) {
        $respuesta = mysqli_fetch_array($consulta);
        $_SESSION['usuario'] = $respuesta['name'];
        $_SESSION['usuarioEmail'] = $respuesta['email'];
        header("Location:../index.php");
    } 
    else {
        $_SESSION['alertaLogin'] = "Datos incorrectos";
        header("Location:../login.php");
    }
    
} else {
    $_SESSION['alertaLogin'] = "Ingresar email y/o contraseña valida";
    header("Location:../login.php");
}

