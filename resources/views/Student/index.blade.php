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
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h2>Student</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-student" class="btn btn-success btn-sm" title="Add New Student">Add New Student</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>NIM</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Religion</th>
                                        <th>Email</th>
                                        <th>No Phone</th>
                                        <th>Address</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                <tr>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->nim }}</td>
                                        <td>{{ $student->age }}</td>
                                        <td>{{ $student->gender }}</td>
                                        <td>{{ $student->religion }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->no_phone}}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>
                                            <a href="/student/{{ $student->id }}" title="Edit Student"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/student/delete/{{ $student->id }}" title="Delete Student"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
</body>
</html>