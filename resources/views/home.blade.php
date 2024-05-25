<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <header>
        <nav>
            
            <ul class="nav-links">
                <li><a href="/home" class="nav-link">Home</a></li>
                <li><a href="rdetails/index" class="nav-link">Registration Details</a></li>
                <li><a href="ps/index" class="nav-link">Problem Statements</a></li>
                <li><a href="#" class="nav-link">Contact</a></li>
                <li><a href="logout" class="nav-link">Logout</a></li>
            </ul>
                
           
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>Hello {{ auth()->user()?->name ?? 'Guest' }}!</h1>
            <div class="animated-background"></div>
            <h1 class="color-changing-text">BIT HACKS</h1>
            <p>EXPLORE EVENTS HERE</p>
        </section>
        <section class="hero">
            <div class="animated-background"></div>
            <h1 class="color-changing-text">BIT HACKS</h1>
            <p>EXPLORE EVENTS HERE</p>
        </section>
        <section class="hero">
            <div class="animated-background"></div>
            <h1 class="color-changing-text">BIT HACKS</h1>
            <p>EXPLORE EVENTS HERE</p>
        </section>
        <section class="hero">
            <div class="animated-background"></div>
            <h1 class="color-changing-text">BIT HACKS</h1>
            <p>EXPLORE EVENTS HERE</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 VRINVROG All rights reserved.</p>
    </footer>
</body>
</html>