<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EquipoAntiCovid | Donación</title>
  <!--LIBRERIAS EXTERNAS Y GOOGLE FONTS-->
  <script src="https://kit.fontawesome.com/d2b8efb2df.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
  <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
  <!--BOOTSTRAP CSS Y BASICOS DE MENU Y WEB EN STYLE.CSS-->
  <link rel="stylesheet" href="../assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
  <!--INICIO PAGE WRAPPER PÁGINA WEB-->
  <div id="page-wrapper" class="c container-fluid" style="padding: 0;">
    <!--INICIO HEADER CON MENU-->
    <?php include('../assets/mod/header.php');?>

    <!--FIN HEADER CON MENU-->
    <section class="my-5 fadeIn">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h5>OS DEJAMOS UN BREVE TUTORIAL DE COMO PODEIS APORTAR VUESTRO GRANITO DE ARENA A TRAVES DE AMAZON</h5>
          </div>
        </div>
      </div>
    </section>

    <div id="principal" class="principal fadeInSlow">
      <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="../media/videos/video.mp4" type="video/mp4">
      </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <a href="#paso1" class="pasos btn btn-lg mt-3" role="button">PASO 1</a>
            <a href="#paso2" class="pasos btn btn-lg mt-3" role="button">PASO 2</a>
            <a href="#paso3" class="pasos btn btn-lg mt-3" role="button">PASO 3</a>
            <a href="#paso4" class="pasos btn btn-lg mt-3" role="button">PASO 4</a>
            <div id="paso1" class="container my-3 section">
              <div class="row">
                <div class="col-md-8 mx-auto ">
                  <img src="../media/img/paso1.png" >
                  <h5 class="mt-3">Pinchamos en el enlace y seleccionar "Añadir a la cesta" en los productos que quieran donar.</h5>
                  <a href="https://www.amazon.es/hz/wishlist/ls/2LE66A0D6H42X?ref_=wl_share" class="contribuir2 btn btn-lg" role="button">ENLACE DONACION</a>
                </div>
              </div>
            </div>
            <div id="paso2" class="container my-3 section">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <img src="../media/img/paso2.png" >
                  <h5 class="mt-3">Pinchamos en tramitar pedido y continuamos con el siguiente paso.</h5>
                  <a href="https://www.amazon.es/hz/wishlist/ls/2LE66A0D6H42X?ref_=wl_share" class="contribuir2 btn btn-lg" role="button">ENLACE DONACION</a>
                </div>
              </div>
            </div>
            <div id="paso3" class="container my-3 section">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <img src="../media/img/paso3.png" >
                  <h5 class="mt-3">Seleccionamos la siguiente dirección y continuamos.</h5>
                  <a href="https://www.amazon.es/hz/wishlist/ls/2LE66A0D6H42X?ref_=wl_share" class="contribuir2 btn btn-lg" role="button">ENLACE DONACION</a>
                </div>
              </div>
            </div>
            <div id="paso4" class="container my-3 section">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <img src="../media/img/paso4.png" >
                  <h5 class="mt-3">Como ultimo paso finalizamos procediendo con el pago.</h5>
                  <a href="https://www.amazon.es/hz/wishlist/ls/2LE66A0D6H42X?ref_=wl_share" class="contribuir2 btn btn-lg" role="button">ENLACE DONACION</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('../assets/mod/footer.php'); ?>
</div>

  <script type="text/javascript">
    $('.pasos:first').addClass('active1');
    $('.section').hide();
    $('.section:first').show();

    $('.principal .pasos').click(function() {
      $('.principal .pasos').removeClass('active1');
      $(this).addClass('active1');
      $('.section').hide();

      var activeTab = $(this).attr('href');
      $(activeTab).show();
      return false;
    });
  </script>
  <script src="../assets/js/smooth-scroll.js"></script>
</body>

</html>
