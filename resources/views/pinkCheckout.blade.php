@extends ('layouts.master')

@section('contentTitle', 'Checkout')

@section('wrapper')

 <div class="grid-container">
  <div class="grid-item">
    <form class="checkout-form" action="/postorder" method="POST">
        @csrf
     <div class="form-item">
        <label>First Name</label>
        <input class="form-input" type="text" name="first-name"> 
     </div>
     
     <div class="form-item">
        <label>Last Name</label>
        <input class="form-input" type="text" name="last-name">
     </div>
     
     <div class="form-item">
        <label>address</label>
        <input class="form-input" type="text" name="address">
     </div>
     
     <div class="form-item">
        <label>city</label>
        <input class="form-input" type="text" name="city">
     </div>
     
     <div class="form-item">
        <label>state</label>
        <input class="form-input" type="text" name="state"> 
     </div>
     
     <div class="form-item">
        <label>zip-code</label>
        <input class="form-input" type="number" name="zip-code">
     </div>
     
     <div class="form-item">
        <label>credit-card</label>
        <input class="form-input" type="number" name="credit-card">
     </div>
     
    <input class="form-input" type="hidden" name="product" value="pink">
    <input class="form-input" type="hidden" name="productPrice" value="2">


     <div class="form-item">
        <input class="form-input submit" type="submit" name="" value="Submit">
     </div>
     
    </form>
  </div>
</div> 

@endsection