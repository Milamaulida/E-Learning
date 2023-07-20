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
                    <h2>Mark</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-mark" class="btn btn-success btn-sm" title="Add New Mark">Add New Mark</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name Class</th>
                                        <th>Code Class</th>
                                        <th>Name Student</th>
                                        <th>Name Subject</th>
                                        <th>Code Subject</th>
                                        <th>SKS</th>
                                        <th>Mark</th>
                                        <th>Grade</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($marks as $mark)
                                <tr>
                                    <td>{{ $mark->name_class }}</td>
                                    <td>{{ $mark->code_class }}</td>
                                    <td>{{ $mark->name_student }}</td>
                                    <td>{{ $mark->name_subject }}</td>
                                    <td>{{ $mark->code_subject }}</td>
                                    <td>{{ $mark->sks }}</td>
                                    <td>{{ $mark->mark }}</td>
                                    <td>{{ $mark->grade }}</td>
                                        <td>
                                            <a href="/mark/{{ $mark->id }}" title="Edit Mark"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/mark/delete/{{ $mark->id }}" title="Delete Mark"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $marks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
</body>
</html>