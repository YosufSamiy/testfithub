

@section('title','Admin')


@extends('dashboard.parent')



@section("contact")
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <table class="table table-borderds" style="border-collapse: collapse;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">name</th>
                  <th scope="col">info</th>
                  <th scope="col">status</th>

                  <th scope="col">Created</th>
                  <th scope="col">Updated</th>
                  <th scope="col">action</th>

                
                </tr>
              </thead>
              <tbody>
                @foreach ($catogr as $cato )
                <tr>
                  <th scope="row">
{{$cato->id}}
                    

                  </th>
                  <td>{{$cato->name}}</td>
                  <td>{{$cato->info}}</td>
                  <td><a href="{{route('changeStatus',$cato->id)}}" class="{{$cato->button}}">{{$cato->Status}}
                  </td>
                  {{-- <td type="button" class="@if ($cato->active==1)

                    btn btn-success     
                    
                    @else
                    btn btn-danger     

                  @endif">
                  @if ($cato->active==1)
                    activat
            
                    @else
                    DisActivat
                  @endif</td> --}}

                 <td>{{$cato->created_at}}</td>
                   <td>{{$cato->updated_at}}</td>
                   <td>
                     <form>
                      @csrf

                    <div class="btn-group">
                      
                                                  

                              <a type="button"  href="{{route('admin.edit',$cato->id)}}"class="btn btn-info">
                                                      <i class="fas fa-edit"></i>

                      </a>



                      <a class="btn btn-danger"  onclick="confaiermDestroy({{$cato->id}}) "this>  <i class="fas fa-trash"></i>
                      </a>

                       
                                      {{-- <a type="button"  href="{{route('admin.delete',$cato->id)}}"class="btn btn-danger">
                        <i class="fas fa-trash"></i> --}}


                      {{-- <a href="" class="btn btn-danger" onclick="confaiermDestroy()">
                        <i class="fas fa-trash"></i>
                      </a> --}}
    
                     
{{-- <form method="POST" action="{{route('admin.destory',$cato->id)}}">
  @csrf 
  @method()
                     <button type="submit" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                      </button> 
                     
</form>
                    </div>
                     </form> --}}
                  </td>


                   {{-- <td><div class="btn-group">
                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </div></td> --}}

</tr>
               

                @endforeach

              </tbody>
            </table>
        
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

function confaiermDestroy(id, reference) {
  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    destroy(id,reference)
    // Swal.fire(
    //   'Deleted!',
    //   'Your file has been deleted.',
    //   'success'
    


  }

})

}
function destroy(id,reference){
  axios.delete('/dashboard/admin/'+id)
  .then(function (response) {
    console.log(response);

    showMassege(response.data);
    reference.cloeset('tr').remove();
    // handle success
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed
  });
}
 
function showMassege(){

Swal.fire({
  icon: 'success',
  title: 'the deletd work has been succssefuly',
  showConfirmButton: false,
  timer: 1500
})
}
  </script>

