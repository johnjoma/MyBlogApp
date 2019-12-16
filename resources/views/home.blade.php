@extends('layouts.app')

@section('content1')
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

      <p><strong>Your are logged in!</strong></p>
    
  </div>
</form>
@endsection

@section('content')



              <!-- Content Row -->
              <div class="row">
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
    
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="/posts/create"> Create Posts</a></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ******************* View Post******************* -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="view"> View Posts</a></div>
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
                      <h6 class="m-0 font-weight-bold text-primary">Your blog posts</h6>
                      @include('inc.messages')
                      <div class="dropdown no-arrow">
                       
                      </div>
                      
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                       
                      
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
    
    



