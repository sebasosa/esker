{!!Form::open(['url' => '/categories/'.$category, 'method' => 'DELETE', 'class' => 'inline-block'])!!}
    <button type="submit" class="btn text-danger"><i class="fas fa-trash"></i></button>
{!!Form::close()!!}