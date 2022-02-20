<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include('admin.navbar')
    <div style="position:relative;top:60px;right:-60px">
    <a href="{{url('/testresa')}}"><button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  Updateresa
</button></a>
<table class="table table-striped table-dark" >
            <tr>
                <th scope="col">Id</th>
                <th scope="col">etudiant</th>
                <th scope="col">Copie</th>
                <th scope="col">state</th>
                <th scope="col">Actions</th>
            </tr>
@foreach($data as $data)
<tr>
<td>{{$data->id}}</td>
                <td>{{$data->etudiant->nom}} {{$data->etudiant->prenom}}</td>
                <td>{{$data->copie->id}}</td>
                <td>{{$data->state}}</td>
                <td><a href="{{url('/validateresa',$data->id)}}">Validate</a> <a href="{{url('/terminateresa',$data->id)}}">Terminate</a></td>
                </tr>
        @endforeach
        </div>
</div>
</div>
</div>





    @include("admin.adminscript")
  </body>
</html>
