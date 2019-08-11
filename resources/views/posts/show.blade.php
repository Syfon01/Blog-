@extends('layouts.app');

@section('content')
   
<div class="py-3 col-md-8">
    <h1>{{$post->title}}</h1>

      <p>{!!$post->body!!}</p>
    <hr>
    <small>Written on {{$post->created_at}}</small>


<div class="mt-4">
<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary ">Edit Post</a>

{!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
<br>
<a href="/posts" class="btn btn-outline-dark mt-3">Go Back</a>
</div>

</div>
@endsection