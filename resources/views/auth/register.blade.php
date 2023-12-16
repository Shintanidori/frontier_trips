<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="assets/register.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>Registrate</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="logo">
                <img src="assets/imgs/logo.png" alt="">
            </div>
            <form action="{{route('register')}}" method="post">
                <input type="text" id="nombre" class="fadeIn second" name="oogin" placeholder="Nombre">
                <input type="text" id="email" class="fadeIn second" name="email" placeholder="Correo Electronico">
                <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
                <input type="password" id="password" class="fadeIn third" name="login" placeholder="Repetir Contraseña">
                <input type="submit" class="fadeIn fourth" value="Registrate">
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="{{route('login')}}">Ya tienes una cuenta. Inicia Sesión</a>
            </div>
        </div>
    </div>
</body>
</html>