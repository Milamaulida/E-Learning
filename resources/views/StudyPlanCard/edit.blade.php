<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <center><h1 class="text-center mb-4"> Edit Data Study Plan Card</h1></center><br>
    <form action="/studyplancard/update/{{$studyplancards->id}}" method="post">
        {{ csrf_field() }}
        {{method_field ('PATCH')}}
            <input type="hidden" name="id" value="{{$studyplancards->id}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name_student" class="form-label">Name Student</label>
                                    <input type="text" class="form-control" name="name_student" required="required" value="{{$studyplancards->name_student}}">
                                </div>
                                <div class="mb-3">
                                    <label for="name_subject" class="form-label">Name Subject</label>
                                    <input type="text" class="form-control" name="name_subject" required="required" value="{{$studyplancards->name_subject}}">
                                </div>
                                <div class="mb-3">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" class="form-control" name="nim" required="required" value="{{$studyplancards->nim}}">
                                </div>
                                <div class="mb-3">
                                    <label for="code_subject" class="form-label">Code Subject</label>
                                    <input type="text" class="form-control" name="code_subject" required="required" value="{{$studyplancards->code_subject}}">
                                </div>
                                <div class="mb-3">
                                    <label for="code_class" class="form-label">Code Class</label>
                                    <input type="text" class="form-control" name="code_class" required="required" value="{{$studyplancards->code_class}}">
                                </div>
                                <div class="mb-3">
                                    <label for="sks" class="form-label">SKS</label>
                                    <input type="text" class="form-control" name="sks" required="required" value="{{$studyplancards->sks}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                                <button type="submit" class="btn btn-primary">Kembali</a> 
                            </div>
                    </div>
                </div>
            </div>
        </form>
</body>
</html>