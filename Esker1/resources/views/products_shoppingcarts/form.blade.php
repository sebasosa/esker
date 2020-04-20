{!!Form::open(['url' => '/products_shoppingcarts', 'method' => 'POST', 'class' =>'inline-block'])!!}
  <input type="hidden" name="product_id" value="{{$product->id}}">
  <input type="submit" value="Agregar al Carrito" class="btn btn-info text-white">
{!!Form::close()!!}
