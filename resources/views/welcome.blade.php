<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Optimice</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <!-- Styles -->
        <style>
        html, body {               
        font-family: 'Raleway', sans-serif;
        margin: 0;
        background-image: url("img/calculator.jpg");
        }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                <img src="img/OPTIMICE.png" alt="Optimice" width="400" >
                    @if (Route::has('login'))
                <div class="links">
                    @auth <!-- usuario autenticado -->
                        <a href="{{ url('/home') }}">Home</a>
                    @else <!-- usuario sin autenticar -->
                        <a href="{{ route('login') }}">Iniciar sesión</a>
                        <!-- <a href="{{ route('register') }}">Regístrate</a> -->
                        
                    @endauth
                </div>
            @endif
                </div>

              
            </div>
        </div>
    </body>
</html>
