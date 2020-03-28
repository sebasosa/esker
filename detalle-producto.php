<?php
session_start();

require_once 'controladores/funciones.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Detalle Producto</title>
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Teko:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/bf37ca3396.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- INICIO HEADER -->
    <?php require_once 'partials/header.php' ?>


    <!-- DETALLE PRODUCTO -->
    <div id="producto" class="pagina">
      <div class="container">
        <h1>Hi-Tec Tortola Escape</h1>
      </div>
    </div>

    <div class="detalle">
      <div class="container">
        <div class="detalle-producto">
          <a href="productos.php" class="volver"><i class="fas fa-undo"></i> Volver a productos</a>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Zapatillas</a></li>
              <li class="breadcrumb-item active" aria-current="page">Hi-Tec Tortola Escape</li>
            </ol>
          </nav>
          <div class="ficha">
            <div class="fotos">
              <div class="box-descuento">
                <div class="descuento">
                  <span>30% OFF</span>
                </div>
              </div>
              <div class="fotos-detalle">
                <div class="viewport">
                  <img src="productos/zapatilla.jpg" alt="">
                </div>
                <div class="thumbs">
                  <ol>
                    <li><a href="#"><img src="productos/zapa-izq.jpg" alt="" class=""></a>
                    </li>
                    <li><a href="#"><img src="productos/zapa-der.jpg" alt="" class=""></a>
                    </li>
                    <li><a href="#"><img src="productos/zapa-suela.jpg" alt="" class=""></a>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="opciones">
              <h2 class="nombre-producto">Zapatilla Hi-Tec Tortola Escape</h2>
              <p class="precio">
                <span class="precio-anterior">$ 2500.00</span>
                <span class="precio-descuento">$ 1750.00</span>
              </p>
              <div class="descripcion-corta">
                <p>Sandalia multideporte desarrollada para brindar frescura y comodidad en la temporada estival.
                </p>
              </div>
              <form class="add-cart-form" action="" method="post">
                <fieldset>
                  <label for="color">Color</label>
                  <select id="color" class="" name="color">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="gris">gris</option>
                    <option value="marron">marron</option>
                </select>
                </fieldset>
                <fieldset>
                  <label for="talle">Talle</label>
                  <select id="talle" class="" name="talle">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                  </select>
                </fieldset>
                <fieldset>
                  <label for="cantidad">Cantidad</label>
                  <select id="cantidad" class="" name="cantidad">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </fieldset>

                <button type="submit" name="agregar-carrito" value="" class="btn btn-primary">Agregar al Carrito</button>
              </form>

            </div>
            <div class="descripcion-larga">
              <h3>Detalle</h3>
              <p>Un concepto híbrido que aúna elementos técnicos del calzado outdoor y el diseño funcional de las sandalias para adaptarse perfectamente a escenarios en la naturaleza o la ciudad. Los agujeros de ventilación y drenaje en el corte, así como los materiales empleados en su fabricación mantienen el pie muy ventilado, favoreciendo la transpiración. </p>
              <p>El confort también está garantizado por la suavidad que aporta el forro interior de neopreno que evita roces y ampollas. Además, esta sandalia es fácil de calzar y de ajustar al pie por su sistema de lazado simple. Su lengüeta acolchada y los refuerzos de caucho en puntera y talón protegen de lesiones que pueden dificultar nuestra marcha. La plantilla extraíble aporta comodidad al andar y la suela de caucho carbono permite el uso regular de este modelo por terrenos de fácil recorrido. Corte de nobuck sintético</p>
              <ul>
                <li>Forro de neopreno</li>
                <li>Sistema de lazado con cordón elástico</li>
                <li>Lengüeta acolchada forrada para protección del empeine</li>
                <li>Tirador trasero para fácil calce</li>
                <li>Refuerzos de caucho en puntera y talón</li>
                <li>Plantilla recambiable</li>
                <li>Cambrillón termoplástico</li>
                <li>Planta de montado de nylon</li>
                <li>Piso de caucho carbono de doble densidad</li>
              </ul>
            </div>

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
