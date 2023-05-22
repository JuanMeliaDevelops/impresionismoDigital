<?php

session_start();

include("../model/conexion.php");

$ID = $_GET["ID"];
$usuario = $_SESSION['usuarioEmail'];

$consulta = mysqli_query($conexion, "DELETE FROM obrasgaleria WHERE ID='$ID' ");

if ($consulta = true) {

    $_SESSION['alerta'] = "Obra eliminada correctamente.";
    header("Location:../obrasUser.php");
}
