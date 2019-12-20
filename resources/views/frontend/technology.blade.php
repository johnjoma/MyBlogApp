 
@extends('frontlayout.master')
@section('content')

  
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Blog Posts
          <small>Amazing stuff</small>
        </h1>

        <!-- Blog Post -->
        @if(count($posts)>0)
        @foreach ($posts as $post)
        
            
       
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
          <h2 class="card-title">{{$post->title}}  </h2>
            <p class="card-text">{!!str_limit($post->body,250,'....')!!}</p><br>
            <a href='/posts/{{$post->slug}}' class="btn btn-primary">Read More &rarr;</a>
            
            
          </div>
          <div class="card-footer text-muted">
            Posted on: <strong> {{date('F D, Y',strtotime($post->created_at))}}</strong> 
              By: <small>{{($post->user->name)}}</small>
              @if(!Auth::guest())
              @if(Auth::user()->id == $post->user_id)
            <hr>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="float:right">Edit</a>
            @endif
            @endif

          </div>
        </div>
        
        @endforeach
        {{$posts->links()}}
        @else
        <p>No post found</p>
        @endif

        <!-- Blog Post 
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Blog Post 
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>-->

        <!-- Pagination 
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>-->

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

         
      
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="/fashion">Fashion</a>
                  </li>
                  <li>
                    <a href="/travel">Travel</a>
                  </li>
                  <li>
                    <a href="/technology">Technology</a>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Top stories</h5>
          <div class="card-body">
              @if(count($posts)>0)
              @foreach($posts as $post)
              @if($post->type == "T")
            <div class="col-lg-18">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href='/posts/{{$post->slug}}'>{{$post->title}}</a>
                </li>
                
              </ul>
            </div>
            @endif
            @endforeach
            @else
            <p>No top stories</p>
            @endif
          </div>
        </div>

        <!-- Side Widget 
        <div class="card my-4">
          <h5 class="card-header">Top post</h5>
          <div class="card-body">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">Web Design</a>
                </li>
                <li>
                  <a href="#">HTML</a>
                </li>
                <li>
                  <a href="#">Freebies</a>
                </li>
              </ul>
            </div>
          </div>
        </div>-->


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
 

  