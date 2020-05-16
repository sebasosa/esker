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
      <div class="container">
        <a href="{{url('/products/create')}}" class="btn agregar-item" title="Agregar Categorias" >
          <i class="fas fa-plus"></i>
        </a>
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>Imagen</td>
              <td>Título</td>
              <td>Descripción corta</td>
              <td>Descripción larga</td>
              <td>Precio</td>
              <td>Categoria</td>
              <td>Acciones</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr>
                <td>
                  @if ($product->imagen())
                    <img src="{{asset('uploads/'.$product->imagenes()->first()->name.".".$product->imagenes()->first()->ext)}}" class="mini">
                  @else
                    <img src="{{asset('img/productos/cuello.jpg')}}" class="mini">
                  @endif
                </td>
                <td>{{$product->title}}</td>
                <td>{{$product->short_description}}</td>
                <td>{{$product->long_description}}</td>
                <td>{{$product->pricing}}</td>
                <td>{{$product->category('title')}}</td>
                <td>
                  <a href="{{url('/products/'.$product->id.'/edit')}}"><i class="far fa-edit text-white"></i></a>
                  @include('products.delete', ['product' => $product->id])

                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </main>

@endsection
