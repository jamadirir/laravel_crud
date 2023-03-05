<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student lists </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="margin-top:20px ">
        <div class="row">
            <div class="col-sm-12">
                <h1>Student Lists</h1>
                @If(session()->has('success'))
                    <div class="container container--narrow">
                    <div class="alert alert-danger text-center">
                    {{session('success')}}
                    </div>
                    </div>
                 @endif
                <a href="/student-form" class="btn btn-primary">Add Students</a>
                <table class="table" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($data as $std)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$std->name}}</td>
                                <td>{{$std->email}}</td>
                                <td>{{$std->phone}}</td>
                                <td>{{$std->address}}</td>
                                <td><a href="{{url('edit-student/'.$std->id)}}" class="btn btn-info">Edit</a> | <a href="{{url('delete-student/'.$std->id)}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                           @endforeach

                        </tr>

                        <script>
                            function myFunction() {
                                if(!confirm("Are You Sure to delete this"))
                                event.preventDefault();
                            }
                           </script>
                    </tbody>
                </div>
            </table>
        </div>
    </div>
    
</body>
</html>