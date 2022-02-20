<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include('admin.navbar')
    <div style="position:relative;top:60px;right:-60px">
        <table bgcolor="gray" border=3px>
            <tr>
                <th style="padding:30px">Id</th>
                <th style="padding:30px">mail</th>
                <th style="padding:30px">password</th>
                <th style="padding:30px">role</th>
                <th style="padding:30px">Action</th>

            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->id}}</td>
                <td>{{$data->mail}}</td>
                <td>{{$data->password}}</td>
                <td>{{$data->role}}</td>


                <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>

            </tr>
            @endforeach
    </div>
</div>

    @include('admin.adminscript')
</body>
</html>
