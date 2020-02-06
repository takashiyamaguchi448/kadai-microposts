@if (Auth::user()->is_favorite($microposts->id))
    {!! Form::open(['route' => ['favorites.unfavorite', $microposts->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.favorite', $microposts->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@endif