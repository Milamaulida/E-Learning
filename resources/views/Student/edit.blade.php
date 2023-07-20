<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Edit Data Bill</h1></center>
    <form action="/student/update/{{$students->id}}" method="post">
    {{ csrf_field() }}
    {{method_field ('PATCH')}}
        <input type="hidden" name="id" value="{{$students->id}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" required="required" value="{{$students->name}}">
                                </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">Nim</label>
                                <input type="text" class="form-control" name="nim" required="required" value="{{$students->nim}}">
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" name="age" required="required" value="{{$students->age}}">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" class="form-control" name="gender" required="required" value="{{$students->gender}}">
                            </div>
                            <div class="mb-3">
                                <label for="religion" class="form-label">Religion</label>
                                <input type="text" class="form-control" name="religion" required="required" value="{{$students->religion}}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" required="required" value="{{$students->email}}"> 
                            </div>
                            <div class="mb-3">
                                <label for="no_phone" class="form-label">No Phone</label>
                                <input type="text" class="form-control" name="no_phone" required="required" value="{{$students->no_phone}}">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" required="required" value="{{$students->address}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                            <button type="submit" class="btn btn-primary">Kembali</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</body>
</html>