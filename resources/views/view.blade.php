@extends('layouts.app')

@section('content1')
<!-- Topbar Search -->
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <p><strong>View Post</strong></p>
  </div>
</form>

@endsection

@section('content')

     <!-- Content Row -->
     <div class="row">
    
                   
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Posts</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> 12</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Row -->

    <div class="row">

      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Blog Set up</h6>
            @include('inc.messages')
            <div class="dropdown no-arrow">
             
            </div>
            
          </div>
          <!-- Card Body -->
          <div class="card-body">
             
            @if(count($posts) >0)
            <table class="table table-striped">
               <tr>
                   <th>Id</th>
                   <th>Title</th>
                   <th>Date Posted</th>
                   <th></th>
                   <th></th>
               </tr>
              
                  @foreach($posts as $post)
                 
                  <tr>
                    <td>{{$post->id}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{date('F D, Y',strtotime($post->created_at))}}</td>
                  <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                  <td>{!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST','class'=> 'pull-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                      {!!Form::close()!!}</td>
                  </tr>

                  @endforeach  
                  
            </table>
            
            @else
        <p>You have no posts. Create posts <a href="/posts/create">here</a></p>
            @endif 
              {{$posts->links()}} 
                    
          </div>
        </div>
      </div>
    
     

    <!-- Content Row -->
    <div class="row">

      <!-- Content Column -->
      <div class="col-lg-6 mb-4">

        

       
      </div>

      <div class="col-lg-6 mb-4">

       
       

      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
    
     
    
      @endsection

    



