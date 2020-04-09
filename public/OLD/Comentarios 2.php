<html lang="es" dir="ltr">

<head>
<meta charset="utf-8">
<title>EquipoAntiCovid</title>
<!--BOOTSTRAP CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/anim.css">
<script src="https://kit.fontawesome.com/d2b8efb2df.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
<link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>

<body>

<div id="modulo2" class="container-fluid ">
<div class="row ml-3" style="min-height: 50px; width: 110px; border-bottom:solid 3px white;">
</div>
<div class="row" style="min-height: 50px;">
<div class="col-12 col-md-6">
<div class="row m-3">
<img class="ml-5" src="comentario.png" height="55px">
</div>
<div class="row">
<div class="col-12">
<form class="mx-3 mt-5" method = "post" action = "./assets/mod/GuardarComentario.php">
<div class="form-group">
<label>Nombre</label>
<input type="text" class="form-control" placeholder="Nombre" name ="nombre"required = "true">
</div>
<div class="form-group">
<label for="exampleFormControlTextarea1">Comentarios</label>
<textarea class="form-control" rows="3" name="comentario" required = "true"></textarea>
</div>
<button type="submit" class="btn btn-primary" style="background-color: #fddb3a; border-color:#fddb3a">Enviar Comentario</button>
</form>
</div>
</div>
</div>
<div class="col-12 col-md-6 my-5">
<?PHP include("./assets/mod/LeerComentarios.php") ?>
</div>
</div>
</div>
<script src="assets/js/anim.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>
<script src="assets/js/scroll.js"></script>
<script src="assets/js/jquery.scrollx.min.js"></script>
<script src="js/form.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
