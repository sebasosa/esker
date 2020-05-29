@extends('layouts.app')
@section('title', 'Detalle de Producto')
@section('content')
  <!-- DETALLE PRODUCTO -->
  <div id="producto" class="pagina">
    <div class="container">
      <h1>{{$product->title}}</h1>
    </div>
  </div>

  <div class="detalle">
    <div class="container">
      <div class="detalle-producto">
        <div class="row">
          <nav aria-label="breadcrumb" class="men-cat-lg">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/productos/'.$product->category('id'))}}">{{$product->category('title')}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$product->title}}</li>
            </ol>
          </nav>
          <div class=" btn-group dropright men-cat-xs">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              CATEGORIA
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('/productos')}}">Todos</a>
              <a class="dropdown-item" href="{{url('/productos/'.$product->category('id'))}}">{{$product->category('title')}}</a>
            </div>
          </div>



        </div>
        <div class="ficha">
          <div class="fotos">
            {{-- <div class="box-descuento">
              <div class="descuento">
                <span>30% OFF</span>
              </div>
            </div> --}}
            <div class="fotos-detalle">
              <div class="viewport">

                  <img id="imag-producto" src="{{asset('uploads/'.$images[0]->url)}}" alt="">

              </div>
              <div class="thumbs">
                <ol>
                  @foreach ($images as $key)
                    <li><a id="img-selector" href="#"><img src="{{asset('/uploads/'.$key->url)}}" alt=""></a></li>
                  @endforeach
                </ol>
              </div>
            </div>
          </div>
          <div class="opciones">
            <h2 class="nombre-producto">{{$product->title}}</h2>
            <p class="precio">
              {{-- <span class="precio-anterior">$ 2500.00</span> --}}
              <span class="precio-descuento">${{$product->pricing}}</span>
            </p>
            <div class="descripcion-corta">
              <p>{{$product->short_description}}
              </p>
            </div>

            @include('products_shoppingcarts.form', ['product' => $product])
          </div>
          <div class="descripcion-larga">
            <h3>Detalle</h3>
            <p>{{$product->long_description}}</p>
          </div>

        </div>
      </div>

    </div>
  </div>
  {{-- <script>
  document.getElementById("imag-selector").addEventListener("click", function(event){
    event.preventDefault()
    });
  </script> --}}
@endsection
