@extends('layouts.app')

@section('content')
  <div class="big-padding text-center text-white">
    <h1>Tu Carrito de compras</h1>
  </div>
  <div class="container">
    <table class="table table-bordered">
      <thead class="bg-primary">
        <tr>
          <td>Producto</td>
          <td>Precio</td>

        </tr>
      </thead>
      <tbody class="bg-success">
        @foreach ($products as $product)
          <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->pricing}}</td>
          </tr>
        @endforeach
        <tr>
          <td>Total</td>
          <td>{{$total}}</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
