<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />

    <?php
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php", "", $archivo);
        if($pagina == 'invitados' || $pagina == 'index' ){
            echo '<link rel="stylesheet" href="css/colorbox.css">';
        }else if($pagina == 'conferencia'){
            echo '<link rel="stylesheet" href="css/lightbox.css">';
        }
    ?>
    
    <link rel="stylesheet" href="css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina; ?>">

    <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
                <div class="informacion-evento">
                    <div class="clearfix">
                        <p class="fecha"><i class="fas fa-calendar-alt"></i>10-12 Dic</p>
                        <p class="ciudad"><i class="fas fa-map-marker-alt"></i>Guadalajara, MX.</p>
                    </div>
                    <h1 class="nombre-sitio">GdlWebCamp</h1>
                    <p class="slogan">La mejor conferencia de <span>diseno web</span></p>
                </div>
            </div>
        </div>
        <!-- HERO -->
    </header>

    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
                <a href="index.php"><img src="imagenes/logo.svg" alt="logo"></a>
            </div>

            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="navegacion-principal clearfix">
                <a href="conferencia.php">Conferencia</a>
                <a href="calendario.php">Calendario</a>
                <a href="invitados.php">Invitados</a>
                <a href="registro.php">Reservaciones</a>
            </nav>
        </div>
    </div>