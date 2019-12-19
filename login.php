<?php

session_start();
require_once 'controladores/funciones.php';
$arrayDeErrores = "";

if($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);
    if(count($arrayDeErrores) === 0) {
        // LOGUEO AL USUARIO
        $arrayUsuarios = abrirBBDD('usuarios.json');
        foreach($arrayUsuarios as $usuarioJson) {
            $userFinal = json_decode($usuarioJson, true);
            if($_POST['email'] == $userFinal['email']) {
                if(password_verify($_POST['password'], $userFinal['password'])) {
                    // Crearle una sesion
                    $_SESSION['email'] = $userFinal['email'];
                    if(isset($_POST['recordarme']) && $_POST['recordarme'] == "on") {
                        // Unix time
                        setcookie('userEmail', $userFinal['email'], time() + 60 * 60 * 24 * 7);
                        setcookie('userPass', $userFinal['password'], time() + 60 * 60 * 24 * 7);
                    }
                    header('Location: bienvenido.php');
                    exit;
                }
            }
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
    <title>Iniciar Sesion en Esker Outdoors</title>
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Teko:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/bf37ca3396.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- HEADER -->
    <?php require_once 'partials/header.php' ?>

    <!-- INICIO LOGIN -->
    <div id="login" class="pagina">
      <div class="container">
        <h1>LOGIN</h1>
      </div>
    </div>

    <div class="contenido">
      <div class="container">
        <div class="login">
          <p>Si ya tenés una cuenta, ingresá los datos a continuación</p>
          <form class="login-form" action="" method="post">
            <fieldset class="form-group">
              <input id="email" type="email" class="form-control" name="email" value="" placeholder="Escribi tu Email">
              <small class="text-danger"><?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?></small>
            </fieldset>
            <fieldset class="form-group">
              <input id="password" type="password" class="form-control" name="password" value="" placeholder="Escribi tu contraseña">
              <small class="text-danger"><?= isset($arrayDeErrores['password']) ? $arrayDeErrores['password'] : "" ?></small>
            </fieldset>
            <fieldset class="form-group">
              <input type="checkbox" id="remember" name="recordarme">
              <label for="remember">Recordar Usuario</label>
            </fieldset>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <p class="olvidopass"> <a href="#">* Olvidé mi contraseña</a></p>
          </form>
        </div>
        <div class="registro">
          <p>Nuevos Clientes</p>
          <p>Al crear una cuenta en nuestra página podrás moverte rápidamente por el proceso de pago, guardar múltiples direcciones de envío, ver y seguir el rastro de los pedidos de tu cuenta y más!</p>
          <a href="registro.php" class="btn btn-secondary">Quiero crear mi cuenta</a>
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
