@extends('layouts.app')

@section('content')
	@if($post)
		<div class="container jumbotron">
			<a href="/posts" class="btn btn-primary">Back</a><br><br>
			<h1>{{$post->title}}</h1>
			<img style="width: 100%; height: 400px;" src="/storage/cover_images/{{$post->cover_image}}">
			<p>{!!$post->body!!}</p><hr>
			<small>Created on {{$post->created_at}} by {{$post->user->name}}</small><hr>
			@if(!Auth::guest())
				@if(Auth::user()->id == $post->user_id)
					<a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit Post</a>
					{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
						{{Form::hidden('_method', 'DELETE')}}
						{{Form::submit('Delete', ['class' => 'btn btn-danger',])}}
					{!!Form::close()!!}
				@endif
			@endif
		</div>
	@else
		<p>No post found</p>
	@endif
@endsection