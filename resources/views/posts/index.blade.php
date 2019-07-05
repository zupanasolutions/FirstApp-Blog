@extends('layouts.app')

@section('content')
    @if(count($posts)>0)
        
            @foreach($posts as $post)
                <div class="card">
                    <h4> <a href = '/posts/{{$post->id}}'> <i class="far fa-user"></i> {{$post->title}}</a></h4>
                    <small> <i class="far fa-clock"></i> 
                        {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                        {{-- {{date('h:i' ,strtotime($post->created_at))}} --}}
                    </small>
                </div>
            @endforeach
       
    @endif
@endsection