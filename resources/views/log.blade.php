@extends('layouts.master')

@section('content')
<div class="container">

    <h1 class="page-title">Hello, {{ $user->firstname }} {{ $user->lastname }} </h1>

    <br>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="alert alert-success">You are logged in!</p>

                    <br>

                    @if ($admin == true)
                         <a href="/" class="details-btn">Check Sales</a>
                         <a href="/products" class="cart-btn">Buy Stuff</a>
                    @else 
                        <a href="/" class="details-btn">Welcome</a>
                        <a href="/products" class="cart-btn">Buy Stuff</a>
                    @endif

                </div>
            </div>
        </div>
    </div>{{-- end of row --}}

</div>{{-- end of container --}}
@endsection

