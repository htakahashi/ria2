@extends('layouts.layout')

@section('content')
  <div id="main">
    <div class="inner overflowH">
      <h1>Order Summary</h1>
      <p>
        Thank you for buying {{ $item->name }} your order will be shipped within 2 business days and reach you never.
      </p>
      <a class="button" href="/">Shop</a>
    </div>
  </div>
@endsection
