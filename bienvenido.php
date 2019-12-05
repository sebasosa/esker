<?php
session_start();
require_once 'controladores/funciones.php';
$arrayDeErrores = "";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesion en Esker Outdoors</title>
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Teko:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/bf37ca3396.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- INICIO HEADER -->
    <?php require_once 'partials/header.php' ?>
    <!-- FIN HEADER -->

    <!-- Bienvenidos -->
    <div id="bienvenidos" class="pagina">
      <div class="container">
        <h1>Bienvenidos</h1>
      </div>
    </div>

    <div class="contenido">
      <div class="container">
        <div class="bienvenidos">
          <p>Ya podes empezar a disfrutar de nuestros productos!!</p>
          <a href="index.php" class="btn btn-primary">Comenzar a comprar</a>
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
