
{!!Form::open(['url' => $url, 'method' => $method])!!}

  <div class="form-group">
    {{ Form::text('id',"$category->id", ['class'=>'form-control', 'placeholder'=>'Id...'])}}
  </div>
  <div class="form-group">
    {{ Form::text('title',"$category->title", ['class'=>'form-control', 'placeholder'=>'Titulo...'])}}
  </div>
  <div class="form-group">
    <input type="submit" value="Enviar" class="btn btn-primary enviar-admin">
  </div>
{!!Form::close()!!}
