<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Listado de Productos</title>
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Teko:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/bf37ca3396.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- INICIO HEADER -->
    <?php require_once 'partials/header.php' ?>


    <!-- PRODUCTOS -->
    <div id="productos" class="pagina">
      <div class="container">
        <h1>PRODUCTOS</h1>
      </div>
    </div>

    <div class="detalle">
      <div class="container">
        <ul class="categorias">
          <li>Categorias:</li>
          <li><a href="#" class="active">Todos</a></li>
          <li><a href="#">Indumentaria</a></li>
          <li><a href="#">Accesorios</a></li>
          <li><a href="#">Camping</a></li>
          <li><a href="#">Calzado</a></li>
        </ul>
        <div class="filtrar">
          <label for="mostrarPor">Mostrar Por</label>
          <select class="" name="mostrarPor" id="mostrarPor">
            <option value="min">Menor Precio</option>
            <option value="max">Mayor Precio</option>
            <option value="new">Nuevos Ingresos</option>
            <option value="destacados">Destacados</option>
            <option value="az">Orden Alfabético</option>
          </select>
        </div>
      </div>
      <div class="grilla">
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
        </div>
        <div class="prod">
          <img src="productos/cuello.jpg" class="prod-img" alt="Cuello Multipropósito Buff">
          <div class="prod-body">
            <h5 class="prod-title"><a href="#"></a>Cuello Multipropósito Buff</h5>
            <span class="prod-price-d">$250,00</span>
            <span class="prod-price">$200<span>
          </div>
          <div class="prod-links">
            <a href="#">vista rapida</a>
            <span> | </span>
            <a href="#">agregar al carrito</a>
          </div>
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
