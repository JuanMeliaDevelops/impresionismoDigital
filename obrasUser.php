
<html lang="es">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



</head>

<body>


<?php include_once "includes/header.php" ;
 if (!isset($_SESSION['usuario'])){
    header("Location:index.php");}
    ?>

    <section class="galeria">

        <h3>Mis obras</h3>
        <?php echo '<h6>Obras subidas por '. $_SESSION['usuario'].  '.</h6>'?>
       <br>
        <?php 
        
        if (isset($_SESSION['alerta'])) { 
            echo $_SESSION['alerta'];
        }

        if (!$_GET) {
            header('Location:obrasUser.php?pagina=1');
        }
     

        
        include('model/conexion.php');
       $usuarioEmail = $_SESSION['usuarioEmail'] ;

       $obrasEnPaginas = 4;
       $iniciarPaginado = ($_GET['pagina']-1)*$obrasEnPaginas;

        $consulta = mysqli_query($conexion, "SELECT * FROM obrasgaleria WHERE usuario='$usuarioEmail' LIMIT $iniciarPaginado,  $obrasEnPaginas");
        $consultaObras = mysqli_query($conexion, "SELECT * FROM obrasgaleria WHERE usuario='$usuarioEmail' ");

        $totalObras =  mysqli_num_rows($consultaObras);
        $paginas = $totalObras / $obrasEnPaginas;
        $paginas = ceil($paginas);


        if ($totalObras == 0) {
            echo "Aun no has subido ninguna obra. <br><br>
            <a href='obraUpload.php'> <button class='btn btn-dark'>Subir Obra</button> </a>
             ";
        }
        ?>

        <div class="obrasContainer">

            <?php
            while ($resultados = mysqli_fetch_array($consulta)) {
            ?>

                <div class="obra obraEditarH">
                <a href="modifyObrasUser.php?ID=<?php echo $resultados['ID']?> & titulo=<?php echo $resultados['titulo']?> & autor=<?php echo $resultados['autor']?>& anio=<?php echo $resultados['anio']?> &  tecnica=<?php echo $resultados['tecnica']?> & 
                    descripcion= <?php echo $resultados['descripcion']?>"  class="editarObra">
                    <div class="imagenObra"> <img class="" src="<?php echo $resultados['imagen']; ?>" alt="<?php echo $resultados['titulo'] . " por " . $resultados['autor'] . " en Impresionismo Digital" ; ?>"> <div class="modifyObras" > <button class="btn btn-dark">Modificar</button> </div></div>

                    <div class="infoObra">

                  
                        <div>
                            <h4><?php echo $resultados['titulo']; ?></h4>
                            <h4><?php echo $resultados['autor']; ?></h4>
                        </div>

                        <div>
                            <h4><?php echo $resultados['anio']; ?></h4>
                            <h4><?php echo $resultados['tecnica']; ?></h4>
                        </div>


                        <h6><?php echo $resultados['descripcion']; ?></h6>
                    </div>
                    </a>
                </div>


            <?php
            }
            mysqli_free_result($consulta);
            mysqli_close($conexion);

            ?>
        </div>

        <nav class="paginacion" aria-label="Page navigation example">
            <ul class="paginacion pagination">
                <li class="page-item 
                <?php echo $_GET['pagina'] <= 1 ? 'disabled' : ''; ?>
                ">
                    <a class="page-link paginacionItem" href="galeria.php?pagina=<?php echo $_GET['pagina'] - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for ($i = 0; $i < $paginas; $i++) : ?>

                    <li class="page-item  
                    <?php echo $_GET['pagina'] == $i + 1 ? 'active' : ''; ?>
                    "><a class="page-link paginacionItem" href="galeria.php?pagina=<?php echo $i + 1; ?>"> <?php echo $i + 1; ?> </a></li>
                <?php endfor ?>

                <li class="page-item 
                <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : ''; ?>
                ">
                    <a class="page-link paginacionItem" href="galeria.php?pagina=<?php echo $_GET['pagina'] + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
      

    </section>



    <?php include_once "includes/footer.php" ;?>






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>