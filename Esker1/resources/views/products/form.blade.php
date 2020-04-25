
{!!Form::open(['url' => $url, 'method' => $method, 'files'=> True])!!}

  <div class="form-group">
    {{ Form::text('title',"$product->title", ['class'=>'form-control', 'placeholder'=>'Título...'])}}
  </div>
  <div class="form-group">
    {{ Form::number('pricing',"$product->pricing", ['class'=>'form-control', 'placeholder'=>'Precio...'])}}
  </div>
  <div class="form-group">
    {{ Form::text('short_description',"$product->short_description", ['class'=>'form-control', 'placeholder'=>'resumen...'])}}
  </div>
  <div class="form-group">
    {{ Form::textarea('long_description',"$product->long_description", ['class'=>'form-control', 'placeholder'=>'descripcion...'])}}
  </div>
  <div class="form-group">
    Categoria:
    {{ Form::select('category_id', $categories, NULL, ['class' => 'category_id', 'id' =>'category_id', 'placeholder' => (isset($product->title)) ? $product->category() : " " ]) }}
  </div>
  <div class="form-group inline-block">
    {{ Form::file('imagen1')}}
  </div>
  <div class="form-group inline-block">
    {{ Form::file('imagen2')}}
  </div>
  <div class="form-group inline-block">
    {{ Form::file('imagen3')}}
  </div>
  <div class="form-group">
    <a href="{{url('/products')}}">Regresar al listado de productos</a>
    <input type="submit" value="Enviar" class="btn btn-success">
  </div>
{!!Form::close()!!}
