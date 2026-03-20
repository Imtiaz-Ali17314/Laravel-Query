<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-7">
                <h1>All Students List</h1>
                <a href="/newuser" class="btn btn-success btn-sm mb-3 ">Add Student</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $id => $stu)
                        <tr>
                            <td>{{$stu->id}}</td>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->email}}</td>
                            <td>{{$stu->city_name}}</td>
                            <td><a href="" class="btn btn-primary btn-sm">view</a></td>
                            <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="" class="btn btn-warning btn-sm">Update</a></td>
                            
                        </tr>
                    @endforeach
                </table>
                <div class="mt-5">
                    {{$data -> links()}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>