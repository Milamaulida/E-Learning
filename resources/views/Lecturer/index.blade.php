<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CRUD Code Circle</title>
</head>
<body>
<div class="container">
        <div class="row" style="margin:px;">
            <div class="col-300">
                <div class="card">
                    <div class="card-header">
                    <h2>Lecturer</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-lecturer" class="btn btn-success btn-sm" title="Add New Lecturer">Add New Lecturer</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>NIDN</th>
                                        <th>Age</th>
                                        <th>Role</th>
                                        <th>Gender</th>
                                        <th>Religion</th>
                                        <th>Email</th>
                                        <th>No Phone</th>
                                        <th>Address</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($lecturers as $lecturer)
                                    <tr>
                                        <td>{{ $lecturer->name }}</td>
                                        <td>{{ $lecturer->nidn }}</td>
                                        <td>{{ $lecturer->age }}</td>
                                        <td>{{ $lecturer->role }}</td>
                                        <td>{{ $lecturer->gender }}</td>
                                        <td>{{ $lecturer->religion }}</td>
                                        <td>{{ $lecturer->email }}</td>
                                        <td>{{ $lecturer->no_phone }}</td>
                                        <td>{{ $lecturer->address }}</td>
                                        <td>
                                            <a href="/lecturer/{{ $lecturer->id }}" title="Edit Lecturer"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/lecturer/delete/{{ $lecturer->id }}" title="Delete Lecturer"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $lecturers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>