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
                @csrf
                <p style="font-size:20px; font-weight:bold;" class="text-center">Team Formation</p>
                <form action="{{route('rdetails.store')}}" class="was-validated " method="POST">
                 
                    <div class="form-group has-validation">
                        <label for="Problem">Team Lead Name</label>
                        <!-- <textarea class="form-control" id="problemstatementname"  rows="10"></textarea> -->
                        <input type="text" name="name" id="name" class="form-control" required>
                        <!-- @if($errors->has('problemstatementname'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('problemstatementname')}}</strong>
                        </span>
                        @endif -->
                    </div>
                    <div class="form-group has-validation">
                        <label for="name">Team Lead Roll No</label>
                        <!-- <textarea class="form-control" id="problemstatementname"  rows="10"></textarea> -->
                        <input type="text" name="rollno" id="rollno" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    
                    <div class="form-group has-validation">
                        <label for="splid">Team size</label>
                        <input type="number" name="teamsize" id="teamsize" class="form-control" required max="4" min="0">
                        <span class="invalid-feedback">
                            <strong class="invalid-feedback">Error</strong>
                        </span>
                    </div>
                    <div id="userinput">

                    </div>
                    <div class="form-group has-validation">
                        <label for="splid">PID</label>
                        <input type="text" name="pid" id="pid" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong class="invalid-feedback">Error</strong>
                        </span>
                    </div>
                    <!-- <div class="form-group has-validation">
                        <label for="splid">Participants 1</label>
                        <input type="text" name="participants" id="pid" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong class="invalid-feedback">Error</strong>
                        </span>
                    </div> -->
                   
                    
                    
                    <button type="submit" class="btn btn-success m-auto d-block">Generate Team ID</button>
                   
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        const el=document.getElementById('teamsize')
        const container=document.getElementById('userinput')
const events=[]
        el.addEventListener('change',(e)=>{
           container.innerHTML=''
            for(let i=1;i<=el.value;i++){
                const markup=`
        <div class="form-group has-validation">
                        <label for="splid">Participants ${i} </label>
                        <input type="text" name="participants" id="pid" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong class="invalid-feedback">Error</strong>
                        </span>
                    </div>`
                container.innerHTML+=markup;
            }
        })
        

    </script>
</body>
</html>