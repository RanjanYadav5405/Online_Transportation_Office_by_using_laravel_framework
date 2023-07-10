<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register_Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <h2> <center> Register_Information</h2>
<div <center> 
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">city</th>
            <th scope="col">country</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    @foreach ($registers as $register)
    <tr>
        <th>{{$register->id}}</th>
        <th>{{$register->name}}</th>
        <th>{{$register->city}}</th>
        <th>{{$register->country}}</th>
        <th>{{$register->email}}</th>
        <th>{{$register->password}}</th>
        <td>
            <a href="{{url('index4/edit/')}}/{{$register->id}} " class="btn btn-info btn-sm">Edit</a>
            <a href="{{route('index4.delete' ,['id' => $register->id])}}" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</html>