<?php
session_start();
include "../model/conexion.php";

if(!empty( $_POST["name"]) && !empty( $_POST["email"]) && !empty( $_POST["password"]) && !empty( $_POST["passwordValidation"])  ) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password= md5($_POST["password"]);
    $passwordVal = md5($_POST["passwordValidation"]);

    if ($password == $passwordVal){

        $consulta = mysqli_query($conexion, "INSERT INTO usuarios (name, email, password) VALUES('$name','$email','$password')");
        header("Location:../registerSucces.php");

    }

    else {
        $_SESSION['alertaRegister'] = "Las contraseñas no coinciden";
        header("Location:../register.php");
    }

    

}

else {
    $_SESSION['alertaRegister'] = "Debe completar todos los campos para registrarse correctamente";
    header("Location:../register.php");
}



