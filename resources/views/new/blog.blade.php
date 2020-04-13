@extends('new.layouts.main')
@section('content')
    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          @if (count($posts) > 0)
            @foreach($posts as $post)
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                  <a href="/posts/{{$post->id}}" class="block-20" style="background-image: url('/storage/cover_images/{{$post->cover_image}}');">
                  </a>
                  <div class="text mt-3 d-block pl-md-5">
                    <h3 class="heading mt-3"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <div class="meta mb-3">
                      <div><a href="#">{{$post->created_at}}</a></div>
                      <div><a href="#">{{$post->user->name}}</a></div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @endif
      </div>
    </section>
@endsection