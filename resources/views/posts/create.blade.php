@extends('new.layouts.main')

@section('content')
<div class="container jumbotron">
	<h1 class="page-header">Create Post</h1>
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
		<div class="form-group">
			{{Form::label('body', 'Body')}}
			{{Form::textarea('body', '', ['id' => 'article-editor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
			{{-- @trix(\App\Post::class, 'body', [ 'hideTools' => ['file-tools'] ]) --}}
		</div>
		<div class="form-group">
			{{Form::file('cover_image')}}
		</div>
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
</div>
@endsection