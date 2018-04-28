@extends('layouts.app')

@section('content')
<div class="jumbotron text-xs-center">
  <h1 class="display-3">Thank You For Your Purchase!</h1>
  <p class="lead"><strong>{{ $product->title }}</strong> will be shipped to you promptly.</p>
  <hr>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="{{ url('/') }}" role="button">Buy Another Camera</a>
  </p>
</div>


@endsection