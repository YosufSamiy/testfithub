

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
                  <th scope="col">Email</th>
                  <th scope="col">status</th>

                  <th scope="col">Created</th>
                  <th scope="col">Updated</th>
                  <th scope="col">action</th>

                
                </tr>
              </thead>

              @if (Auth::user()->status==0 or 2)
                
              <tbody>
                @foreach ($Users as $Use )
                <tr>
                  <th scope="row">
{{$Use->id}}
                    

                  </th>
                  <td>{{$Use->name}}</td>
                  <td>{{$Use->email}}</td>
                  <td>
                    @if ($Use->status ==0)
                    Manager
                    @elseif ($Use->status ==1)
                      Admin
                    @else
                    Editor
                  @endif</td>
                  {{-- <td><a href="{{route('changeStatus',$Use->id)}}" class="{{$Use->button}}">{{$Use->Status}} --}}
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

                 <td>{{$Use->created_at}}</td>
                   <td>{{$Use->updated_at}}</td>
                   <td>



                    @if (Auth::user()->status==0)




                    <div class="btn-group">
              

                      <form  action="{{route('usersDelete',$Use->id)}} " method="POST">
                        @csrf
                        @method('delete')


                      
                                                  
                        <input type="submit" class="btn btn-danger"  value="Delete" >                    

                   {{-- <i class="fas fa-trash">


                        </i>  --}}

                          <a type="button"  href="{{route('controllEdit',$Use->id)}}"class="btn btn-info">
                                                      <i class="fas fa-edit"></i>

                      </a>

                      </form>

                      @endif


{{--                      
<form method="POST" action="{{route('',$cato->id)}}">
  @csrf 
  @method()
                     <button type="submit" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                      </button> 
                     
</form>
                    </div>
                     </form> --}}
                  </td> 


             

</tr>
               

                @endforeach

              </tbody>
            </table>
            @endif

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

