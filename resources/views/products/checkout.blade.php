@extends('products.template')

@section('content')

<div class="row">
        <div class="col-sm-12">
                <h2>Checkout:</h2>
        </div>
    <table class="table">
        <thead>
            <tr>
                <th scope-"col">Item Name</th>
                <th></th>
                <th></th>
                <th scope-"col">Item Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$cart->prod_name}}</td>
                <td></td>
                <td></td>
                <td>${{$cart->prod_price}}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Tax:</td>
                <td>$ {{$cart->tax}}0</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Total:</td>
                <td>$ {{$cart->prod_price + $cart->tax}}</td>
            </tr>
        </tbody>
    </table>

	</div>
<div class="row">
    <div class="col-sm-12">
        <form method="post" action="/products">
        {{ csrf_field() }}
        <div class="form-row">
        <h1 class="col-sm-12 formHeading">Shipping Address</h1>
        <div class="form-group col-sm-12">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="name" placeholder="John Doe">
        </div>
            <div class="form-group col-md-12">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
            </div>

        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" name="State" class="form-control">
                <option selected>Choose...</option>
                <option>AL</option>
                <option>AK</option>
                <option>AZ</option>
                <option>AR</option>
                <option>CA</option>
                <option>CO</option>
                <option>CT</option>
                <option>DE</option>
                <option>FL</option>
                <option>GA</option>
                <option>HI</option>
                <option>ID</option>
                <option>IL</option>
                <option>IN</option>
                <option>IA</option>
                <option>KS</option>
                <option>KY</option>
                <option>LA</option>
                <option>ME</option>
                <option>MD</option>
                <option>MA</option>
                <option>MI</option>
                <option>MN</option>
                <option>MS</option>
                <option>MO</option>
                <option>MT</option>
                <option>NE</option>
                <option>NV</option>
                <option>NH</option>
                <option>NJ</option>
                <option>NM</option>
                <option>NY</option>
                <option>NC</option>
                <option>ND</option>
                <option>OH</option>
                <option>OK</option>
                <option>OR</option>
                <option>PA</option>
                <option>RI</option>
                <option>SC</option>
                <option>SD</option>
                <option>TN</option>
                <option>TX</option>
                <option>UT</option>
                <option>VT</option>
                <option>WA</option>
                <option>WV</option>
                <option>WI</option>
                <option>WY</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" name="zip" id="inputZip">
            </div>
        </div>
        <div class="form-row">
            <h1 class="col-sm-12 formHeading">Payment Information</h1>
            <div class="form-group col-md-6">
            <label for="inputCard">Credit Card</label>
            <input type="text" class="form-control" name="creditcard" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">Expiration Year</label>
            <select id="inputState" name="expiration" class="form-control">
                <option selected>Choose...</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>          
                <option>2026</option>          
                <option>2027</option>          
                <option>2028</option>          
                <option>2029</option>          
                <option>2030</option>          
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">CCV</label>
            <input type="text" class="form-control" name="ccv" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <input type="hidden" name="product" value="{{$cart->prod_name}}">
        <input type="hidden" name="id" value="{{$cart->id}}">
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <div class="col-sm-12">
                <a href="/cart" class="btn btn-outline-danger btn-sm float-sm-right back">Back</a>
            </div>
    </div>
</div>

@endsection

