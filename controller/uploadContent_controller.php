<?php

session_start();

include "../model/conexion.php";

if(!empty( $_POST["titulo"]) && !empty( $_POST["autor"]) && !empty( $_POST["tecnica"]) && !empty( $_POST["descripcion"])  && !empty( $_FILES["imagen"])  && !empty( $_POST["anio"])  ) {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $anio = $_POST["anio"];
    $tecnica = $_POST["tecnica"];
    $descripcion = $_POST["descripcion"];
    $usuario = $_SESSION['usuarioEmail'] ;

  
        $ruta= "../imgs/galeria/" . $_FILES["imagen"]["name"];
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

        $imagen = "imgs/galeria/" .  $_FILES["imagen"]["name"];
    


        $consulta = mysqli_query($conexion, "INSERT INTO obrasgaleria (titulo, autor, anio, tecnica, descripcion, imagen, usuario) VALUES('$titulo', '$autor','$anio','$tecnica','$descripcion'
        ,'$imagen', '$usuario')");

         $_SESSION['alerta'] = "Se ha subido la obra correctamente.";
        header("Location:../obrasUser.php");

    }


    else {
        $_SESSION['alertaUpload'] = "Debe completar todos los campos.";
        header("Location:../obraUpload.php");
    }

    

