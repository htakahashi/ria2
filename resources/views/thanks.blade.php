@extends('layouts.app')

@section('content')
<div class="text-xs-center">
  <h1 class="display-3">Thanks For Your Purchase</h1>
  <p class="lead"><strong>[product name]</strong> will be shipped to you shortly.</p>
  <hr>
  <p class="lead">
    <a class="btn btn-primary btn-sm red" style="border:none;" href="{{ url('/') }}" role="button">Continue to homepage</a>
  </p>
</div>


@endsection