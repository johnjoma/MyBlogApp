
@extends('frontlayout.master')
@section('content')

  
 <!-- Page Content -->
 <div class="container">

  <!-- Heading Row -->
  <div class="row align-items-center my-5">
    <div class="col-lg-7">
      <img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt="">
    </div>
    <!-- /.col-lg-8 -->
    <div class="col-lg-5">
      <h1 class="font-weight-light">Business Name or Tagline</h1>
      <p>This is a template that is great for small businesses. It doesn't have too much fancy 
        flare to it, but it makes a great use of the standard Bootstrap core components.
         Feel free to use this template for any project you want!</p>
      <a class="btn btn-primary" href="/posts">Learn more</a>
    </div>
    <!-- /.col-md-4 -->
  </div>
  <!-- /.row -->

  <!-- Call to Action Well 
  <div class="card text-white bg-secondary my-5 py-4 text-center">
    <div class="card-body">
      <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
    </div>
  </div>-->

  <!-- Content Row -->
  <div class="row">
    @if(count($posts)>0)
    @foreach($posts as $post)
    @if($post->type == "F")
    <div class="col-md-4 mb-5">
      <div class="card h-100">
        <div class="card-body">
        <h2 class="card-title">{{$post->title}} </h2>
        <p class="card-text">{!!str_limit($post->body,200,'....')!!}</p>
        </div>
        <div class="card-footer">
          <a href='/posts/{{$post->id}}' class="btn btn-primary btn-sm">More Info</a>
        </div>
      </div>
    </div>
    @endif
    @endforeach
    @else
    <p>No featured post</p>
    @endif

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
@endsection
 

  