@extends('layouts.app')
@section('title','Carrito de Compras')
@section('class', 'contenido')
@section('content')
<div class="content">
</div>
<div id="administrador" class="admin-forms">
    <div class="d-flex" id="wrapper">
        <div id="page-content-wrapper" class="administrador">
            <div class="container">
                <p class="first">Carrito de Compras</p>

                <div class="card mb-4 bg-none border-0">
                    <div class="card-content table-responsive">
                      @forelse ($products as $product)
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Imagen</td>
                                    <td>Producto</td>
                                    <td>Descripción corta</td>
                                    <td>Precio</td>
                                    <td>Acciones</td>
                                </tr>
                            </thead>
                            <tbody class="text-center">

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
                                    <td>{{$product->pricing}}</td>
                                    <td>
                                        <a href="{{url('/products_shoppingcarts/'.$product->id.'/'.$shopping_cart_id)}}" title="Quitar Producto" class="btn btn-sm btn-outline-danger"> Quitar Producto</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="cart-totals-wrapper">
                            <div class="cart-totals">
                                <table id="shopping-cart-totals-table table-borderless">
                                    <tfoot>
                                        <tr>
                                            <td class="a-right" colspan="1"><strong>Total</strong></td>
                                            <td class="a-right"><strong><span class="price">${{$total}}</span></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>
                    <ul class="checkout-types bottom">
                      <li>@include('main.form')</li>
                      <li><a class="btn btn-sm btn-dark seguir-comprando fl" href="{{url('/productos')}}">Seguir Comprando</a></li>
                      @empty
                        <p class="titulo-admin">Tu Carrito de Compras esta vacío.</p>

                        <ul class="checkout-types bottom">
                          <li><a class="btn btn-dark seguir-comprando fl" href="{{url('/productos')}}">Seguir Comprando</a>
                          </li>

                      @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
