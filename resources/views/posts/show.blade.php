@extends('layouts.app')

@section('content')
    <a href = '/posts' class = 'btn btn-default'>Go Back</a>
    <h1>{{$pos->title}}</h1>
    
    <div>
        {!!$pos->body!!}
    </div>
    <small>Written on {{$pos->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        <a href = '/posts/{{$pos->id}}/edit' class = 'btn btn-primary'>Edit Post</a>
    
        {!! Form::open(['action' => ['PostsController@destroy', $pos->id], 'method' => 'delete', 'class' => 'btn btn pull-right']) !!}

            {!! Form::submit('Delete', ['class'=> 'btn btn-danger']) !!}

        {!! Form::close() !!}
    @endif
        
@endsection