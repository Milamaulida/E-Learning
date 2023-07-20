<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Class Study</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Tambah Data Class Study</h1></center>
        <form action="/classstudy/store" method="POST">
            {{ csrf_field() }}
            <div class="container">
                <div class="row justify-content-center">
                    <div class="6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name_class" class="form-label">Name Class</label>
                                    <select class="form-select" aria-label="Default select example" name="name_class" required="required">
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
                                    <label for="room" class="form-label">Room</label>
                                    <select class="form-select" aria-label="Default select example" name="room" required="required" >
                                        <option selected>Open This Room</option>
                                        <option value="A201">A201</option>
                                        <option value="A202">A202</option>
                                        <option value="A203">A203</option>
                                        <option value="B201">B201</option>
                                        <option value="B202">B202</option>
                                        <option value="B203">B203</option>
                                        <option value="C201">C201</option>
                                        <option value="C202">C202</option>
                                        <option value="C203">C203</option>
                                        <option value="D201">D201</option>
                                        <option value="D202">D202</option>
                                        <option value="D203">D203</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                                <a href="classstudy" type="" class="btn btn-primary">Kembali</a> 
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