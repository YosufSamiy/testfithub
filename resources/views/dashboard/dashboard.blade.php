

@section('title','Admin')


@extends('dashboard.parent')



@section("contact")
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
          
             <h1>  Hello Mr:{{Auth::user()->name}}</h1>
             <h1>  The time Know is :{{$date}}</h1>



          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection


<script>

  </script>

