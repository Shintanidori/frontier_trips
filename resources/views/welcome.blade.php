<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frontier Trips</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type='text/css' href="assets/welcome.css">
    <body class="antialiased">
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="assets/imgs/logo.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Buscar</a></li>
        </ul>
        <div class="navbar">
            <li><a href="{{route('login')}}">Iniciar Sesion</a></li>
            <li><a href="{{route('register')}}">Registrate</a></li>
        </div>
    </header>
    <section class="main-home">
        <div class="main-text">
            <h5>Encuentra el viaje que necesitas en la mane</h5>
        </div>
    </section>
</body>
</html>
