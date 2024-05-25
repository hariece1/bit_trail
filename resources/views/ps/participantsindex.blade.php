<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Problem Statements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-font {
            font-family: 'Roboto', sans-serif; /* Change this to your desired font family */
        }
    </style>
</head>
<body style="background-color: #f8f9fa;">
    <div class="container">
        <h1 class="mt-4 mb-4 text-center custom-font" style="color: #007bff;">Event Problem Statements</h1>
        <div class="row">
            @foreach($tabledata as $key => $tabledata)
            <div class="col-md-6">
                <div class="card mb-3" style="background-color: #fff3cd; border-color: #ffeeba;">
                    <div class="card-body">
                        <h5 class="card-title custom-font" style="color: #856404;">{{$tabledata->problemstatementname}}</h5>
                        <p class="card-text custom-font" style="color: #856404;">Description of the problem statement  goes here.</p>
                        <p class="card-text"><small class="text-muted">Category: <span style="color: #856404;">{{$tabledata->category}}</span></small></p>
                        <p class="card-text"><small class="text-muted">PID: <span style="color: #856404;">{{$tabledata->pid}}</span></small></p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-md-6">
                <div class="card mb-3" style="background-color: #d4edda; border-color: #c3e6cb;">
                    <div class="card-body">
                        <h5 class="card-title custom-font" style="color: #155724;">Problem Statement Title 2</h5>
                        <p class="card-text custom-font" style="color: #155724;">Description of the problem statement 2 goes here.</p>
                        <p class="card-text"><small class="text-muted">Category: <span style="color: #155724;">Category 2</span></small></p>
                    </div>
                </div>
            </div> -->
            <!-- Add more cards for additional problem statements -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
