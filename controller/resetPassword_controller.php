<?php 

session_start();

include("../model/conexion.php");

$email =  $_SESSION['usuarioEmail'];
$password= md5($_POST["password"]);
$newPassword = md5($_POST["newPassword"]);
$newPasswordValidation = md5($_POST["newPasswordValidation"]);


$consulta2 = mysqli_query ($conexion, "SELECT password FROM usuarios WHERE email='$email' AND password='$password' ");
$resultado = mysqli_num_rows($consulta2);

if ($resultado !=0){

    if ($newPassword == $newPasswordValidation && $password != $newPasswordValidation  ) {
        $consulta = mysqli_query($conexion, "UPDATE usuarios SET password='$newPasswordValidation' WHERE email='$email' ");
        session_destroy();
        header("Location:../login.php");

    }
    
    elseif ($newPassword != $newPasswordValidation){
        $_SESSION['alertaReset'] = "Las nuevas contraseñas no coinciden";
        header("Location:../resetPassword.php");
    }

    elseif ($password == $newPasswordValidation){
        $_SESSION['alertaReset'] = "La contraseña debe ser diferente a la actual";
        header("Location:../resetPassword.php");
    }
    
    
    else{
        $_SESSION['alertaReset'] = "Error";
        header("Location:../resetPassword.php");
    }
}

else {

    $_SESSION['alertaReset'] = "La contraseña actual es incorrecta";
    header("Location:../resetPassword.php");
}


