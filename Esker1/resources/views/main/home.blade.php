@extends('layouts.app')

@section('title', 'Home')


@section('content')
  <!-- INICIO GALERIA -->
  <div class="content text-center">

         <div class="your-class">
           @foreach ($products as $prod)
             <div class="container">
               <div class="row">
                 <div class="col-md-6"><a href="">
                   @if ($prod->imagen())

                     <img src="{{asset('uploads/'.$prod->imagenes()->first()->name.".".$prod->imagenes()->first()->ext)}}" class="img-fluid" >
                   @else
                     <img src="{{asset('img/productos/cuello.jpg')}}" class="img-fluid" alt="Cuello Multipropósito Buff">
                   @endif
                 </a></div>
                 <div class="col-md-6 ">
                   <div class="info-wrapper">
                     <h3>{{$prod->short_description}}</h2>
                     <h1>{{$prod->title}}</h1>
                     <span>${{$prod->pricing}}</span><hr>

                   </div><a href="#" class="add-to-cart btn btn-success">add to cart <i class="icon-cart-1"></i></a>
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
