@extends('layouts.master')
@section('content')

    <div class="title m-b-md">
        Checkout
    </div>

    <?php
    if ($_REQUEST['pid'] == 1)
    {
        $product = "Apple";
        $price = "$10.00";
    }
    if ($_REQUEST['pid'] == 2)
    {
        $product = "Cherry";
        $price = "$10.00";
    }
    if ($_REQUEST['pid'] == 3)
    {
        $product = "Mystery";
        $price = "$10.00";
    }
    ?>

    <?php
    if ($_REQUEST['pid'] == 1)
    {
        echo '<div class="col-lg-4">';
    $product = "Apple";
    echo "<h2>$product</h2><br><h4>$price</h4><br>";
    ?>
    <img style="width: 100%;" src="{{ asset('/img/apple.jpg') }}"></div>
    <?php
    }
    if ($_REQUEST['pid'] == 2)
    {
        echo '<div class="col-lg-4">';
        $product = "Cherry";
        echo "<h2>$product</h2><br><h4>$price</h4><br>";
        echo '<img style="width: 100%;" src="/img/cherry.jpg"></div>';
    }
    if ($_REQUEST['pid'] == 3)
    {
        echo '<div class="col-lg-4">';
        $product = "Mystery";
        echo "<h2>$product</h2><br><h4>$price</h4><br>";
        echo '<img style="width: 100%;" src="/img/mystery.jpg"></div>';
    }
    ?>
    <div class="col-lg-8">
<div class="form_style">
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">First name</label>
            <input name="first" type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Last name</label>
            <input  name="last"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
        </div>

        <div class="form-group"> <!-- Street 1 -->
            <label for="street1_id" class="control-label">Street Address 1</label>
            <input type="text" class="form-control" id="street1_id" name="street1" placeholder="Street address, P.O. box, company name, c/o">
        </div>

        <div class="form-group"> <!-- Street 2 -->
            <label for="street2_id" class="control-label">Street Address 2</label>
            <input type="text" class="form-control" id="street2_id" name="street2" placeholder="Apartment, suite, unit, building, floor, etc.">
        </div>

        <div class="form-group"> <!-- City-->
            <label for="city_id" class="control-label">City</label>
            <input type="text" class="form-control" id="city_id" name="city" placeholder="Smallville">
        </div>

        <div class="form-group"> <!-- State Button -->
            <label for="state_id" class="control-label">State</label>
            <select class="form-control" id="state_id">
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>

        <div class="form-group"> <!-- Zip Code-->
            <label for="zip_id" class="control-label">Zip Code</label>
            <input type="text" class="form-control" id="zip_id" name="zip" placeholder="#####">
        </div>

        <div class="form-group"> <!-- Zip Code-->
            <label for="ccard" class="control-label">Credit Card</label>
            <?php if ($payment_fail == 1) {?>
            <div class="alert alert-danger">
                Fix payment information.
            </div>
            <?php } ?>
            <input type="text" class="form-control" id="ccard" name="ccard" placeholder="################">
        </div>


        <input name="pid" type="hidden" value="<?php echo intval($_REQUEST['pid']); ?>" >

        <input name="product" type="hidden" value="<?php echo $product; ?>" >
        <input name="checked_out" type="hidden" value="1" >

        <div class="form-group"> <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Buy!</button>
        </div>

    </form>

</div>

    </div>


                @stop