@extends('layouts.app')
@section('title', 'Detalle Producto')
@section('content')

  <div class="container text-center">
    <div class="card product text-left">
      <h1>{{$product->title}}</h1>
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <!-- Mostramos todas las imágenes pertenecientes a a este registro -->
            @foreach($images as $img)

                <a data-fancybox="gallery" href="../../public/uploads/{{ "$img->name.$img->ext" }}">
                    <img src="../../public/uploads/{{ "$img->name.$img->ext" }}" width="200" class="img-fluid">
                </a>

            @endforeach
        </div>
        <div class="col-sm-6 col-xs-12">
          <p>
            <strong>Descripción</strong>
          </p>
          <p>
            {{$product->long_description}}
          </p>
          <p>
            @include('products_shoppingcarts.form', ['product' => $product])
          </p>
        </div>
      </div>
    </div>
  </div>


@endsection
