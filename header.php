<?php 
    include_once "admin/controladores/logo.controlador.php";
    include_once "admin/modelos/logo.modelo.php";


    $item = 1;
    $campo = 'id';

    $respuesta = ControladorLogos::ctrMostrarLogos($item, $campo);

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florería Samantha</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ubicacion.css">
    <link rel="stylesheet" href="css/nosotros.css">
    <!------------Favicon------------------->
    <link rel="icon" href="img/sam7.png">
    <!------------Librería Swipper------------------->
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- SweetAlert2 -->
    <script src="sweetalert2/sweetalert2.all.js"></script>
    <!------------Fuente dosis------------------->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dosis:wght@200..800&family=Oswald:wght@200..700&family=Thasadith:ital,wght@0,400;0,700;1,400;1,700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!------------Fuente playwrite------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DK+Loopet:wght@100..400&display=swap"
        rel="stylesheet">

</head>

<body>
    <!--------------------------------------------------------------
    ================-Menu de navegacion================------------>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container-fluid">

                <!--Boton de menu hamburguesa-->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#openMenu"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="img/MaterialSymbolsLightMenuRounded.svg" alt="">
                </button>

                <!--logo principal-->
                <a class="navbar-brand" href="index.php">
                    <img class="logo"
                        src="admin/<?=$respuesta['foto'] ?>"
                        alt="
                    Logo">
                </a>
                <!--Contenedor de busqueda y enlaces -->
                <div class="offcanvas offcanvas-start inputSearch" id="openMenu">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title p-3" id="offcanvasNavbarLabel">
                            <img src="admin/<?=$respuesta['foto'] ?>"
                                class="logo" alt="logo">
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <!--Input buscar-->
                    <div class="row items">
                        <form class="col-xl-9 col-lg-9 col-sm-12" id="form" method="post" action="index.php">
                            <input type="search" id="buscar" name="tipo" placeholder="Buscar por categoría: tulipanes, rosas, mixto..">
                            <button class="botonBuscar" type="submit">
                                <img type="submit" src="img/iconsSearch.svg" alt="search">
                            </button>
                        
                        </form>

                        <!--Enlaces-->
                        <ul class="navbar-nav col-xl-3 col-lg-3 d-flex justify-content-around">
                            <li class="d-flex flex-column">
                                <a href="index.php" class="d-flex flex-column align-items-center">
                                    <img src="img/iconsHome.svg" alt="inicio">
                                    Inicio</a>
                            </li>
                            <li class="d-flex flex-column align-items-center">

                                <a href="ubicacion.php" class="d-flex flex-column align-items-center">
                                    <img src="img/iconsLocationFavourite.svg" alt="localizacion">
                                    Ubicacion</a>
                            </li>
                            <li class="d-flex flex-column align-items-center">

                                <a href="nosotros.php" class="d-flex flex-column align-items-center">
                                    <img src="img/iconsUserGroup.svg" alt="Nosotros">
                                    Nosotros</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="linea"></div>