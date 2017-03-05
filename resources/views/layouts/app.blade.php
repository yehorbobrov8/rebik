<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Живи По-Справжньому</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            background: url(images/default1.jpeg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
        .fa-btn {
            margin-right: 6px;
        }
       .main-navbar{
           background: transparent;
           border:0;
       }

    </style>
</head>
<body id="app-layout" style="


">
    <nav class="navbar navbar-default main-navbar">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" style="color: rgb(255,255,255); font-weight: bold; font-size: 18px; font-family:'Lucida Sans Unicode'">
                     <img src="images/logo.png"  alt>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" style="margin-top:30px">
                    <li><a style="color: #FFF5EE; font-weight: bold; font-size: 16px; font-family: 'Lucida Sans Unicode'" href="{{ url('/home') }}">Главная</a></li>
                    <li><a style="color: #FFF5EE; font-weight: bold; font-size: 16px; font-family: 'Lucida Sans Unicode'" href="{{ url('/about') }}">О центре</a></li>
                    <li><a style="color: #FFF5EE; font-weight: bold; font-size: 16px; font-family: 'Lucida Sans Unicode'" href="{{ url('/evidence') }}">Свидетельства</a></li>
                    <li><a style="color: #FFF5EE; font-weight: bold; font-size: 16px; font-family: 'Lucida Sans Unicode'" href="{{ url('/gallery') }}">Галерея</a></li>
                    <li><a style="color: #FFF5EE; font-weight: bold; font-size: 16px; font-family: 'Lucida Sans Unicode'" href="{{ url('/contacts') }}">Контакты</a></li>


                </ul>

              
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
