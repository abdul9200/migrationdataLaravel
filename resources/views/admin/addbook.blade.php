<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
@include("admin.navbar")
<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Book form</h4>


                    <form class="forms-sample" method="post" action="{{url('./uploadbook')}}">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" name="id" id="id" placeholder="Id">
                      </div>
                      <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" class="form-control"  name="title" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="author">author</label>
                        <input type="text" class="form-control"  name="author" id="author" placeholder="author">
                      </div>
                      <div class="form-group">
                        <label for="edition">edition</label>
                        <input type="text" class="form-control"  name="edition" id="edition" placeholder="edition">
                      </div>
                      <div class="form-group">
                        <label for="dateEdition">Date edition</label>
                        <input type="text" class="form-control"  name="dateEdition" id="dateEdition" placeholder="edition date">
                      </div>
                      <div class="form-group">
                        <label for="ISBN">ISBN</label>
                        <input type="text" class="form-control"  name="ISBN" id="ISBN" placeholder="ISBN">
                      </div>
                      <div class="form-group">
                          <label for="category">Category</label>

                          <select class="form-control" name="category" id="category">
                          @foreach($data as $data)
                          <option value="{{$data->id}}">{{$data->description}}</option>
                          @endforeach
                          </select>
                      </div>


                      <button type="submit" class="btn btn-primary me-2">Add</button>

                    </form>
                  </div>
                </div>
              </div>
</div>

    @include("admin.adminscript")
  </body>
</html>
