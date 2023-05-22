<?php 

session_start();

include("../model/conexion.php");

$usuario =   $_SESSION['usuarioEmail'];

$ID = $_POST["ID"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$anio = $_POST["anio"];
$tecnica = $_POST["tecnica"];
$descripcion = $_POST["descripcion"];


$consulta = mysqli_query($conexion, "UPDATE obrasgaleria SET titulo='$titulo', autor='$autor', anio='$anio',
tecnica='$tecnica', descripcion='$descripcion'  WHERE ID='$ID' AND usuario='$usuario' ");

if ($consulta = true){
    $_SESSION['alerta'] = "Obra modificada correctamente.";
    header("Location:../obrasUser.php");

}


