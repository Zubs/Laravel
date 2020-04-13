@extends('new.layouts.main')
@section('content')

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{$post->title}}</h2>
            <img src="/storage/cover_images/{{$post->cover_image}}" alt="" class="img-fluid" width="100%">
            <div>
              {!!$post->body!!}
            </div>
            <div class="tag-widget post-tag-container mb-5 mt-5">
            </div>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="desc align-self-md-center">
                <h3>{{$post->user->name}}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>


            <div class="pt-5 mt-5">
              @if(count($comments) > 0)
                <h3 class="mb-5">{{count($comments)}} Comments</h3>
                <ul class="comment-list">
                  @foreach($comments as $comment)
                    <li class="comment">
                      <div class="comment-body">
                        <h3>{{$comment->author}}</h3>
                        <div class="meta">{{$comment->created_at}}</div>
                        <p>{{$comment->body}}</p>
                      </div>
                    </li>
                  @endforeach
                  </ul>
              @else
                <h3 class="mb-5">No Comments Found</h3>
              @endif
              <!-- END comment-list -->

                <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">Leave a comment</h3>
                  <form action="/comments" class="p-5 bg-light" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="body" id="message" cols="30" rows="10" class="form-control" name="message"></textarea>
                    </div>
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <div class="form-group">
                      <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                    </div>
                  </form>
                </div>
              </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              @if(count($otherPosts) > 0)
                @foreach($otherPosts as $others)
                  <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url('/storage/cover_images/{{$others->cover_image}}');"></a>
                    <div class="text">
                      <h3 class="heading"><a href="/posts/{{$others->id}}">{{$others->title}}</a></h3>
                      <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> {{$others->created_at}}</a></div>
                        <div><a href="#"><span class="icon-person"></span> {{$others->user->name}}</a></div>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif
            </div>

          </div>

        </div>
      </div>
    </section> <!-- .section -->
		
@endsection