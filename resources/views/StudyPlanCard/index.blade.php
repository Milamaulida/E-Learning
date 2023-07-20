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
                    <h2>Study Plan Card</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-studyplancard" class="btn btn-success btn-sm" title="Add New Study Plan Card">Study Plan Card</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name Student</th>
                                        <th>NIM</th>
                                        <th>Name Subject</th>
                                        <th>Code Subject</th>
                                        <th>Code Class</th>
                                        <th>SKS</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($studyplancards as $studyplancard)
                                <tr>
                                        <td>{{ $studyplancard->name_student }}</td>
                                        <td>{{ $studyplancard->nim }}</td>
                                        <td>{{ $studyplancard->name_subject }}</td>
                                        <td>{{ $studyplancard->code_subject }}</td>
                                        <td>{{ $studyplancard->code_class}}</td>
                                        <td>{{ $studyplancard->sks }}</td>
                                        <td>
                                            <a href="/studyplancard/{{ $studyplancard->id }}" title="Edit Student Association"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/studyplancard/delete/{{ $studyplancard->id }}" title="Delete Student Association"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $studyplancards ->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>