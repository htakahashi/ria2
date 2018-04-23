<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Checkout
                </div>

                <?php
                if ($_REQUEST['pid'] == 1)
                {
                    $product = "Pegasus Unicorn";
                    $price = "$50,000,000";
                }
                if ($_REQUEST['pid'] == 2)
                {
                    $product = "Baby Dragon";
                    $price = "$350,000,000";
                }
                if ($_REQUEST['pid'] == 3)
                {
                    $product = "Hybrid";
                    $price = "$40,000,000";
                }
                ?>

                <?php
                if ($_REQUEST['pid'] == 1)
                {
                $product = "Pegasus Unicorn";
                echo "$product<br>$price";
                ?>
                <img style="width: 25%;" src="{{ asset('images/pegasus%20unicorn.png') }}">
                <?php
                }
                if ($_REQUEST['pid'] == 2)
                {
                    $product = "Baby Dragon";
                    echo "$product<br>$price";
                    echo '<img style="width: 25%;" src="/images/baby_dragon.jpg">';
                }
                if ($_REQUEST['pid'] == 3)
                {
                    $product = "Hybrid";
                    echo "$product<br>$price";
                    echo '<img style="width: 25%;" src="/images/hybrid.jpg">';
                }
                ?>

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
    </body>
</html>
