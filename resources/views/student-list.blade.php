<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class='text-center my-5'>Studint List</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="text-end pe-5"><a href="{{url('add-student')}}" class="text-light text-decoration-none btn btn-primary">Add</a></div>
                <table class='table'> 
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($data as $stu)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$stu->name}}</td>
                                <td>{{$stu->email}}</td>
                                <td>{{$stu->phone}}</td>
                                <td>{{$stu->address}}</td>
                                <td>
                                    <a href="{{url('edit-student/'.$stu->id)}}" class="text-light text-decoration-none btn btn-info btn-sm">Edit</a>
                                    <a href="{{url('delete-student/'.$stu->id)}}" class="text-light text-decoration-none btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>