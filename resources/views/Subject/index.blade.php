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
                    <h2>Subject</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-subject" class="btn btn-success btn-sm" title="Add New Subject">Add New Subject</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name Subject</th>
                                        <th>Code Subject</th>
                                        <th>SKS</th>
                                        <th>Deskription</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($subjects as $subject)
                                <tr>
                                        <td>{{ $subject->name_subject }}</td>
                                        <td>{{ $subject->code_subject }}</td>
                                        <td>{{ $subject->sks}}</td>
                                        <td>{{ $subject->description }}</td>
                                        <td>
                                            <a href="/subject/{{ $subject->id }}" title="Edit Subject"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/subject/delete/{{ $subject->id }}" title="Delete Subject"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $subjects ->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>