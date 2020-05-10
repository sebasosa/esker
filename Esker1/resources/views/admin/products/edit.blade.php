@extends('layouts.app')
@section('title', 'Editar Producto')
@section('content')
  <div class="container white text-center">
    <h1>Editar Producto</h1>
    <!-- Formulario -->
    @include('products.form', ['products' => $product,'categories'=> $categories, 'url' => '/products/'.$product->id, 'method' => 'PATCH'])
  </div>
@endsection
