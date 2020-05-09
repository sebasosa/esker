@extends('layouts.app')

@section('content')
  <!-- CARRITO -->
<div id="carrito" class="pagina">
  <div class="container">
    <h1>Carrito de Compras</h1>
  </div>
</div>
<div class="carrito">
  <div class="container-carro">
    <div class="pedido">
      <form action="#" method="post" >
        <table id="shopping-cart-table" class="cart-table data-table">
          <thead>
            <tr class="first last">
              <th class="nombre" rowspan="1"><span class="nobr">Producto</span></th>
              <th class="info-first info" rowspan="1">&nbsp;</th>
              <th class="a-center cart-price-head info" colspan="1">
                <!--<div class="cart-price-placeholder">-->
                  <span class="nobr">Precio</span>
                <!--</div>-->
              </th>
              <th rowspan="1" class="a-center info">Cantidad</th>
              <th class="a-center cart-total-head info" colspan="1">
                <!--<div class="cart-total-placeholder">-->
                  Sub-total
                <!--</div>-->
              </th>
              <th class="a-center eliminar info" rowspan="1">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr class="first odd">
                <td class="product-cart-image">
                  <a href="#" title="#" class="product-image">
                    <img src="{{asset('uploads/'.$product->imagenes()->first()->name.".".$product->imagenes()->first()->ext)}}" alt="">
                  </a>
                  <ul class="cart-links">
                    <li><a href="#" title="Edit item parameters">Modificar</a></li>
                    <li><a href="#" class="link-wishlist use-ajax">Move to wishlist</a></li>
                  </ul>
                </td>
                <td class="product-cart-info">
                  <a href="{{url('/products_shoppingcarts/'.$product->id.'/'.$shopping_cart_id)}}" title="Quitar Artículos" class="btn-remove btn-remove2"><i class="fas fa-ban text-danger"></i></a>
                  <h2 class="product-name">
                    <a href="#">{{$product->title}}</a>
                  </h2>
                  <div class="product-cart-sku">
                    <span class="label">Descripcion:</span> {{$product->short_description}}
                  </div>
                  <dl class="item-options">
                    <dt>Color</dt>
                    <dd>offwhite</dd>
                    <dt>Talle</dt>
                    <dd>M</dd>
                  </dl>
                </td>
                <td class="product-cart-price">
                  <span class="cart-price">
                    <span class="price">${{$product->pricing}}</span>
                  </span>
                </td>
        <!-- inclusive price starts here -->
                <td class="product-cart-actions qty" data-rwd-label="Cantidad">
                  <span class="restar">-</span>
                  <input type="text" pattern="\d*(\.\d+)?" name="cart[775916][qty]" value="1" size="4" data-cart-item-id="1112006713M" title="Cantidad" class="input-text qty" maxlength="12">
                  <span class="sumar">+</span>
                  <button type="submit" name="update_cart_action" data-cart-item-update="" value="update_qty" title="Actualizar" class="button btn-update"><span><span>Actualizar</span></span>
                  </button>
                </td>
                <!--Sub total starts here -->
                <td class="product-cart-total" data-rwd-label="Sub-total">
                  <span class="cart-price">
                    <span class="price">$1.850</span>
                  </span>
                </td>
                <td class="a-center product-cart-remove last">
                  <a href="{{url('/products_shoppingcarts/'.$product->id.'/'.$shopping_cart_id)}}" title="Quitar Artículos" class="btn-remove btn-remove2 text-danger"><i class="fas fa-ban"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </form>
      <div class="cart-totals-wrapper">
        <div class="cart-totals">
          <table id="shopping-cart-totals-table">
            <tfoot>
              <tr>
                <td  class="a-right" colspan="1"><strong>Total</strong></td>
                <td  class="a-right"><strong><span class="price">${{$total}}</span></strong></td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
          <ul class="checkout-types bottom">
            <li class="method-checkout-cart-methods-onepage-bottom">@include('main.form')
            </li>
            <li class="seguir-comprando"><a href="{{url('/productos')}}">Seguir Comprando</a></li>
          </ul>
    </div>
  </div>
</div>



@endsection
