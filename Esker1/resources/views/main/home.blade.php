@extends('layouts.app')

@section('title', 'Home')


@section('content')
  <!-- INICIO GALERIA -->
  <div class="content text-center">

         <div class="your-class">
           @foreach ($products as $prod)
             <div class="container">
               <div class="row">
                 <div class="col-md-6"><a href="{{url('/products/'.$prod->id)}}">
                   @if ($prod->imagen())

                     <img src="{{asset('uploads/'.$prod->imagenes()->first()->url)}}" class="img-fluid" >
                   @else
                     <img src="{{asset('img/productos/cuello.jpg')}}" class="img-fluid" alt="Cuello Multipropósito Buff">
                   @endif
                 </a></div>
                 <div class="col-md-6 ">
                   <div class="info-wrapper">
                     <h3>{{$prod->short_description}}</h2>
                     <h1>{{$prod->title}}</h1>
                     <span>${{$prod->pricing}}</span><hr>

                   </div>@include('products_shoppingcarts.form', ['product' => $prod])
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
