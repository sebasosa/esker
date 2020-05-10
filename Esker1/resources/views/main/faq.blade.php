@extends('layouts.app')
@section('title','Preguntas Frecuentes')
@section('content')
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
@include('layouts.formasPago')
@endsection
