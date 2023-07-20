<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Tambah Data UKM</h1></center>
        <form action="/ukm/store" method="post"> 
            {{ csrf_field() }}
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name_ukm" class="form-label">Name UKM</label>
                                    <input type="text" class="form-control" name="name_ukm" required="required">
                                </div>
                                <div class="mb-3">
                                    <label for="type_ukm" class="form-label">Type UKM</label>
                                    <input type="text" class="form-control" name="type_ukm" required="required">
                                </div>
                                <div class="mb-3">
                                    <label for="since" class="form-label">Since</label>
                                    <input type="text" class="form-control" name="since" required="required">
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                                <a href="ukm" type="" class="btn btn-primary">Kembali</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

</body>
</html>