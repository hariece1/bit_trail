<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PS</title>
    <style>
        input{
            width :100% !important;

        }
        .card{
            width:45% !important;
        }
        .form-group{
            margin-bottom: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-light h-100">
    <div class="container h-100">
        <div class="card p-5 h-100 m-auto my-5" >
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;" class="text-center">Register</p>
                <form action="{{route('rdetails.store')}}" class="was-validated " method="POST">
                    @csrf
                    <div class="form-group has-validation">
                        <label for="Problem">Name</label>
                        <!-- <textarea class="form-control" id="problemstatementname"  rows="10"></textarea> -->
                        <input type="text" name="name" id="name" class="form-control" required>
                        <!-- @if($errors->has('problemstatementname'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('problemstatementname')}}</strong>
                        </span>
                        @endif -->
                    </div>
                    <div class="form-group has-validation">
                        <label for="name">Roll No</label>
                        <!-- <textarea class="form-control" id="problemstatementname"  rows="10"></textarea> -->
                        <input type="text" name="rollno" id="rollno" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="splname">Special Lab Name</label>
                        <!-- <textarea type = "text" class="form-control" id="problemstatementd"  required rows="3"></textarea> -->
                        <input type="text" name="splname" id="splname" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="splid">Special Lab ID</label>
                        <input type="text" name="splid" id="splid" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong class="invalid-feedback">Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="name">Phone No</label>
                        <input type="text" name="phoneno" id="phoneno" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    
                    
                    
                    <button type="submit" class="btn btn-success m-auto d-block">Register</button>
                   
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>