@extends ('layouts.master')


@section ('content')

<div class="container">
	
	<h1 class="page-title">Checkout</h1>

	<div class="row">
		@auth
		    <form class="col-xs-12 col-md-9" method="POST" action="/checkout/{{ $product->id }}/order">
				
				@include ('layouts.errors')
		    	{{ csrf_field() }}

		    	<div class="form-row">
					  <div class="form-group col">
					    <label for="firstname">First Name</label>
					    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="{{ $user->firstname }}" pattern="[a-zA-Z0-9. -,]{2,99}" value="{{ $user->firstname }}" required>
					  </div>

					  <div class="form-group col">
					    <label for="lastname">Last Name</label>
					    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="{{ $user->lastname }}" pattern="[a-zA-Z0-9. -,]{2,99}" value="{{ $user->lastname }}" required>
					  </div>
				</div>{{-- end of form row --}}

			   <div class="form-group">
			    <label for="address">Address</label>
			    <input type="text" class="form-control" id="address" name="address" 
			    placeholder="ex. 123 cherry st" 
			    value="@if ($user->address != null){{ $user->address }}@endif">
			  </div>


			  <div class="form-row">
			  	  <div class="form-group col-7">
				    <label for="city">City</label>
				    <input type="text" class="form-control" id="city" name="city" required placeholder="ex. Dallas" value="@if ($user->city != null){{ $user->city }}@endif" >
				  </div>



				  <div class="form-group col">
				    <label for="state">State</label>
				    <input type="text" class="form-control" required id="state" name="state" placeholder="ex. TX" pattern="[a-zA-Z]{2}"
				    value="@if ($user->state != null){{ $user->state }}@endif">
				  </div>

				  <div class="form-group col">
				    <label for="zip">Zip</label>
				    <input type="number" class="form-control" id="zip" required name="zip" placeholder="Enter zip code" pattern="[0-9]{5}" value="@if ($user->zip != null){{ $user->zip }}@endif">
				  </div>
			  </div>


			  <div class="form-group">
				   <label for="creditcard">Credit Card</label>
				   <input type="text" class="form-control" id="creditcard" name="creditcard" placeholder="Enter Credit Card Number ex. 1234 5678 5432 9876" pattern="[0-9 ]{19}" required>
			  </div>

				<div class="form-group">
				  <button type="submit" class="btn btn-primary">Purchase</button>
				</div>
			</form>

		@else

		<p>Please login to continue with your purchase or <a href="/register">Register</a> a new account</p>

		<form method="POST" action="/userlogin" class="col-xs-12 col-md-9">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>
        </form>
	 @endauth


	    <div class="product-review-card col-xs-12 col-md-3">
	    	<h3>Review Item</h3>
	        <img src="/assets/images/{{ $product->thumbnail }}" alt="shoes">
	        <div class="card-content">
	            <h4>{{ $product->title }}</h4>
	            <P><?php echo substr($product->description,0,73); ?></P>
	            <p><strong>${{ $product->price }}</strong></p>
	            <a href="/products/{{ $product->id }}" class="details-btn">Full Details</a>
	        </div>
	    </div>

	</div><!-- end of row -->
</div><!-- end of container -->
@endsection
