<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <h2 class='text-center my-5'>Edit Studint</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form method='post' action='{{url('update-student')}}'>
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="col-md-4 offset-md-4">
                        <label class="form-label fw-bold mt-2" for="">Student Name:</label>
                        <input name="name" value="{{$data->name}}" placeholder="Enter Student Name" class="input form-control" type="text">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 offset-md-4">
                        <label class="form-label fw-bold mt-2" for="">Student Email:</label>
                        <input name="email" value="{{$data->email}}" placeholder="Enter Student Email" class="input form-control" type="text">
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 offset-md-4">
                        <label class="form-label fw-bold mt-2" for="">Student Phone:</label>
                        <input name="phone" value="{{$data->phone}}" placeholder="Enter Student Phone" class="input form-control" type="text">
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-4 offset-md-4">
                        <label class="form-label fw-bold mt-2" for="">Student Address:</label>
                       <textarea name="address"  placeholder="Enter Student Address" class="input form-control" >{{$data->address}}</textarea>
                       @error('address')
                       <div class="alert alert-danger" role="alert">
                           {{$message}}
                       </div>
                       @enderror
                    </div>
                    <br>
                    <div class="col-md-4 offset-md-4 mt-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('student-list')}}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
