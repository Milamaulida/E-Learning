<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Tambah Data Major</h1></center>
    <form action="/major/store" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name_major" class="form-label">Name Major</label>
                                <input type="text" class="form-control" name="name_major" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="head_of_program" class="form-label">Head Of Program</label>
                                <input type="text" class="form-control" name="head_of_program" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="code_major" class="form-label">Code Major</label>
                                <input type="text"  class="form-control" name="code_major" required="required">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                            <a href="major" class="btn btn-primary">Kembali</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
</body>
</html>