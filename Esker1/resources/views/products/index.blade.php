@extends('layouts.app')

@section('content')
  <div class="big-padding text-center text-white">
    <h1>Productos</h1>
  </div>
  <div class="container">
    <table class="table table-bordered">
      <thead class="bg-primary">
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
      <tbody class="bg-success">
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
  <div class="floating">
    <a href="{{url('/products/create')}}" class="btn btn-prymary btn-fab">
      <i class="fas fa-plus"></i>
    </a>
  </div>
@endsection
