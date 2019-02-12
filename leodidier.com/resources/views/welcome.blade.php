<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>leodidier.com</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #fff; */
                background-image : url('https://images.pexels.com/photos/1166644/pexels-photo-1166644.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                margin:0;
  padding:0;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
  -webkit-background-size: cover; /* pour anciens Chrome et Safari */
  background-size: cover; /* version standardisée */
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Léo DIDIER
                </div>

                <div class="links">
                    <a href="/presentation">Présentation</a>
                    <a href="/portfolio">Portfolio</a>
                    <a href="https://github.com/laravel/laravel">Shop</a>
                    <a href="/contact">Contact</a>
                </div>
            </div>
        </div>
    </body>
</html>
