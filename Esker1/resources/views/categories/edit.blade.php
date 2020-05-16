@extends('layouts.app')

@section('content')
  <div class="container white text-center">
    <h1>Editar Producto</h1>
    <!-- Formulario -->
    @include('categories.form', ['category'=> $category, 'url' => '/categories/'.$category->id, 'method' => 'PATCH'])
  </div>
@endsection
