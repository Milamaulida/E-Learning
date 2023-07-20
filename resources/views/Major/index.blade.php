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
                    <h2>Major</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-major" class="btn btn-success btn-sm" title="Add New Major">Add New Major</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name Major</th>
                                        <th>Head Of Program</th>
                                        <th>Code Major</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($majors as $major)
                                    <tr>
                                        <td>{{ $major->name_major }}</td>
                                        <td> {{ $major->head_of_program }}</td>
                                        <td>{{ $major->code_major }}</td>
                                        <td>
                                            <a href="/major/{{ $major->id }}" title="Edit Major"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/major/delete/{{ $major->id }}" title="Delete Major"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $majors->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
</body>
</html>