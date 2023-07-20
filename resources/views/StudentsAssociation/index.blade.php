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
                    <h2>Student Association</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-studentsassociation" class="btn btn-success btn-sm" title="Add New Student Associationt">Student Association</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name Set</th>
                                        <th>Name Head Of Set</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($studentsassociations as $studentsassociation)
                                <tr>
                                        <td>{{ $studentsassociation->name_set }}</td>
                                        <td>{{ $studentsassociation->name_head_of_set}}</td>
                                        <td>
                                            <a href="/studentsassociation/{{ $studentsassociation->id }}" title="Edit Student Association"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/studentsassociation/delete/{{ $studentsassociation->id }}" title="Delete Student Association"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $studentsassociations->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>