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
                    <h2>UKM</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-ukm" class="btn btn-success btn-sm" title="Add New UKM">Add New UKM</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name UKM</th>
                                        <th>Type UKM</th>
                                        <th>Since</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($studentactivities as $studentactivity)
                                <tr>
                                        <td>{{ $studentactivity->name_ukm }}</td>
                                        <td>{{ $studentactivity->type_ukm }}</td>
                                        <td>{{ $studentactivity->since }}</td>
                                        <td>
                                            <a href="/ukm/{{ $studentactivity->id }}" title="Edit UKM"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/ukm/delete/{{ $studentactivity->id }}" title="Delete UKM"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $studentactivities->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>