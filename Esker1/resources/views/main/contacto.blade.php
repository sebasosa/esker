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
        <form class="contact-form" action="" method="post">
          {{ csrf_field() }}
          <fieldset class="form-group">
            <input id="nombre" type="text" class="form-control" name="name" value="" placeholder="Nombre y Apellido" required>
          </fieldset>
          <fieldset class="form-group">
            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email" required>
          </fieldset>
          <fieldset class="form-group">
            <input id="tel" type="tel" class="form-control" name="phone" value="" placeholder="Telefono" required>
          </fieldset>
          <fieldset class="form-group">
            <textarea class="form-control" name="body" rows="8" cols="80" required></textarea>
          </fieldset>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>

    </div>
  </div>
@endsection
