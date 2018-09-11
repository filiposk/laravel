@extends('layouts.app')

@section('content')

<h1>Post</h1>

 @if(count($posts)>1)
    @foreach ($posts as $post)
    <div class="well" style="background-color:#97a899">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Created on {{$post->created_at}}</small>

    </div>
        
    @endforeach

 @else
     <p>No posts found</p>
 @endif
    
@endsection