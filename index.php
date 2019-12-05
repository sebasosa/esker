<?php

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Esker Outdoors - Bienvenidos</title>

    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Teko:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/bf37ca3396.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- INICIO HEADER -->
    <?php require_once 'partials/header.php' ?>
    <!-- FIN DEL HEADER -->

    <!-- INICIO GALERIA -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <div class="container">
        <div class="row">
          <section class="carousel-inner">
            <article class="carousel-item active">
              <div class="col-6 producto">
                <img src="productos/mochila-azul-frente.png" class="" alt="Mochila 30 lts">
              </div>
              <div class="col-6 info-slide">
                <h3>Mochila 30 lts</h2>
                  <h1>Natway Blanc 30</h1>
                  <span>$1690.00</span>
              </div>
            </article>
          </section>
        </div>
      </div>
    </div>

    <!-- FIN DE GALERIA -->

    <!--SECCION EMPRESA-->
    <div class="empresa">
      <div class="container">
        <div class="row">
          <h2 class="titulo">Empresa</h2>
          <p class="subtitulo">ESKER OUTDOOR® es una marca creada por DIFRAL SRL, inspirada en las propias pasiones de sus fundadores.</p>
          <div class="imagen-texto">
            <img src="productos/esker.jpg" alt="Integrantes de la Empresa">
            <p>Creemos que tu espíritu aventurero debe estar acompañado por la tranquilidad de contar con elementos de excelente calidad por eso en nuestra tienda encontrarás indumentaria y accesorios de primera línea para realizar tus actividades al
              aire libre.
            </p>
            <p>ESKER OUTDOOR® además diseña y desarrolla sus propios productos, a la medida de tus necesidades.</p>
            <p>Nuestra experiencia como montañistas le otorga a nuestros asesoramientos no sólo abarcar los aspectos técnicos sino sumarle las anécdotas vividas.</p>

          </div>
          <div class="iconos">
            <img src="iconos/icono-1.png" alt="">
            <img src="iconos/icono-2.png" alt="">
            <img src="iconos/icono-3.png" alt="">
            <img src="iconos/icono-4.png" alt="">
            <img src="iconos/icono-5.png" alt="">
            <img src="iconos/icono-6.png" alt="">
            <img src="iconos/icono-7.png" alt="">
          </div>
        </div>
        <p class="frase-pasion">ESKER OUTDOOR® representa la pasión de sus fundadores por eso no nos cansamos de repetirlo:</p>
        <p class="frase-motivadora">La vida comienza allá afuera!</p>
      </div>
    </div>
    </div>
    <!-- FIN DE EMPRESA -->

    <!--  FORMAS DE PAGO  -->
    <div class="forma_de_pagar">
      <div class="formas">
        <div class="primero">
          <img src="iconos/beneficio-1.png" alt="">
          <h2 class="letras">ENVÍO</br>GRATIS</h2>
          <h3 class="">A partir de los $699,00</h3>
        </div>
        <div class="segundo">
          <img class="fototercero" src="iconos/beneficio-2.png" alt="">
          <h2 class="letras">SATISFACCIÓN GARANTIZADA</h2>
          <h3 class="">30 días para la devolucion sin cargo</h3>
        </div>
        <div class="tercero">
          <img src="iconos/beneficio-3.png" alt="">
          <h2 class="letras">COMPRA</br>SEGURA</h2>
          <h3 class="">Tienda Online verificada</h3>
        </div>
      </div>
    </div>

    <!-- MARCAS -->
    <div class="marcas_acompanan">
      <div class="marcas">
        <h2>MARCAS QUE NOS ACOMPAÑAN</h2>
        <div class="cada_marca">
          <ul>
            <li>
              <img class="elunico" src="logos/logo_northland.jpg" alt="Northland">
            </li>
            <li>
              <img class="elunico" src="logos/logo_salomon.jpg" alt="Salomon">
            </li>
            <li>
              <img class="elunico" src="logos/logo_hitec.jpg" alt="Hitec">
            </li>
            <li>
              <img class="elunico" src="logos/logo_columbia.jpg" alt="Columbia">
            </li>
            <li>
              <img class="elunico" src="logos/waterdog_logo.jpg" alt="Waterdog">
            </li>
            <li>
              <img class="elunico" src="logos/logo_doite.jpg" alt="Doite">
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- FIN DE MARCAS -->

    <!-- FOOTER -->
    <?php require_once 'partials/footer.php' ?>
    <!-- FIN DEL FOOTER -->


    <!--  SCRIPTS  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>
