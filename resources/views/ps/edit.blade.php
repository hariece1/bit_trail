<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit PS</title>
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
                <p style="font-size:20px; font-weight:bold;" class="text-center">Edit Problem statement</p>
                <form action="{{route('ps.update',$data->id)}}" class="was-validated " method="POST" novalidate>
                @method('PUT')
                @csrf 
                <div class="form-group has-validation">
                        <label for="Problem">Problem Statement Name</label>
                        <!-- <textarea class="form-control" id="problemstatementname"  rows="10"></textarea> -->
                        <input type="text" name="problemstatementname" id="problemstatementname" class="form-control" value="{{$data->problemstatementname}}" required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="name">Problem statement ID</label>
                        <!-- <textarea class="form-control" id="problemstatementname"  rows="10"></textarea> -->
                        <input type="number" name="problemstatementnumber" id="problemstatementnumber" class="form-control" value="{{$data->pid}}" required disabled>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="r\">Description</label>
                        <!-- <textarea class="form-control" id="problemstatement" value="{{$data->problemstatement}}" required  rows="3"></textarea> -->
                        <input type="text" name="problemstatementd" id="problemstatementd" class="form-control" value="{{$data->problemstatementd}}"required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="joining_date">Start date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" value="{{$data->start_date}}"required>
                        <span class="invalid-feedback">
                            <strong class="invalid-feedback">Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="start_time">Start time</label>
                        <input type="time" name="start_time" id="start_time" class="form-control"value="{{$data->start_time}}" required>
                        <span class="invalid-feedback">
                            <strong class="invalid-feedback">Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="end_date">End time</label>
                        <input type="time" name="end_time" id="end_time" class="form-control" value="{{$data->end_time}}"required>
                        <span class="invalid-feedback">
                            <strong class="invalid-feedback">Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="joining_date">End date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" value="{{$data->end_date}}" required>
                        <span class="invalid-feedback">
                            <strong class="invalid-feedback">Error</strong>
                        </span>
                    </div>
                    <!-- <div class="form-group has-validation">
                        <label for="joining_salary">Joining salary</label>
                        <input type="number" name="joining_salary" id="joining_salary" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div> -->
                    <div class="form-group has-validation">
                        <label for="is_active">Active</label>
                        <input type="checkbox" name="is_active" id="is_active" value="1" {{$data->is_active=='1'?'checked':''}} class="w-25">

                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-success m-auto d-block">Update Problem Statement</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>