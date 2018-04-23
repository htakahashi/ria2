@extends('layouts.app')

@section('content')
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
                    <sup>Mythical</sup> Creatures<sub> Shop</sub>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img style="width: 100%;" src="{{ asset('images/pegasus%20unicorn.png') }}">
                            <br>Pegasus Unicorn
                            <br>A hybrid between a unicorn and a pegasus, colors may vary.
                            <br>$50,000,000<a href="checkout?pid=1"><button class="btn btn-success">Purchase</button></a>
                        </div>
                        <div class="col-sm-4">
                            <img style="width: 100%;" src="/images/baby_dragon.jpg">
                            <br>Baby Dragon
                            <br>A baby dragon, requires lots of food and room when grown.
                            <br>$350,000,000<a href="checkout?pid=2"><button class="btn btn-success">Purchase</button></a>
                        </div>
                        <div class="col-sm-4">
                            <img style="width: 100%;" src="/images/hybrid.jpg">
                            <br>Hyrbid
                            <br>We don't really know what this is, but children love them!
                            <br>$40,000,000<a href="checkout?pid=3"><button class="btn btn-success">Purchase</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
