@extends('layouts.app')

@section('content')
  <div class="container white text-center">
    <h1>Nueva Categoria</h1>
    <!-- Formulario -->
    @include('categories.form', ['category'=> $category, 'url' => '/categories', 'method' => 'POST'])
  </div>
@endsection
