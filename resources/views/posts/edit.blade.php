@extends('postslayout.postmaster')

@section('content1')
<!-- Topbar Search -->
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <p><strong>Edit Post</strong></p>
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
           
            
            {!! Form::open(['action'=>['PostsController@update', $post->id],'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
              {{Form::label('category','Category')}}
              {{Form::select('category',['Null'=>'Pick category...','FD' => 'Food','FS' => 'Fashion', 'TR' => 'Travel','TECH'=>'Technology'],null,['class'=>'form-control'])}}
          </div>
            <div class="form-group">
                {{Form::label('type','Type')}}
                {{Form::select('type',['','P' => 'Post','TP'=>'Top Post','F' => 'Featured', 'T' => 'Top Stories'],null,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('body','Body')}}
                {!!Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])!!}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Update Post',['class'=>'btn btn-primary'])}}
           
            
            {!! Form::close() !!}
                  
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
