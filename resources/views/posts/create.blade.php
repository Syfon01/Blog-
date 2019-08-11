@extends('layouts.app')

@section('content')
  <div class="py-3 col-md-8">
    <h1>Create Post</h1>
      {{ Form::open(['action'=> 'PostsController@store', 'method' => 'POST']) }}
      <div class ="form-group pt-3">
        {{Form::label('title', 'Title')}}
        {{Form::text('title','', ['class'=>'form-control', 'placeholder'=>'Enter Title'])}}
      </div>
      <div class ="form-group">
        {{Form::label('title', 'Body')}}
        {{Form::textarea('body','', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Write Post'])}}
      </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
      
      {{ Form::close() }}

  </div>
@endsection