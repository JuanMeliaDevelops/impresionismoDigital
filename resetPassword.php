<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
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

    <section class="login">

        <h3>Cambiar contraseña</h3>
        <br>
    <h6>Elige una nueva contraseña</h6>
        <div class="formularioLogin">

    <form action="controller/resetPassword_controller.php" method="post">
     <input class="m-4" type="password" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" required name="password" placeholder="Contraseña Actual">
        <input class="m-4" type="password" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" required name="newPassword" placeholder="Nueva contraseña">
        <input class="m-4" type="password"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$"  required name="newPasswordValidation" placeholder="Repetir nueva contraseña">
        <button class="btn btn-dark">Cambiar contraseña</button>

        <?php if(isset( $_SESSION['alertaReset'])) {echo '<h6>'.  $_SESSION['alertaReset'] . '</h6>'; }?>


    </form>


    </div>



    </section>




      
    <?php include_once "includes/footer.php" ;?>






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>


</body>

</html>