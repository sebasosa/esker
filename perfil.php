<?php

session_start();

require_once 'controladores/funciones.php';
$arrayDeErrores = "";

if(sessionCheck()) {

    $usuariosGuardados = file_get_contents('usuarios.json');
    $arrayUsuarios = explode(PHP_EOL, $usuariosGuardados);
    array_pop($arrayUsuarios);
    foreach($arrayUsuarios as $usuarioJson) {
       $userFinal = json_decode($usuarioJson, true);

       if($_SESSION['nombre']==$userFinal['nombre']){
         $nombre = $userFinal['nombre'];
         $email = $userFinal['email'];
         $imagen= $userFinal['imagen'];
       }

   }
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse en Esker Outdoors</title>
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Teko:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/bf37ca3396.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- HEADER -->
    <?php require_once 'partials/header.php' ?>

    <!-- INICIO PERFIL -->
    <div id="registro" class="pagina">
      <div class="container">
        <h1>PERFIL</h1>
      </div>
    </div>

    <div class="usuario contenido">
        <center>
          <img class="usuario" src="img\<?= $imagen ?>" alt="">
        </center>
      </div>

      <div class="usuario1 contenido">
        <br>
        <article class="">
          <strong>Nombre:</strong> <?= $nombre ?>
        </article>
        <br>

        <article class="">
          <strong>Email:</strong> <?= $email ?>
        </article>
        <br>
        <form class="boton-salir" action="logout.php" method="post">
          <button type="submit" name="salir">Cerrar sesion</button>
       </form>
      </div>

    <!-- FOOTER -->
    <?php require_once 'partials/footer.php' ?>

    <!--  SCRIPTS  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>
