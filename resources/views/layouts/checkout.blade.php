<head>
    <link href="/css/form-validation.css" rel="stylesheet">
  </head>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form onsubmit="return validateCC()" method="POST" action="/order" class="needs-validation" novalidate>
            {{ csrf_field() }}
            <input type="hidden" name="item" value="{{ session()->get('item') }}">
            <input type="hidden" name="price" value="{{session()->get('price') }}">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="first">First name</label>
                <input type="text" class="form-control" name="first" id="first" placeholder="Rex" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="last" id="last" placeholder="Doe" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="1234 Freedom Ln" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
               <div class="col-md-4 mb-3">
                <label for="state">City</label>

              <input type="text" class="form-control" name="city" id="city" placeholder="Freedonia" required>
              <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="state">State</label>

              <input type="text" class="form-control" name="state" id="state" placeholder="UT" required>
              <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" name="zip" id="zip" placeholder="80001" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback" id="validatecc">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
            <br>
          </form>
        </div>
      </div>
    </div>

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      function validateCC() {
             var x = document.getElementById('cc-number').value;
             if (x == '4111111111111111') {
                alert("Payment Failed.");
                return false;
             }
             else if (x == '5105105105105100')
             {
                return true;
             }
             else
             {
                alert("Invalid Credit Card Number");
                return false;
             }
      }
    </script>
