<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX PS</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body >
    <header>
<nav>
             
            <ul class="nav-links">
                <li><a href="/home" class="nav-link">Home</a></li>
                <li><a href="/rdetails/index" class="nav-link">Registration Details</Details></a></li>
                <li><a href="ps/index" class="nav-link">Problem Statements</a></li>
                <!-- <li><a href="#" class="nav-link">Forum</a></li> -->
                <li><a href="logout" class="nav-link">Logout</a></li>
            </ul>
                
           
        </nav>
    </header>
    <div class="container-fluid" style="height: 100vh;">
    @if(session()->has('message'))
    <div class="alert alert-success">
    {{session()->get('message')}}                
    </div>
    @endif
        <div class="row">
            <div class='col-2'></div>
            <div class="">
                <div class="card">
                    <div class="" style="margin-top: 70px;">
                        <strong style="margin-top: 30px;">Problem Statements</strong>
                        <a href="{{route('ps.create')}}" class="btn btn-xs float-end py-0" style="background-color: skyblue;">Create Problem Statement</a>
                        <table class="table table-responsive table-bordered table-stripped" style="margin-top:30px;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Problem Statement</th>
                                    <th>PID</th>
                                    <th>Category</th>
                                    <th>Start Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tabledata as $key => $tabledata)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$tabledata->problemstatementname}}</td>
                                    <td>{{$tabledata->pid}}</td>
                                    <td>{{$tabledata->category}}</td>
                                    <td>{{$tabledata->start_date}}</td>
                                    <td>
                                        <span type="button" class="btn {{$tabledata->is_active == 1 ? 'btn-success' : 'btn-danger'}} btn-xs py-0">
        {{$tabledata->is_active == 1 ? 'Active' : 'Inactive'}}
    </span>
</td>

                                    <td>
                                        <div class="d-flex justify-content-between">
                                        <a href="{{route('ps.show',$tabledata->id)}}" class="btn btn-xs float-end py-0" style="background-color: silver;">Show</a>
                                        <a href="{{route('ps.edit',$tabledata->id)}}" class="btn btn-warning btn-xs py-0">Edit</a>
                                       <td?>
                                        <form action="{{route('ps.delete',$tabledata->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                        <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                        </form>
</div>
</td>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>