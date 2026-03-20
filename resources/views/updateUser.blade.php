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
                <h1>Update User Data</h1>
                <form action="{{route('update.user' , $Data->id ) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <lable class="form-labe">Name</lable>
                        <input type="text" name="username" value="{{$Data->name}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <lable class="form-labe">Age</lable>
                        <input type="text" name="userage" value="{{$Data->age}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <lable class="form-labe">Email</lable>
                        <input type="text" name="useremail" value="{{$Data->email}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <lable class="form-labe">City</lable>
                        <input type="text" name="usercity" value="{{$Data->city}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>