<?php 

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Contactate con Esker Outdoors</title>
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Teko:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/bf37ca3396.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- INICIO HEADER -->
    <?php require_once 'partials/header.php' ?>


    <!-- CONTACTO -->
    <div id="contacto" class="pagina">
      <div class="container">
        <h1>CONTACTANOS</h1>
      </div>
    </div>

    <div class="contenido">
      <div class="container">
        <div class="contacto">
          <p>Envianos tu mensaje o consulta</p>
          <form class="contact-form" action="index.php" method="post">
            <fieldset class="form-group">
              <input id="nombre" type="text" class="form-control" name="nombre" value="" placeholder="Nombre y Apellido">
            </fieldset>
            <fieldset class="form-group">
              <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email">
            </fieldset>
            <fieldset class="form-group">
              <input id="tel" type="tel" class="form-control" name="tel" value="" placeholder="Telefono">
            </fieldset>
            <fieldset class="form-group">
              <textarea class="form-control" name="mensaje" rows="8" cols="80"></textarea>
            </fieldset>
            <button type="submit" class="btn btn-primary">Registrarme</button>
          </form>
        </div>

      </div>
    </div>

    <!-- FOOTER -->
    <?php require_once 'partials/footer.php' ?>

    <!--  SCRIPTS  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>