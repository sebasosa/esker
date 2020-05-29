@extends('layouts.app')

@section('title', 'Home')

@section('style-home')
  @media (min-width: 991.98px) {
  .forma_de_pagar {
    margin-top: -315px!important;
    padding: 200px 0px!important;
    -webkit-clip-path: polygon(0 35%, 100% 0, 100% 65%, 0% 100%);
    clip-path: polygon(0 35%, 100% 0, 100% 65%, 0% 100%);
  }
  .empresa {
    padding-bottom: 345px!important;
  }
  .marcas_acompanan {
      padding-top: 220px;
      margin-top: -315px!important;
  }
  .agregarCarrito{
  -webkit-box-shadow: 5px 5px 15px 0px rgba(0, 0, 0, 0.4);
  -moz-box-shadow: 5px 5px 15px 0px rgba(0, 0, 0, 0.4);
  box-shadow: 5px 5px 15px 0px rgba(0, 0, 0, 0.4);
  }
}
@endsection


@section('content')
  <!-- INICIO GALERIA -->
  <div class="content text-center">

         <div class="your-class">
           @foreach ($products as $prod)
             <div class="container">
               <div class="row">
                 <div class="col-md-6 vac"><a href="{{url('/products/'.$prod->id)}}">
                   @if ($prod->imagen())
                     <img src="{{asset('uploads/'.$prod->imagenes()->first()->url)}}" class="img-fluid" >
                   @else
                     <img src="{{asset('img/productos/cuello.jpg')}}" class="img-fluid" alt="Cuello Multipropósito Buff">
                   @endif
                 </a></div>
                 <div class="col-md-6 ">
                   <div class="info-wrapper">
                     <h3>{{$prod->short_description}}</h2>
                     <h1><a href="{{url('/products/'.$prod->id)}}">{{$prod->title}}</a></h1>
                     <span>${{$prod->pricing}}</span>
                     @include('products_shoppingcarts.form', ['product' => $prod])

                   </div>
                 </div>
               </div>
             </div>
           @endforeach
         </div>
  </div>


  <!-- FIN DE GALERIA -->
<!--SECCION EMPRESA-->
@include('layouts.empresa')
<!-- FIN DE EMPRESA -->

<!--  FORMAS DE PAGO  -->
@include('layouts.formasPago')

<!-- MARCAS -->
@include('layouts.marcas')
<!-- FIN DE MARCAS -->
@endsection
