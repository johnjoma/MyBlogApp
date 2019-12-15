@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">
    {{$error}}
</div>
@endforeach
@endif

@if(session('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>	
    {{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
    {{session('error')}}
</div>
@endif