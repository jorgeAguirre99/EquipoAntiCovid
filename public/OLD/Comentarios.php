<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EquipoAntiCovid</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>
  <body>
    <div class="container-fluid d-flex justify-content-center">
      <div class="Add-Comentario col-md-5" >
        <form>
          <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" placeholder="Juan Garrido">
          </div>
          <div class="form-group">
            <label for="Comentario">Comentario:</label>
            <textarea rows="4" cols="80" class="form-control"placeholder="Inserte su comentario"></textarea>
          </div>
            <button type="submit" class="btn btn-primary "name="submit">Submit</button>
        </form>
      </div>
    </div>
    <div class="container-fluid">
      <h2>Comentarios</h2>
      <hr align="left" noshade="noshade" size="2" width="100%" />
    </div>
    <?php
    echo("Hola");
    ?>




    <div class="container-fluid d-flex justify-content-center">
      <div class="comentario col-md-5">

      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
