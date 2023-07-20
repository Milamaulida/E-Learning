<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Bill</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Tambah Data Bill</h1></center>
    <form action="/bill/store" method="post">
    {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name_student" class="form-label">Name Student</label>
                                <input type="text" class="form-control" name="name_student" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" class="form-control" name="nim" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="name_major" class="form-label">Name Major</label>
                                <select name="name_major" required="required">
                                    <option>choose</option>
                                    <option value="FTEK">FTEK</option>
                                    <option value="FKON">FKON</option>
                                    <option value="FIKOM">FIKOM</option>
                                    <option value="FAI">FAI</option>
                                    <option value="FKIP">FKIP</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name_class" class="form-label">Name Class</label>
                                <select name="name_class" required="required">
                                    <option>choose</option>
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
                                <input type="text" class="form-control" name="the_amount_of_the_bill" required="required">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                            <a href="bill" type="" class="btn btn-primary">Kembali</a> 
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