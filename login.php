<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>

<body>

<?php include_once "includes/header.php" ;?>

<?php if (isset($_SESSION['usuario'])){
    header("Location:index.php");
} ?>

    <section class="login">

        <h3>Iniciar Sesion</h3>

        <h6>Expone tus obras impresionistas.</h6>
        <br>

        <div class="formularioLogin">

            <form action="controller/login_controller.php" method="post">

        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  required name="email" placeholder="Email">

        <input class="m-4" type="password" required name="password" placeholder="Contraseña">

        <br>
      
        <button class="btn btn-dark">Iniciar Sesion</button>

        <?php if(isset( $_SESSION['alertaLogin'])) {echo '<h6>'.  $_SESSION['alertaLogin'] . '</h6>'; }?>

    </form>
        <br>

        <a href="recoveryPassword.php">  <h6>Has olvidado tu contraseña?</h6>  </a>


        <br>

        <h6>No tenes cuenta?</h6>

        <a href="register.php">
            <h5>Registrate</h5>
        </a>

    </div>



    </section>


    <?php include_once "includes/footer.php" ;?>








    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>


</body>

</html>