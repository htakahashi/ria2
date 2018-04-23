<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                font-size: 12px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Thank you for your purchase:
                </div>

                <?php
                if ($_REQUEST['pid'] == 1)
                {
                    $product = "Pegasus Unicorn";
                    $price = "$50,000,000";
                }
                if ($_REQUEST['pid'] == 2)
                {
                    $product = "Baby Dragon";
                    $price = "$350,000,000";
                }
                if ($_REQUEST['pid'] == 3)
                {
                    $product = "Hybrid";
                    $price = "$40,000,000";
                }
                ?>

                <?php
                if ($_REQUEST['pid'] == 1)
                {
                $product = "Pegasus Unicorn";
                echo "$product<br>$price";
                ?>
                <img style="width: 25%;" src="{{ asset('images/pegasus%20unicorn.png') }}">
                <?php
                }
                if ($_REQUEST['pid'] == 2)
                {
                    $product = "Baby Dragon";
                    echo "$product<br>$price";
                    echo '<img style="width: 25%;" src="/images/baby_dragon.jpg">';
                }
                if ($_REQUEST['pid'] == 3)
                {
                    $product = "Hybrid";
                    echo "$product<br>$price";
                    echo '<img style="width: 25%;" src="/images/hybrid.jpg">';
                }
                ?>
            </div>
        </div>
    </body>
</html>
