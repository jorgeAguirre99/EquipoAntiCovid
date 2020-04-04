
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EquipoAntiCovid</title>
  <!--BOOTSTRAP CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <script src="https://kit.fontawesome.com/d2b8efb2df.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
  <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
  <script src="assets/js/jquery.instagramFeed.js" type="text/javascript"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
</head>
<body>
<form role="form" method="POST" action="consulta.php">
  <div class="form-group">
    <label for="ejemplo_email_1">Consulta</label>
    <input type="text" class="form-control" name="consulta" placeholder="Introduce tu consulta MySQL">
  </div>
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
<div class="containter">
    <div class="row">
        <div class="col">
            <?php echo $_SERVER['URI']?>
        </div>
    </div>
</div>
</body>
</html>