@extends('layouts.app')

@section('content')
  <div class="jumbotron text-xs-center">
    <h1 class="display-3">Take a look at our featured products...</h1>
  </div>
  <div class="container">
    <div class="row">
@foreach($products as $product)
      <div class="col m4 s12">
        <div class="card">
          <div class="card-image">
            <img src="{{ $product->image }}" style="width:100%;">
            <span class="card-title" style="color:black;background-color: #ffffff;opacity: 0.6;filter: alpha(opacity=60);">{{ $product->title }}</span>
          </div>
          <div class="card-content">
            <p>Description: {{ $product->description }}</p>
            <p>Price:{{ $product->price }}</p>
          </div>
          <div class="card-action">
            <a href="/products/{{ $product->id }}">Purchase</a>
          </div>
        </div>
      </div>
@endforeach

      </div>
    </div>
  </div>







@endsection