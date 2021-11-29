



<head>

  @section('title','Create Page')

   







@extends('dashboard.parent')

@section('contact')

@if (Auth::user()->status ==2)

<script>

alert("YOU DONT HAVE THE PERMISSION TO USED THIS PAGE '");

</script>
@else
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
  
 
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Create Catogres</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.store')}}" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            @if ($errors->any())
              
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-ban"></i> Valdation Errors!</h5>
              <i> @foreach ($errors->all() as $error )
                {{$error}}.<br>
                
              @endforeach</i>
            </div>
            @endif
            @if(session()->has('massege'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-exclamation-triangle"></i> success!</h5>
              {{session()->get('massege')}}
            </div>
         
            @endif

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name"placeholder="Enter name of catogres">
            </div>
            <div class="form-group">
              <label for="info">Info</label>
              <input type="text" class="form-control" id="info" name="info" placeholder="Enter all of inforamtion">
            </div>

            <div class="custom-file">
              <input type="file" class="custom-file-input" id="file " name="file">
              <label class="custom-file-label" for="image">Choose image</label>
            </div>
         
               
            
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">ADD</button>
              </div>
            </form>
          </div>
            </div>
      </div>
    </div>

</section>

            </div>
          </div>
          

@endsection


@endif
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
          <!-- /.card-body --