@extends('layouts.app')

@section('content')
  <div class="container white text-center">
    <h1>Nuevo Producto</h1>
    <!-- Formulario -->
    @include('products.form', ['products' => $product,'categories'=> $categories, 'url' => '/products', 'method' => 'POST'])
  </div>
@endsection
