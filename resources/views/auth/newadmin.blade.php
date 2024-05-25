
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <!-- <img src="./image/bg bit logo.png" height="100%" width="100%"> -->
        
        <h2>Create Admin</h2>
        <img src="{{ asset('images/onlylogo.png') }}" height="150px" width = '150px' style="margin: auto;display: block;">
        <!-- @if ($errors->any()){
        <ul>
        {!! implode('',$errors->all('<li>!:message</li>'))!!}
         </ul>
        }
        @endif -->
<form action="/adminstore" method="POST" style="padding: 10px;">
            <label for="username">Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password_confirmation" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="submit" value="Create">
            <!-- <h3 style="font-weight: 400; text-align: center; margin-top: 0;">BIT HACK 24</h3> -->
            <!-- <input type="submit" value="Sign in"> -->
        </form>
        <!-- <div style="width: 100%;"> -->
            <!-- <a href="#" style="font-size: small;text-align: center;margin-top: 1rem;">New User?</a> -->
        <!-- </div> -->
    </div> 
</body>
</html>
