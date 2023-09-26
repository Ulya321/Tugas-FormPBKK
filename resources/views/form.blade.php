<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form-pbkk</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <form action="{{ url('/')}}/register" method="post" enctype="multipart/form-data">
        @csrf
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control"  value="{{old('name')}}" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control"  value="{{old('name')}}" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
                @error('email')
                {{$message}}
            @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Department</label>
            <input type="department" name="department" id="" class="form-control" value="{{old('name')}}" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
                @error('department')
                {{$message}}
            @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Institution</label>
            <input type="institution" name="institution" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
                @error('institution')
                {{$message}}
            @enderror
            </span>

        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
                @error('image')
                {{$message}}
            @enderror
            </span>
        </div>

        <button class="btn btn-primary">
            Submit
        </button>
</form>
</body>
</html>