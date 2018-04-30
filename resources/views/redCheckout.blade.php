@extends ('layouts.master')

@section('contentTitle', 'Checkout')

@section('wrapper')

 <div class="grid-container">
    <div class="grid-item">
        <div class="errors ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    </div>
    <div class="grid-item">
        <form class="checkout-form" action="/orders" method="POST">
            @csrf
         <div class="form-item">
            <label>First Name</label>
            <input class="form-input" type="text" name="first-name" required> 
         </div>
         
         <div class="form-item">
            <label>Last Name</label>
            <input class="form-input" type="text" name="last-name" required>
         </div>
         
         <div class="form-item">
            <label>address</label>
            <input class="form-input" type="text" name="address" required>
         </div>
         
         <div class="form-item">
            <label>city</label>
            <input class="form-input" type="text" name="city" required>
         </div>
         
         <div class="form-item">
            <label>state</label>
            <input class="form-input" type="text" name="state" required> 
         </div>
         
         <div class="form-item">
            <label>zip-code</label>
            <input class="form-input" type="number" name="zip-code" required>
         </div>
         
         <div class="form-item">
            <label>credit-card</label>
            <input class="form-input" type="number" name="credit-card" required>
         </div>
         
        <input class="form-input" type="hidden" name="product" value="red">
        <input class="form-input" type="hidden" name="productPrice" value=".5">

         <div class="form-item">
            <input class="form-input submit" type="submit" name="" value="Submit">
         </div>
         
        </form>
    </div>
</div> 

@endsection