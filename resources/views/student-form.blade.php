<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add new students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h1>Add New Student</h1>
               
                @If(session()->has('success'))
                    <div class="container container--narrow">
                    <div class="alert alert-success text-center">
                    {{session('success')}}
                    </div>
                    </div>
                 @endif

                 
                @If(session()->has('danger'))
                <div class="container container--narrow">
                <div class="alert alert-danger text-center">
                {{session('danger')}}
                </div>
                </div>
                @endif
                <form  method="POST" action="add-new-student">
                   @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name"  value="{{old('name')}}" placeholder="Enter name" class="form-control"  >
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                           {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" placeholder="Enter email" class="form-control" >
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" name="phone" placeholder="Enter phone" class="form-control" >
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Address</label>
                        <input type="text" name="address" placeholder="Enter Address" class="form-control" >
                        @error('address')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Save</button>
                    <a href="/student-lists" class="btn btn-danger mt-3">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>