@extends('layouts.layout')

@section('content')

  <div id="main">
    <div class="inner overflowH">
      <h1>{{ $item->name }}</h1>
      <span class="image left"><img src="/images/{{ $item->image }}" alt="" /></span>
      <p>{{ $item->description }}</p>
      <p>${{ $item->price*.01 }}</p>
      <a class="button" href="/">Back</a>

      {{ old('city') }}

      <div class="card">
          <div class="card-header">{{ __('Checkout') }}</div>

          <div class="card-body">
            <form method="POST" action="/items/{{ $item->id }}">
              {{ csrf_field() }}
              <input type="hidden" name="product" value="{{ $item->name }}" />
              <div class="form-group">
                <label for="fName">First Name</label>
                <input type="text" class="form-control" id="fName" name="fName"  value="{{ old('fName') }}">
              </div>
              <div class="form-group">
                <label for="lName">Last Name</label>
                <input type="text" class="form-control" id="lName" name="lName" value="{{ old('lName') }}">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
              </div>
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
              </div>
              <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}">
              </div>
              <div class="form-group">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" value="{{ old('zip') }}">
              </div>
              <div class="form-group">
                <label for="card">Credit Card Number</label>
                <input type="text" class="form-control" id="card" name="card" value="{{ old('card') }}">
              </div>


              <div class="form-group">
                <button type="submit" class="button">Purchase</button>
              </div>

              @php
                if ( Session::has('error') ) {
                  echo '<div class="alert alert-info">'. Session::get("error") . '</div>';
                }
              @endphp

              @include('layouts.errors')
            </form>
          </div>
      </div>
    </div>
  </div>

@endsection
