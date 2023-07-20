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
                    <h2>Time Table</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-timetable" class="btn btn-success btn-sm" title="Add New Time Table">Add New Time Table</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name Subject</th>
                                        <th>Code Subject</th>
                                        <th>Code Class</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($timetables as $timetable)
                                <tr>
                                        <td>{{ $timetable->name_subject }}</td>
                                        <td>{{ $timetable->code_subject }}</td>
                                        <td>{{ $timetable->code_class }}</td>
                                        <td>
                                            <a href="/timetable/{{ $timetable->id }}" title="Edit Subject"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/timetable/delete/{{ $timetable->id }}" title="Delete Subject"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $timetables->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>