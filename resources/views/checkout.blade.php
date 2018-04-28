@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $product->image }}" style="width:100%;">
                        <span class="card-title" style="color:black;background-color: #ffffff;opacity: 0.6;filter: alpha(opacity=60);">{{ $product->title }}</span>
                    </div>
                    <div class="card-content">
                        <p>Description: {{ $product->description }}</p>
                        <p>Price: {{ $product->price }}</p>
                    </div>
                </div>
            </div>

            <form class="col s12" action="/submitOrder/{{ $product->id }}" method="POST">

                @if (count($errors))
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                {{ csrf_field() }}
                <input type="hidden" value="{{ $product->title }}" name="product">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate" name="first">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate" name="last">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="address" type="text" class="validate" name="address">
                        <label for="address">Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input id="city" type="text" class="validate" name="city">
                        <label for="city">City</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="state" type="text" class="validate" name="state">
                        <label for="state">State</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="zip" type="number" class="validate" name="zip">
                        <label for="zip">Zip</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="creditcard" type="number" class="validate" name="cardNumber">
                        <label for="creditcard">Credit Card Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <button type="submit" class="waves-effect waves-light btn" style="color:white;">Submit Order</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection