<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Bill</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Edit Data Bill</h1></center>
    <form action="/bill/update/{{$billes->id}}" method="post">
    {{ csrf_field() }}
    {{method_field ('PATCH')}}
    <input type="hidden" name="id" value="{{$billes->id}}"><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name_student" class="form-label">Name Student</label>
                                <input type="text" class="form-control" name="name_student" required="required" value="{{ $billes->name_student}}">
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" class="form-control" name="nim" required="required" value="{{ $billes->nim}}">
                            </div>
                            <div class="mb-3">
                                <label for="name_major" class="form-label">Name Major</label>
                                <select class="form-select" aria-label="Default select example" value="{{$billes->name_major}}" name="name_major" required="required" value="{{ $billes->name_major}}">
                                    <option selected>Open this major</option>
                                    <option value="FTEK">FTEK</option>
                                    <option value="FKON">FKON</option>
                                    <option value="FIKOM">FIKOM</option>
                                    <option value="FAI">FAI</option>
                                    <option value="FKIP">FKIP</option>
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label for="name_class" class="form-label">Name Class</label>
                                <select class="form-select" aria-label="Default select example" value="{{$billes->name_class}}" name="name_class" required="required" value="{{ $billes->name_class}}">
                                    <option selected>Open This Class</option>
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="A3">A3</option>
                                    <option value="A4">A4</option>
                                    <option value="A5">A5</option>
                                    <option value="B">B</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="the_amount_of_the_bill" class="form-label">The Amount Of The Bill</label>
                                <input type="text" class="form-control" name="the_amount_of_the_bill" required="required" value="{{ $billes->the_amount_of_the_bill}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                            <button type="submit" class="btn btn-primary">Kembali</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    
    <br>
    <br>
    
 
</body>
</html>