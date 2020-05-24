@extends('layouts.app')
@section('title','Catalogo')
@section('content')

  <div id="productos" class="pagina">
    <div class="container">
      <h1>PRODUCTOS</h1>
    </div>
  </div>

  <div class="detalle">
    <div class="container clearfix">
      <!-- Split dropright button -->
      <div class="btn-group dropright men-cat-xs">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CATEGORIAS
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{url('/productos')}}">Todos</a>
          @foreach ($categories as $cat)
            <a class="dropdown-item" href="{{url('productos/'.$cat->id)}}"> {{$cat->title}}</a>
          @endforeach
        </div>
      </div>
      <ul class="categorias men-cat-lg">
        <li>Categorias:</li>
        <li><a href="{{url('/productos')}}" class="active">Todos</a></li>
        @foreach ($categories as $cat)
          <li><a href="{{url('productos/'.$cat->id)}}">{{$cat->title}}</a></li>
        @endforeach
      </ul>
      <div class="btn-group dropleft float-right " >
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ver productos por
        </button>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">Menor Precio</a>
          <a class="dropdown-item" href="#">Mayor Precio</a>
          <a class="dropdown-item" href="#">Orden Alfabético</a>
        </div>
      </div>
    </div>
    <div class="grilla">
      @foreach ($products as $product)
        <div class="prod">
            <div class="image">
              @if ($product->imagen())
                <a href="{{url('/products/'.$product->id)}}"><img src="{{asset('uploads/'.$product->imagenes()->first()->name.".".$product->imagenes()->first()->ext)}}" class="prod-img"></a>
              @else
                <img src="{{asset('img/productos/cuello.jpg')}}" class="prod-img" >
              @endif
            </div>


            <div class="prod-body">
              <h5 class="prod-title"><a href="{{url('/products/'.$product->id)}}">{{$product->title}}</a></h5>

              <span class="prod-price">${{$product->pricing}}<span>
            </div>
            <div class="prod-links">
              <a href="{{url('/products/'.$product->id)}}">ver detalle</a>
              <span> | </span>
              @include('products_shoppingcarts.form', ['product' => $product])
            </div>

        </div>
      @endforeach

    </div>
  </div>

@endsection
