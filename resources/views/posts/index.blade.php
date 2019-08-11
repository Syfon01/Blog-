@extends('layouts.app')

@section('content')
  <div class="py-3">
    <h1>Posts</h1>
    @if(count($posts) > 0)
      @foreach ($posts as $post)
      <div class="card card-body bg-light my-3">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Written on {{$post->created_at}}</small>
      </div>
          
      @endforeach
      <div class="pt-3">
        {{$posts->links()}}
      </div>
    @else
    <p>There is no Post Here</p>

    @endif
  </div>
@endsection