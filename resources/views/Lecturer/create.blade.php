<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<center><h1 class="text-center mb-4"> Tambah Data Lecturer</h1></center>
<form action="/lecturer/store" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required="required">
                            <div class="mb-3">
                                <label for="nidn" class="form-label">NIDN</label>
                                <input type="text" class="form-control" name="nidn" required="required">
                            </div>
                            <div class=" mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" name="age" required="required"><br>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                    <select class="form-select" aria-label="Default select example" name="role" required="required" >
                                            <option selected>Open This Religion</option>
                                            <option value="head of study program">head of study program</option>
                                            <option value="study program secretary">study program secretary</option>
                                            <option value="study program treasurer">study program treasurer</option>
                                            <option value="lecturer">lecturer</option>
                                    </select>
                            </div>
                            <div class="mb-3">
                                </div>
                                    <label for="gender" class="form-label">Gender</label>
                                    <br>
                                            <input type="radio" value="Female" name="gender" required="required">Female
                                            <input type="radio" value="Male" name="gender" required="required">Male
                                        
                                </div>
                            <div class="mb-3">
                                <label for="religion" class="form-label">Religion</label>
                                <select class="form-select" aria-label="Default select example" name="religion"required="required" >
                                                <option selected>Open This Religion</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Lainnya">Lainnya</option>
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="no_phone" class="form-label">No Phone</label>
                                <input type="text" class="form-control" name="no_phone" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="address">Address</label>
                                <input type="text" class="form-control"name="address" required="required">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                            <a href="lecturer" type="" class="btn btn-primary">Kembali</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>


    
</body>
</html>