<!DOCTYPE html>
<html lang="es" dir="ltr">
<?php 
        include('assets/mod/actualizar.php');
        include('assets/mod/covid.php');
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Equipo Anti Covid es un proyecto solidario que nace de la mano de jóvenes estudiantes con la colaboración de profesores y profesionales en el sector de la impresión 3D, para facilitar y suministrar material de protección a sanitarios y fuerzas de seguridad de la Comunidad de Madrid"/>
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="EquipoAntiCovid, Coronavirus, Covid-19, Covid, Spain,Equipo, España Coronavirus, AntiCovid, Madrid, Comunidad de Madrid, Hospitales, Viseras, Impresión 3D, 3D,3D Printer, Technology, Tecnología, UFV, Mafre, Cartuchos.es, FábdeFab, EXarchitects, Bomberos Fuenlabrada, Truyol Digital, Universitários, Students, Amazon, Cases, Coronavirus Cases"/>
  <title>Inicio | EquipoAntiCovid</title>
  <!--BOOTSTRAP CSS -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/d2b8efb2df.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
  <script src="assets/js/jquery.instagramFeed.js" type="text/javascript"></script>
  <link rel="shortcut icon" href="media/favicon.ico" type="image/ico">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
  <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 2000
            });
        });
    </script>
</head>
<body>
<div id="page-wrapper" class="c container-fluid" style="padding: 0">
  <!--HEADER-->
  <header>
    <nav id="nav" class="navbar navbar-expand-md navbar-dark fadeIn">
      <div class="navbar-collapse collapse order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto" style="/* display: inline-flex; */-webkit-box-orient: none;display: flex;clear: both;float: left;">
          <li class="nav-item active"  style="margin-right: 12px;">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="public/nosotros.php">Nosotros</a>
          </li>
        </ul>
      </div>
      <div class="mx-auto order-0 d-flex justify-content-center" style="width: 100%;">
        <a class="navbar-brand mx-auto d-flex justify-content-center nomarginleft js-scroll-trigger"  href="#">
          <img class="logocovid" src="media/img/logo.png" ></a>
        <div class="d-flex justify-content-end align-self-center" style="clear: both;float: right;">
        <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".dual-collapse2">
          <i class="fas fa-bars"></i>
        </button>
        </div>
      </div>
      <div class="navbar-collapse collapse order-3 dual-collapse2" style="clear: both; float: right;">
        <ul class="navbar-nav ml-auto" style="display: flex;float: right;clear: both;">
          <li class="nav-item" style="display: flex; align-items: center;">
            <a class="nav-link" style="margin-right: 8px" href="public/contacto.php">Contacto</a>
          </li>
          <li class="nav-item">
          <a href = "public/donacion.php"><button class="contribuir btn btn-lg"  type="button">Contribuir</button></a>
          </li>
        </ul>
      </div>
    </nav>
    </header>
  
  <div id="header" class="c7 container-fluid text-center fadeInSlow">
    <div class="row" style="min-height: 450px">
      <div class="col align-self-center justify-content-center">
        <img class="centrallogo" src="media/img/central_logo.png"  alt="" class="mt-3">
      </div>
    </div>
    <div class="row" style="min-height: 100px">
      <div class="col align-self-center justify-content-center">
        <a href="#modulo1" class="btn btn-lg mx-2 my-2 js-scroll-trigger FadeLeft">Como ayudar</a>
        <a href="#modulo2" class="btn btn-lg mx-2 my-2 js-scroll-trigger FadeRight">Conoce el proceso</a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
  </div>
  <div id="modulo1"  class="c0 container-fluid text-center">
  <div id="principal" class="principal fadeIn">
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="media/videos/vid5.mp4" type="video/mp4">
      </video>
    <div id="cabecera">
    <div class="row ml-3" style="min-height: 50px; width: 110px; border-bottom:solid 3px white;">
    </div>
    <div class="row FadeLeft" style="min-height: 50px;">
      <div class="col-2 m-3">
        <img class="ml-5 titulotext" src="media/img/texto1.png">
      </div>
    </div>
    <div class="row">
      <div class=" col-sm-4 my-5 FadeLeft">
        <div class="card ">
          <div class="card-body">
            <img src="media/img/comparte.png" height="45px">
            
            <p class="card-text mt-3">Siguenos en nuestros perfiles y comparte el contenido.</p>
            <a href="https://www.instagram.com/equipoanticovid/" class="btn" ><i class="ico fas fa-heart"></i></a>
          </div>
        </div>
      </div>
      <div class=" col-sm-4 my-5 slideanim">
        <div class="card ">
          <div class="card-body">
            <img src="media/img/dona.png" height="45px">
            <p class="card-text mt-3">Dona materiales por Amazon&trade; necesarios para la fabricación de viseras.</p>
            <a href="public/donacion.php" class="btn"><i class="ico fas fa-hand-holding-medical"></i></a>
          </div>
        </div>
    </div>
    <div class="col-sm-4 my-5 FadeRight">
      <div class="card">
        <div class="card-body">
          <img src="media/img/proveedores.png" height="47px">
          <p class="card-text mt-3">Ponnos en contacto con empresas que donen o necesiten material.</p>
          <a href="public/contacto.php" class="btn" ><i class="ico fas fa-map-marker-alt"></i></a>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </div>
  <div id="modulo2" class="c1 container-fluid ">

    <div class="row ml-3" style="min-height: 50px; width: 110px; border-bottom:solid 3px white;">
    </div>
    <div class="row FadeLeft" style="min-height: 50px;">
      <div class="col-2 m-3">
        <img class="ml-3 titulotext" src="media/img/logo3.png">
      </div>
    </div>
    <a href="public/nosotros.php" target="_blank" style="color:white;text-decoration:none"><div class="row">
      <div class="col-sm-4 col-md-4 my-5 FadeLeft">
        <i class="cuadroizq fas fa-angle-right"></i>
        <i class="cuadroizqder fas fa-angle-right"></i>
        <div class="inner-modulo2">
        <img class="ml-3" src="media/img/1.png" height="70px">
        <p class="mt-2 ml-3">GESTION DE AYUDAS</p>
        </div>
        <i class="cuadroderizq fas fa-angle-right"></i>
        <i class="cuadroder fas fa-angle-right"></i>
      </div>
      <div class=" col-sm-4 col-md-4 my-5 PopIn">
        <i class="cuadroizq fas fa-angle-right"></i>
        <i class="cuadroizqder fas fa-angle-right"></i>
        <div class="inner-modulo2">
        <img class="ml-3" src="media/img/2.png" height="70px">
        <p class="mt-2 ml-3">RECEPCIÓN DE MATERIAL</p>
        </div>
        <i class="cuadroderizq fas fa-angle-right"></i>
        <i class="cuadroder fas fa-angle-right"></i>
      </div>
      <div class=" col-sm-4 col-md-4 my-5 FadeRight">
        <i class="cuadroizq fas fa-angle-right"></i>
        <i class="cuadroizqder fas fa-angle-right"></i>
        <div class="inner-modulo2">
        <img class=" ml-3" src="media/img/3.png" height="70px">
        <p class="mt-2 ml-3">FABRICACIÓN DE PIEZAS</p>
      </div>
      <i class="cuadroderizq fas fa-angle-right"></i>
      <i class="cuadroder fas fa-angle-right"></i>
      </div>
      <div class=" col-sm-4 col-md-4 my-5 FadeLeft">
        <i class="cuadroizq fas fa-angle-right"></i>
        <i class="cuadroizqder fas fa-angle-right"></i>
        <div class="inner-modulo2">
        <img class=" ml-3" src="media/img/4.png" height="70px">
        <p class="mt-2 ml-3">MONTAJE DE PARTES</p>
      </div>
      <i class="cuadroderizq fas fa-angle-right"></i>
      <i class="cuadroder fas fa-angle-right"></i>
      </div>
      <div class="col-sm-4 col-md-4 my-5 PopIn">
        <i class="cuadroizq fas fa-angle-right"></i>
        <i class="cuadroizqder fas fa-angle-right"></i>
        <div class="inner-modulo2">
        <img class="ml-3" src="media/img/5.png" height="70px">
        <p class="mt-2 ml-3">DESINFECIÓN DE VISERAS</p>
      </div>
      <i class="cuadroderizq fas fa-angle-right"></i>
      <i class="cuadroder fas fa-angle-right"></i>
      </div>
      <div class="col-sm-4 col-md-4 my-5 FadeRight">
        <i class="cuadroizq fas fa-angle-right"></i>
        <i class="cuadroizqder fas fa-angle-right"></i>
        <div class="inner-modulo2">
        <img class=" ml-3" src="media/img/6.png" height="70px">
        <p class="mt-2 ml-3">REPARTO A HOSPITALES</p>
                </div>
        <i class="cuadroderizq fas fa-angle-right"></i>
        <i class="cuadroder fas fa-angle-right"></i>
      </div>
    </div></a>
  </div>
  <div class="c2 container-fluid img2 parallaxminor">
    <div class="soft">
      <p class="covid">Covid-19</p>
      <div class="row d-flex justify-content-center">
      
        <div class="col-md-4">
            <span class="counter numeros FadeLeft" ><?php echo $infectados ?></span><!--Total infectados global-->
            <p>Infectados en el Mundo</p>
        </div>
        <div class="col-md-4">
          <span class="counter numeros slideanim" ><?php echo $infectes ?></span><!--Total en españa-->
          <p>Infectados en España</p>
        </div>
        <div class="col-md-4">
          <span class="counter numeros FadeRight" style="color:lime"><?php echo $recues ?></span><span class="plus">+</span><!--Total curados en españa-->
          <p>Recuperados en España</p>
        </div>
      </div>

    </div>
  </div>
  <div class="c4 container-fluid">
  <div id="instagram-feed-demo" class="instagram_feed PopIn" >
  </div>
  </div>
  <script type="text/javascript">
    $(window).on('load', function(){
     $.instagramFeed({
         'username': 'equipoanticovid',
         'container': "#instagram-feed-demo",
         'display_profile': false,
         'display_biography': false,
         'display_igtv': false,
         'items':6,
         'display_gallery':true,
         'styling':true
       });
   });
  </script>
  

  <div class="c3 container-fluid parallax img4">

    <div class="empresas">

      <p class="titulo PopIn">Nuestros Colaboradores</p>
      <div class="row">
        <div class="col-6 col-md-3 FadeLeft">
          <img src="media/img/ufv-logo.png" class="logo"/>
        </div>
        <div class="col-6 col-md-3 FadeLeft">
          <img src="media/img/ex-logo.png" class="logo"/>
        </div>
        <div class="col-6 col-md-3 FadeRight">
          <img src="media/img/mafre.png" class="logo"/>
        </div>
        <div class="col-6 col-md-3 FadeRight">
          <img src="media/img/bomberos-logo.png" class="logo"/>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-4 slideanim">
          <img src="media/img/fab-logo.jfif" class="logo"/>
        </div>
        <div class="col-6 col-md-4 slideanim">
          <img src="media/img/cartucho-logo.png" class="logo"/>
        </div>
        <div class="col col-md-4 slideanim">
          <img src="media/img/truyol-logo.png" class="logo"/>
        </div>
      </div>
    </div>
    <div id="modulo3" class="c8 container-fluid">
  <div class="row ml-3" style="min-height: 50px; width: 110px; border-bottom:solid 3px white;">
  </div>
  <div class="row" style="min-height: 50px;">
  <div class="col-12 col-md-6">
  <div class="row m-3">
  <img class="ml-5 FadeLeft titulotext" src="media/img/comentario.png">
  </div>
  <div class="row">
  <div class="col-12 FadeLeft">
  <form class="mx-3 mt-5" method = "post" action = "assets/mod/GuardarComentario.php">
  <div class="form-group">
  <label>Nombre</label>
  <input type="text" class="form-control" placeholder="Nombre" name ="nombre"required = "true">
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Comentarios</label>
  <textarea class="form-control" rows="3" placeholder="Comentario" name="comentario" required = "true"></textarea>
  </div>
  <button type="submit" class="btn PopIn">Enviar Comentario</button>
  </form>
  </div>
  </div>
  </div>
  <div class="col-12 col-md-6 my-5">
  <?PHP include("./assets/mod/LeerComentarios.php") ?>
  </div>
  </div>
  
  </div>
    <footer id="footer">
      <ul class="copyright">
        <li>Contacto: <a href="mailto:equipoanticovid@gmail.com">equipoanticovid@gmail.com</a></li>
      </ul>
      <ul class="icons">
        <li>
          Siguenos en: <a href="https://www.instagram.com/equipoanticovid/" target="_blank"> @equipoanticovid</a>
        </li>
      </ul>

      <ul class="copyright">
        <li><a href="legal/politica-privacidad.php" target="_blank">Privacidad</a></li><span class="punt">·</span><li><a target="_blank" href="legal/politica-cookies.php">Cookies</a></li>
      </ul>
      <ul class="copyright">
        <li>&copy;2020 Equipo Anti Covid. Todos los derechos reservados.</li><span class="punt">|</span><li>Design by: <a target="_blank" href="media/img/WEBANTICOVID.jpg">EquipoAntiCovid</a></li>
      </ul>
      <ul class="copyright">
        <li><span class="hashtag">#QuedateEnCasa</span></li><li><span class="hashtag">#EsteVirusLoParamosJuntos</span></li>
      </ul>
    </footer>
  </div>
</div>
<script type="text/javascript">

    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#edeff5",
          "text": "#838391"
        },
        "button": {
          "background": "#4b81e8"
        }
      },
      "content": {
        "message": "Esta página web usa cookies para asegurarte la mejor experiencia posible",
        "dismiss": "Aceptar",
        "link": "Saber Más",
        "href": "legal/politica-cookies.php"
      }
    });
  </script>
  <script src="assets/js/script.js"></script>
 <script src="assets/js/jarallax.min.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/scrolling-nav.js"></script>
  <script src="assets/js/scroll.js"></script>
  <script src="assets/js/smooth-scroll.js"></script>
  <script src="assets/js/jquery.scrollx.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
</body>


</html>
