


<head>
  @section('title','CreateCity')

   







@extends('dashboard.parent')

@section('contact')


<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">

    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Create City</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form >
            @csrf
          <div class="card-body">
          

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter name of City">
            </div>
            <div class="form-group">
              <label for="info">Info</label>
              <input type="text" class="form-control" id="info"  placeholder="Enter all of inforamtion">
            </div>
         
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="status">
                <label class="custom-control-label" for="status">Status</label>
              </div>
            </div>
            
              </div>
              <div class="card-footer">
                <button type="button" onclick="stor()" class="btn btn-primary">stor</button>
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
<script src="{{asset('cms/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<script>

  function stor(){

    axios.post('/dashboard/admin/city',{
      name:document.getElementById('name').value,
      name:document.getElementById('info').value,
      name:document.getElementById('status').checked,
    })
  .then(function (response) {
    // handle success
    console.log(response);
    toastr.success(response.data.message);

  })
  .catch(function (error) {
    // handle error
    console.log(error);
    toastr.error(error.response.data.message);

  })
  .then(function () {
    // always executed
  });
  }
</script>
          <!-- /.card-body --
            
          