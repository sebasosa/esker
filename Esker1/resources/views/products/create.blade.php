@extends('layouts.app')
@section('title', 'Productos')
@section('content')
  <div id="faq" class="pagina">
    <div class="container">
      <h1>PRODUCTOS</h1>
    </div>
  </div>
  <main id="administrador" class="contenido">
  <div class="d-flex" id="wrapper">
    @include('admin.sidebar')
    <div id="page-content-wrapper" class="administrador">
      <button class="btn btn-primary" id="menu-toggle"><i id="iconito" class="fas fa-angle-double-right"></i></button>
      <div class="container white text-center">
        <h1>Nuevo Producto</h1>
        <!-- Formulario -->
        @include('products.form', ['products' => $product,'categories'=> $categories, 'url' => '/products', 'method' => 'POST'])
      </div>
    </div>
  </div>
  </main>
@endsection
