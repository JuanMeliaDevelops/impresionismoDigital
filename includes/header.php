<header>

    <?php session_start() ?>

    <nav>

        <ul>
            <a href="index.php"> <img src="imgs/logo.png" alt="Impresionismo Digital Logo"> </a>

            <a href="index.php">
                <li>Inicio</li>
            </a>

            <a href="queEs.php">
                <li>Qué es el Impresionismo?</li>
            </a>
            <a href="artistas.php">

                <li>Artistas Influyentes</li>
            </a>
            <a href="galeria.php">
                <li>Galería</li>
            </a>



            <?php if (isset($_SESSION['usuario'])) {
                echo  '     
        
        <div class="dropdown">
         <button class="botonHeader btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
             aria-expanded="false">
             <li style="list-style:none; color:brown;">' . $_SESSION['usuario'] . '</li> 
         </button>
         <ul class="dropdown-menu text-center">
         <li> <a href="obraUpload.php"> Compartir obra </a> </li>
         <li> <a href="obrasUser.php"> Mis obras </a> </li>
     <li> <a href="resetPassword.php"> Cambiar contraseña </a> </li>
     <li> <a href="controller/logout_controller.php"> Cerrar Sesión </a> </li>
         </ul>
     </div>
    
';
            } else {
                echo '
         <div class="dropdown">
         <button class=" botonHeader btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
             aria-expanded="false">
             Miembros
         </button>
         <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="login.php">Iniciar Sesión</a></li>
             <li><a class="dropdown-item" href="register.php">Registrarse</a></li>
         </ul>
     </div>
        
        ';
            } ?>


        </ul>
    </nav>

</header>