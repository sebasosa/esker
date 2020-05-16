@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
  <div id="faq" class="pagina">
    <div class="container">
      <h1>CATEGORIAS</h1>
    </div>
  </div>
  <main id="administrador" class="contenido">
  <div class="d-flex" id="wrapper">
    @include('admin.sidebar')
    <div id="page-content-wrapper" class="administrador">
      <button class="btn btn-primary" id="menu-toggle"><i id="iconito" class="fas fa-angle-double-right"></i></button>
      <div class="container white text-center">
        <h1>Editar Producto</h1>
        <!-- Formulario -->
        @include('categories.form', ['category'=> $category, 'url' => '/categories/'.$category->id, 'method' => 'PATCH'])
      </div>
    </div>
  </div>
  </main>
@endsection