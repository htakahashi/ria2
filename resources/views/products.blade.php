@extends('layouts.app')

@section('content')
  <div class="text-xs-center">
    <h1 class="display-3">Products</h1>
  </div>
  <div class="container">
    <div class="row">
@foreach($products as $product)
      <div class="col m4 s12">
        <div class="card">
          <div class="card-image">
            <img src="{{ $product->image }}" style="width:100%;">
            <span class="card-title red darken-4" style="color:white;background-color: #ffffff;opacity: 0.6;filter: alpha(opacity=60);">{{ $product->title }}</span>
          </div>
          <div class="card-content">
            <p>Description: {{ $product->description }}</p>
            <p>Price:{{ $product->price }}</p>
          </div>
          <div class="card-action red darken-1">
            <a style="color: white;" href="/products/{{ $product->id }}">Purchase</a>
          </div>
        </div>
      </div>
@endforeach

      </div>
    </div>
  </div>







@endsection