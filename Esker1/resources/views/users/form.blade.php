
{!!Form::open(['url' => $url, 'method' => $method])!!}

  <div class="form-group">
    {{ Form::text('name',"$user->name", ['class'=>'form-control', 'placeholder'=>'Nombre...'])}}
  </div>
  <div class="form-group">
    {{ Form::text('email',"$user->email", ['class'=>'form-control', 'placeholder'=>'Email...'])}}
  </div>
  @if ($url === '/users')
    <div class="form-group">
      {{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password...'])}}
    </div>
    <div class="form-group">
      {{ Form::text('role',"$user->role", ['class'=>'form-control', 'placeholder'=>'Rol...'])}}
    </div>
  @endif
  <div class="form-group">
    <input type="submit" value="Enviar" class="btn btn-primary enviar-admin">
  </div>
{!!Form::close()!!}
