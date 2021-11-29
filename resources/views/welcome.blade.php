

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<div class="container">
    <table class="table">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Code</th>
        <th scope="col">Info</th>
        <th scope="col">Mobile</th>
        <th scope="col">Acction</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($loca as $locas)
          
      <tr>
        <th scope="row">{{$locas->id}}</th>
        <td>{{$locas->name}}</td>
        <td>{{$locas->code}}</td>
        <td>{{$locas->info}}</td>
        <td>{{$locas->mobile}}</td>
        <td>
            <form action="{{route('Location.delete',$locas->id)}}" method="POST">
    @csrf
    @method('delete')
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-Danger">Delete</button>
   
      </div></form>
           

        </td>
        
        
      </tr>

      @endforeach

    </tbody>
  </table>
</div>