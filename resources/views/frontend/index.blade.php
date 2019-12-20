
@extends('frontlayout.master')
@section('content')

  
 <!-- Page Content -->
 <div class="container">

  <!-- Jumbotron Header -->
  <header class="jumbotron my-4">
    <h1 class="display-3">TheJWorld</h1>
    <p class="lead">We unearth untold stories of Fashion, Travels and Technology! </p>
    <a href="/posts" class="btn btn-primary btn-lg">Learn more</a>
  </header>
  <!--<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>-->


  <!-- Page Features 
  <div class="row text-center">

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>
   
  </div>-->

  <!---------- Just another page---->
   <!-- Page Features -->
   <div class="row text-center">
    @if(count($posts)>0)
    @foreach($posts as $post )
    @if($post->type == "F")
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="card-body">
        <h4 class="card-title">{{$post->title}}</h4>
          <p class="card-text">{!!str_limit($post->body,100,'....')!!}</p>
        </div>
        <div class="card-footer">
          <a href='/posts/{{$post->slug}}' class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>
    @endif
    @endforeach
    @endif
<!--
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div> -->
   
  </div>
  <!-- /.row -->
<hr>
@if(count($posts)>0)
@foreach ($posts as $post)
@if($post->type == "TP")
    

<div class="card mb-4">
  <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
  <div class="card-body">
  <h2 class="card-title"><u>{{$post->title}}</u>  </h2> 
  Posted on: <strong> {{date('F D, Y',strtotime($post->created_at))}}</strong> 
    <p class="card-text">{!!str_limit($post->body,1000,'....')!!}</p> <br>
    <a href='/posts/{{$post->slug}}' class="btn btn-primary">Read More &rarr;</a>
    
  </div>
  <div class="card-footer text-muted">
    
      By: <small>{{($post->user->name)}}</small>
      @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="float:right">Edit</a>
    @endif
    @endif

  </div>
</div>
@endif
@endforeach

@else
<p>No post found</p>
@endif
  <!-- Jumbro box 
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>-->

</div>
<!-- /.container -->

@endsection
 

  