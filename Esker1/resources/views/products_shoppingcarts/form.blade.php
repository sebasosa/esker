{!!Form::open(['url' => '/products_shoppingcarts', 'method' => 'POST', 'class' =>'cart-add'])!!}
  <input type="hidden" name="product_id" value="{{$product->id}}">
  <input class="agregarCarrito btn btn-primary" type="submit" value="Agregar al Carrito" class="btn btn-primary">
{!!Form::close()!!}
