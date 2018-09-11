@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-outline-success">Go back</a>

<h1>{{$posts->title}}</h1>

<div>
    {{$posts->body}}
</div>
<hr>
<small>Created on {{$posts->created_at}}</small>

 

 
    
@endsection