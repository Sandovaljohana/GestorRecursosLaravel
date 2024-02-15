<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/navbarTop.css'])
    <title>navbar</title>
</head>
<body>
    <nav> 
        
            <div class="pitbul">
                <h1>PITBUL</h1>
           </div>
        
        <div class="botones">
            <button type="submit">LogIn</button>
            <button type="submit">LogOut</button>
        </div>
    </nav>
    @yield('navbar')
</body>
</html>