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
                    <h2>BILL</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-bill" class="btn btn-success btn-sm" title="Add New Bill">Add New Bill</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name Student</th>
                                        <th>NIM</th>
                                        <th>Name Major</th>
                                        <th>Name Class</th>
                                        <th>The Amount Of The Bill</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($billes as $bill)
                                    <tr>
                                        <td>{{ $bill->name_student }}</td>
                                        <td>{{ $bill->nim}}</td>
                                        <td>{{ $bill->name_major }}</td>
                                        <td>{{ $bill->name_class }}</td>
                                        <td>{{$bill->the_amount_of_the_bill}}</td>
                                        <td>
                                            <a href="/bill/{{ $bill->id }}" title="Edit Bill"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/bill/delete/{{ $bill->id }}" title="Delete Bill"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $billes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
