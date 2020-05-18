@extends('layouts.app')
@section('title', 'Usuarios')
@section('content')
  <div id="faq" class="pagina">
    <div class="container">
      <h1>USUARIOS</h1>
    </div>
  </div>
  <main id="administrador" class="contenido">
  <div class="d-flex" id="wrapper">
    @include('admin.sidebar')
    <div id="page-content-wrapper" class="administrador">
      <button class="btn btn-primary" id="menu-toggle"><i id="iconito" class="fas fa-angle-double-right"></i></button>
      <div class="container white text-center">
        <h1>Nuevo Usuario</h1>
        <!-- Formulario -->
        @include('users.form', ['user'=> $user, 'url' => '/users', 'method' => 'POST'])
      </div>
    </div>
  </div>
  </main>
@endsection
