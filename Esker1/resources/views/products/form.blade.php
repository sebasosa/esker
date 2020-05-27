
{!!Form::open(['url' => $url, 'method' => $method, 'files'=> True])!!}

  <div class="form-group">
    {{ Form::text('title',"$product->title", ['class'=>'form-control', 'placeholder'=>'Título...'])}}
  </div>
  <div class="form-group">
    {{ Form::number('pricing',"$product->pricing", ['class'=>'form-control', 'placeholder'=>'Precio...'])}}
  </div>
  <div class="form-group">
    {{ Form::text('short_description',"$product->short_description", ['class'=>'form-control', 'placeholder'=>'Resumen...'])}}
  </div>
  <div class="form-group">
    {{ Form::textarea('long_description',"$product->long_description", ['class'=>'form-control', 'placeholder'=>'Descripcion...'])}}
  </div>
  <div class="form-group">
    <label class="admin-form">Categoria:</label>
     {{ Form::select('category_id', $categories, (isset($product->title)) ? $product->category('id') : " ")}}
  </div>
  <div class="form-group">
    {{ Form::file('imagen1')}}
  </div>
  <div class="form-group">
    {{ Form::file('imagen2')}}
  </div>
  <div class="form-group">
    {{ Form::file('imagen3')}}
  </div>
  <div class="form-group">
    <input type="submit" value="Enviar" class="btn btn-primary enviar-admin">
  </div>
{!!Form::close()!!}
