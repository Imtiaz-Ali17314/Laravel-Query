<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New User</h1>
                <form action="{{route('add.user')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <lable class="form-labe">Name</lable>
                        <input type="text" value="{{old('username')}}" name="username" class="form-control , @error('username') is-invalid @enderror">
                        <span class="text-danger">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <lable class="form-labe">Age</lable>
                        <input type="text" value="{{old('userage')}}" name="userage" class="form-control , @error('userage') is-invalid @enderror">
                        <span class="text-danger">
                            @error('userage')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <lable class="form-labe">Email</lable>
                        <input type="text" value="{{old('useremail')}}" name="useremail" class="form-control ,  @error('useremail') is-invalid @enderror">
                             <span class="text-danger">
                            @error('useremail')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <lable class="form-labe">City</lable>
                        <input type="text" value="{{old('usercity')}}" name="usercity" class="form-control ,  @error('usercity') is-invalid @enderror">
                             <span class="text-danger">
                            @error('usercity')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>