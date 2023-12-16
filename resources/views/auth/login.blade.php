<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="assets/login.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="logo">
                <img src="assets/imgs/logo.png" alt="">
            </div>
            <form action="{{route('login')}}" method="post">     
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Correo Electronico">
                <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
                <input type="submit" class="fadeIn fourth" value="Iniciar Sesion">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="{{route('register')}}">¿Aun no tienes una Cuenta? Registrate</a>
            </div>
        </div>
    </div>
</body>
</html>