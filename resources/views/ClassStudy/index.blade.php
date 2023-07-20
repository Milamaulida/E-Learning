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
                    <h2>CLass Study</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-classstudy" class="btn btn-success btn-sm" title="Add New Class Study">Add New Class Study</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name Class</th>
                                        <th>Room</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($classstudies as $classstudy)
                                    <tr>
                                        <td>{{ $classstudy->name_class }}</td>
                                        <td>{{ $classstudy->room }}</td>
                                        <td>
                                            <a href="/classstudy/{{ $classstudy->id }}" title="Edit Class Study"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/classstudy/delete/{{ $classstudy->id }}" title="Delete Classstudy"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $classstudies->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>