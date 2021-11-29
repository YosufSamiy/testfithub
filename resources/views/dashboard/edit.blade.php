

@section('title','Update')





@extends('dashboard.parent')

@section('contact')


<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">

    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Update</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        
        <form method="POST" action="{{route('admin.update',$cat->id)}}">
          @csrf
          @method('PUT')
            
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
              @if(session()->has('massegeUpdate'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Updated!</h5>
                {{session()->get('massegeUpdate')}}
              </div>
              @endif
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text"  value="@if (old('name')){{old('name')}} @else{{$cat->name}}
                
              @endif" class="form-control" id="name" name="name"placeholder="Enter name of catogres">
            </div>
            <div class="form-group">
              <label for="info">Info</label>
              <input type="text" class="form-control"  value="@if (old('info')){{old('info')}} @else{{$cat->info}}
                
              @endif"id="info" name="info" placeholder="Enter all of inforamtion">
            </div>
         
               
            
              </div>
              <div class="card-footer">
                <button type="submit"  class="btn btn-primary" >Update</button>
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

          <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
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