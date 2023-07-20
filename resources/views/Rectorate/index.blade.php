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
                    <h2>Rectorate</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-rectorate" class="btn btn-success btn-sm" title="Add New Rectorate">Add New Rectorate</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Role</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($rectorates as $rectorate)
                                <tr>
                                        <td>{{ $rectorate->name }}</td>
                                        <td>{{ $rectorate->age}}</td>
                                        <td>{{ $rectorate->role }}</td>
                                        <td>
                                            <a href="/rectorate/{{ $rectorate->id }}" title="Edit Rectorate"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/rectorate/delete/{{ $rectorate->id }}" title="Delete Rectorate"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $rectorates->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
</body>
</html>