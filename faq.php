<?php
session_start();

require_once 'controladores/funciones.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esker Outdoors - Preguntas frecuentes</title>

        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Teko:300,400,500,600,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/bf37ca3396.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- INICIO HEADER -->
    <?php require_once 'partials/header.php' ?>
    <!-- FIN DEL HEADER -->

  <!-- PREGUNTAS FRECUENTES -->
  <div id="faq"class="pagina">
    <div class="container">
      <h1>PREGUNTAS FRECUENTES</h1>
    </div>
  </div>
  <div class="contenidofaq">
    <div class="container">
      <div class="faq">
        <ul>
          <li>
            <h2>¿CÓMO CANCELAR MI PEDIDO?</h2>
            <p>Una vez que recibiste la confirmación de tu compra, tenes un maximo de 12hs para cancelar el envio de tu pedido para esto debes escribirnos un mail a <a href="mailto:ventas@eskeroutdoors.com.ar" class="email">ventas@eskeroutdoors.com.ar</a> con el numero de tu orden</p>
          </li>
         <li>
           <h2>¿CÓMO CONOZCO EL NUMERO DE ORDEN DE MI PEDIDO?</h2>
           <p>Para conocer el ID unico que posee la orden de tu compra podes acceder a tu panel de usuario. Dentro de tu panel de administración tendras un menu de accesos directos sobre el lateral izquierdo de la pagina, una vez allí busco el item "Mis pedidos". Ahi vas a encontrar el historial de todas las ordenes que realizaste en la tienda, con todos los detalles</p>
         </li>
         <li>
           <h2>PRECIOS</h2>
           <p>Todos los precios están en pesos argentinos</p>
         </li>
         <li>
           <h2>¿CÓMO SÉ SI UN PRODUCTO SE ENCUENTRA EN STOCK?</h2>
           <p>Todos los productos visibles en la tienda virtual poseen existencias. Si ves algun modelo del producto en otras plataformas como redes sociales o emails promocionales y no podes encontrarlas en nuestra tienda virtual es porque esas prenda ya no se posee stack.</p>
         </li>
         <li>
           <h2>¿DESDE DÓNDE PUEDO COMPRAR?</h2>
           <p>Las compras pueden realizarse dentro del territorio argentino</p>
         </li>
         <li>
           <h2>¿CUAL ES EL COSTO Y EL TIEMPO DEL ENVÍO?</h2>
           <p>El tiempo de envio es de un maximo de 10 dias habiles.El costo del envio esta determinado por el proveedor logística, el valor del mismo varia dependiendo del destino y el tiempo de envío</p>
         </li>
         <li>
           <h2>¿QUE PASA SI LLEGA EL PEDIDO Y NO ESTOY?</h2>
           <p>Si elegiste el metodo de envío a domicilio y el agente del correo privado no te encuentra en tu domicilio, te deja de visita. Para conocer el estado de tu envío con tu número de guía podés ingresar en el link que te llegará por email y realizar el seguimiento de tu pedido</p>
         </li>
         <li>
           <h2>¿INCONVENIENTES CON EL ENVÍO?</h2>
           <p>En caso de tener algun tipo de enconveniente con el envío, por favor envía un email con tu consulta a ventas@eskeroutdoors.com.ar</p>
         </li>
         <li>
           <h2>*PRODUCTO</h2>
           <p>ESKER OUTDOORS garantiza todos sus productos. Cada productos se envía en su correspondiente bolso y debidamente embalada.<br/> Si el paquete que contiene tu pedido esta abierto a la hora de ser entregado, por favor no lo aceptes y escribinos a <a href="mailto:ventas@eskeroutdoors.com.ar" class="email">ventas@eskeroutdoors.com.ar</a> con el numero de tu orden para chequear la mercadería con el correo antes de entregarla. Los días feriados no se realizan envías. Los gastos de envpio aparecen claramente reflejados antes que haga su pedido.</p>
         </li>
         <li>
           <h2>*DEVOLUCIONES</h2>
           <p>Las prendas adquiridas por internet no tienen cambio excepto por falla de fábrica. En este caso ESKER OUTDOORS asume los gastos correspondientes a la reposicion de su pedido en excelente estado</p>
         </li>

        </ul>


      </div>

    </div>

  </div>
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
  <!-- FOOTER -->
  <?php require_once 'partials/footer.php' ?>
  <!-- FIN DEL FOOTER -->


  <!--  SCRIPTS  -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
