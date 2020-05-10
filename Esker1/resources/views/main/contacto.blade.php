@extends('layouts.app')
@section('tilte','Contacto')
@section('content')
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
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>

    </div>
  </div>
@endsection
