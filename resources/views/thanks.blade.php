@extends('products.template')

@section('content')


    <div class="jumbotron">
        <h1 class="display-4">Thank You!</h1>
        <p class="lead">Your order of {{$thanks->prod_name}} is being processed for a final total of {{$thanks->prod_price + $thanks->tax}} dollars. We will send you an email with your pdf link!</p>
    </div>

@endsection