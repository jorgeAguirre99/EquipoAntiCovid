<!DOCTYPE html>
<head lang="es">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Equipo Anti Covid es un proyecto solidario que nace de la mano de jóvenes estudiantes con la colaboración de profesores y profesionales en el sector de la impresión 3D, para facilitar y suministrar material de protección a sanitarios y fuerzas de seguridad de la Comunidad de Madrid"/>
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="EquipoAntiCovid, Coronavirus, Covid-19, Covid, Spain,Equipo, España Coronavirus, AntiCovid, Madrid, Comunidad de Madrid, Hospitales, Viseras, Impresión 3D, 3D,3D Printer, Technology, Tecnología, UFV, Mafre, Cartuchos.es, FábdeFab, EXarchitects, Bomberos Fuenlabrada, Truyol Digital, Universitários, Students, Amazon, Cases, Coronavirus Cases"/>
  <title>Contacto | EquipoAntiCovid</title>
  <!--BOOTSTRAP CSS -->
  <script>
 //<![CDATA[
  document.cookie = 'cross-site-cookie=bar; SameSite=None; Secure';
 //]]>
</script>
<link rel="stylesheet" href="../assets/css/EstilosComunes.css">
  <link rel="stylesheet" href="../assets/css/tether.min.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <script src="https://kit.fontawesome.com/d2b8efb2df.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
  <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="../media/favicon.ico" type="image/ico">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
  <link rel="stylesheet" href="../assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
<div id="page-wrapper" class="c container-fluid" style="padding: 0;">

  <?php include('../assets/mod/header.php');?>

  <section class="header6 cid-rVejhWVcLj img8 mbr-fullscreen mbr-parallax-background fadeIn" style="min-height: 75vh;" id="header6-l">
    <div class="mbr-overlay" style="opacity: 0.4;background-color: rgb(218, 41, 196);min-height: auto;">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1" style="font-family: Rajdhani;
    font-weight: 300;">CONTACTO</h1>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5" style="font-family: HPLight;">
					<strong>Equipo Anti Covid</strong> te permite solicitar material o realizar donaciones de material. ¡<strong>Rellene el formulario</strong> que aparece en la parte inferior para aportar tu granito de arena o pedir ayuda! También puedes pulsar en el botón de <strong>contribuir</strong>, arriba a la derecha, para donar a través de Amazon&trade;
                </p>
            </div>
        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
  <img src="../media/img/right.png" style="width: 40px;
    height: 40px;
    transform: rotate(90deg);
    position: absolute;
    top: -2px;
    left: 10px;">
        </a>
    </div>
	</section>



	<div id="modulo1" class="c16 img9  mbr-parallax-background container-fluid">
    
    
    <div class="row" >
      
      <div class="col-12 col-sm-12 my-12" style="padding:0;">
        <div class="card" >
          <div class="card-body ">
            <form class="mx-3 mt-5" method = "post" action = "../assets/mod/GuardarSolicitacion.php">
								
								<div class="form-group">
									<label for="tipoPersona">Tipo solicitante</label>	
									
									<select name="tipoPersona" class="form-control" id="tipoPersona">
										<option value=0 selected>Selecciona tipo de persona</option>
										<?PHP include("../assets/mod/LeerTipoPersona.php") ?>
									</select>								
								</div>
								<div class="form-group">
									<label for="tipoSolicitacion">Solitación</label>
									<select name="tipoSolicitacion" class="form-control" id="tipoSolicitacion">
										<option value=0 selected>Selecciona solicitante</option>
										<?PHP include("../assets/mod/LeerTipoSolicitacion.php") ?>
									</select>
								</div>
								<div class="form-group">
									<label for="producto">Producto</label>
									<select name="producto" class="form-control" id="producto">
										<option value=0 selected>Selecciona tipo de producto</option>
										<?PHP include("../assets/mod/LeerProducto.php") ?>
									</select>
								</div>
								<div class="form-group">
									<label for="unidadesProducto">Unidades</label>
									<input type="number" class="form-control" placeholder="Unidades" name ="unidadesProducto" required = "true" id="unidadesProducto">
								</div>
								<fieldset class="form-group ocultar" id="entidad">
									<div class="row">
										<legend >Entidad</legend>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="nombreEntidad">Nombre de entidad</label>
												<input type="text" class="form-control" placeholder="Nombre de entidad" name ="nombreEntidad" required = "true" id="nombreEntidad">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="telefonoEntidad">Teléfono de entidad</label>
												<input type="text" class="form-control" placeholder="Telefono de Entidad" name ="telefonoEntidad" required = "true" id="telefonoEntidad">
											</div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<label for="emailEntidad">Email de entidad</label>
												<input type="text" class="form-control" placeholder="Email de entidad" name ="emailEntidad" required = "true" id="emailEntidad">
											</div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<label for="direccionEntidad">Dirección de entidad</label>
												<input type="text" class="form-control" placeholder="Dirección de entidad" name ="direccionEntidad" required = "true" id="direccionEntidad">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label for="numeroEntidad">Número</label>
												<input type="number" class="form-control" placeholder="Número" name ="numeroEntidad" required = "true" id="numeroEntidad">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label for="pisoEntidad">Piso de entidad</label>
												<input type="number" class="form-control" placeholder="Piso de entidad" name ="pisoEntidad" required = "true" id="pisoEntidad">
											</div>
											</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<div class="form-group">
												<label for="codigo_postalEntidad">Código postal de entidad</label>
												<input type="number" class="form-control" placeholder="Código postal de entidad" name ="codigo_postalEntidad" required = "true" id="codigo_postalEntidad">
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset class="form-group"  name="personaFisica">
									<div class="row">
										<legend >Persona de contacto</legend>
										<div class="col-sm-6 col-md-6 col-lg-12">
											<div class="form-group">
												<label for="nombrePersona">Nombre de contacto</label>
												<input type="text" class="form-control" placeholder="Nombre" name ="nombrePersona" required = "true" id="nombrePersona">
												
											</div>
										</div>	
										<div class="col-sm-6 col-md-6 col-lg-12">
											<div class="form-group">
												<label for="apellidos">Apellidos</label>
												<input type="text" class="form-control" placeholder="Apellidos" name ="apellidos" required = "true" id="apellidos">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-8">
											<div class="form-group">
												<label for="telef">Teléfono de contacto</label>
												<input type="text" class="form-control" placeholder="Teléfono" name ="telef" required = "true" id="telef">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-4">
											<div class="form-group">
												<label for="ext">Extensión</label>
												<input type="number" class="form-control" placeholder="Extensión" name ="ext" required = "true" id="ext">
											</div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12">										
											<div class="form-group">
												<label for="emailPersona">Email</label>
												<input type="text" class="form-control" placeholder="Email" name ="emailPersona" required = "true" id="emailPersona">
											</div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<label for="direccionPersona">Dirección</label>
												<input type="text" class="form-control" placeholder="Dirección" name ="direccionPersona" required = "true" id="direccionPersona">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label for="numeroPersona">Número</label>
												<input type="number" class="form-control" placeholder="Número" name ="numeroPersona" required = "true" id="numeroPersona">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label for="pisoPersona">Piso</label>
												<input type="number" class="form-control" placeholder="Piso" name ="pisoPersona" required = "true" id="pisoPersona">
											</div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<div class="form-group">
												<label for="codigo_postalPersona">Código postal</label>
												<input type="number" class="form-control" placeholder="Código postal" name ="codigo_postalPersona" required = "true" id="codigo_postalPersona">
											</div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12 col">
										<button type="submit" class="btn btn-primary">Enviar Solicitación</button>
 										</div>	 
									</div>
								</fieldset>
								
								<!--<div class="form-group">
									<label for="exampleFormControlTextarea1">Comentarios</label>
									<textarea class="form-control" rows="3" name="comentario" placeholder="Comentario" required = "true"></textarea>
								</div>-->
								
							</form>
          </div>
		</div>
 		</div>
	</div>
 </div>




  


	<?php include('../assets/mod/footer.php'); ?>

</div>

 <?php include('../assets/mod/cookies.php'); ?>
 <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/tether.min.js"></script>
  <script src="../assets/js/bootstrap-carousel-swipe.js"></script>
  <script src="../assets/js/jquery.touch-swipe.min.js"></script>
  <script src="../assets/js/jarallax.min.js"></script>
  <script src="../assets/js/jquery.mb.ytplayer.min.js"></script>
  <script src="../assets/js/smooth-scroll.js"></script>
  <script src="../assets/js/theme.js"></script>
</body>

</html>