@extends ('layouts.master')

@section('contentTitle', 'Products')

@section('wrapper')

 <div class="grid-container">
  <div class="grid-item">
  	<form class="checkout-form">
     
     <label>First Name</label>
     <input class="form-input" type="text" name="first-name"> 
     
     <label>Last Name</label>
     <input class="form-input" type="text" name="last-name">
     
     <label>address</label>
     <input class="form-input" type="text" name="address">
     
     <label>city</label>
     <input class="form-input" type="text" name="city">
     
     <label>state</label>
     <input class="form-input" type="text" name="state">
     
     <label>zip-code</label>
     <input class="form-input" type="number" name="zip-code">
     
     <label>credit-card</label>
     <input class="form-input" type="number" name="credit-card">
     
     <input class="form-input" type="submit" name="" value="Submit">
    </form>
  </div>
</div> 

@endsection