<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&display=swap" rel="stylesheet">

    <!-- CSS only -->
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>

<body>


<?php include_once "includes/header.php" ;
 if (!isset($_SESSION['usuario'])){
    header("Location:index.php");}
    ?>

    <section class="login">

        <h3>Comparti tu obra</h3>

        <br>

        <div class="formularioLogin">

            <form action="controller/uploadContent_controller.php" method="post" enctype="multipart/form-data">

        <input type="text" required name="titulo" placeholder="Titulo de la obra">
        <input type="text" required name="autor" placeholder="Autor de la obra">
        <input type="text" required name="anio" placeholder="Año que se creo la obra">
        <input  type="text"   required name="tecnica" placeholder="Tecnica utilizada en la obra">
        <textarea name="descripcion" placeholder="Descripcion" cols="60" rows="6"></textarea>
        <input class=" btn-dark m-4" type="file"  name="imagen" required >

        <br>
        <button class="btn btn-dark">Subir</button>

        <?php if(isset( $_SESSION['alertaUpload'])) {echo '<h6 class="adminAlertas">'.  $_SESSION['alertaUpload'] . '</h6>'; }?>

    </form>
      

    </div>



    </section>


  
    <?php include_once "includes/footer.php" ;?>





<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>