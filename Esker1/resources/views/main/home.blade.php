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
<div class="empresa">
  <div class="container">
    <div class="row">
      <h2 class="titulo">Empresa</h2>
      <p class="subtitulo">ESKER OUTDOOR® es una marca creada por DIFRAL SRL, inspirada en las propias pasiones de sus fundadores.</p>
      <div class="imagen-texto">
        <img src={{asset("img/productos/esker.jpg")}} alt="Integrantes de la Empresa">
        <p>Creemos que tu espíritu aventurero debe estar acompañado por la tranquilidad de contar con elementos de excelente calidad por eso en nuestra tienda encontrarás indumentaria y accesorios de primera línea para realizar tus actividades al
          aire libre.
        </p>
        <p>ESKER OUTDOOR® además diseña y desarrolla sus propios productos, a la medida de tus necesidades.</p>
        <p>Nuestra experiencia como montañistas le otorga a nuestros asesoramientos no sólo abarcar los aspectos técnicos sino sumarle las anécdotas vividas.</p>

      </div>
      <div class="iconos">
        <img src={{asset("img/iconos/icono-1.png")}} alt="">
        <img src={{asset("img/iconos/icono-2.png")}} alt="">
        <img src={{asset("img/iconos/icono-3.png")}} alt="">
        <img src={{asset("img/iconos/icono-4.png")}} alt="">
        <img src={{asset("img/iconos/icono-5.png")}} alt="">
        <img src={{asset("img/iconos/icono-6.png")}} alt="">
        <img src={{asset("img/iconos/icono-7.png")}} alt="">
      </div>
    </div>
    <p class="frase-pasion">ESKER OUTDOOR® representa la pasión de sus fundadores por eso no nos cansamos de repetirlo:</p>
    <p class="frase-motivadora">La vida comienza allá afuera!</p>
  </div>
</div>
</div>
<!-- FIN DE EMPRESA -->

<!--  FORMAS DE PAGO  -->
<div class="forma_de_pagar">
  <div class="formas">
    <div class="primero">
      <img src={{asset("img/iconos/beneficio-1.png")}} alt="">
      <h2 class="letras">ENVÍO</br>GRATIS</h2>
      <h3 class="">A partir de los $699,00</h3>
    </div>
    <div class="segundo">
      <img class="fototercero" src={{asset("img/iconos/beneficio-2.png")}} alt="">
      <h2 class="letras">SATISFACCIÓN GARANTIZADA</h2>
      <h3 class="">30 días para la devolucion sin cargo</h3>
    </div>
    <div class="tercero">
      <img src={{asset("img/iconos/beneficio-3.png")}} alt="">
      <h2 class="letras">COMPRA</br>SEGURA</h2>
      <h3 class="">Tienda Online verificada</h3>
    </div>
  </div>
</div>

<!-- MARCAS -->
<div class="marcas_acompanan">
  <div class="marcas">
    <h2>MARCAS QUE NOS ACOMPAÑAN</h2>
    <div class="cada_marca">
      <ul>
        <li>
          <img class="elunico" src={{asset("img/logos/logo_northland.jpg")}} alt="Northland">
        </li>
        <li>
          <img class="elunico" src={{asset("img/logos/logo_salomon.jpg")}} alt="Salomon">
        </li>
        <li>
          <img class="elunico" src={{asset("img/logos/logo_hitec.jpg")}} alt="Hitec">
        </li>
        <li>
          <img class="elunico" src={{asset("img/logos/logo_columbia.jpg")}} alt="Columbia">
        </li>
        <li>
          <img class="elunico" src={{asset("img/logos/waterdog_logo.jpg")}} alt="Waterdog">
        </li>
        <li>
          <img class="elunico" src={{asset("img/logos/logo_doite.jpg")}} alt="Doite">
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- FIN DE MARCAS -->
@endsection
