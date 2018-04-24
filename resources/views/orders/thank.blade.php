@extends ('layouts.master')


@section ('content')

<div class="container">
	
	<h1 class="page-title">Thank You.</h1>

	<p>Thanks <strong>{{ $user->firstname }}</strong>, for your purchase of <strong>{{ $product->title }}</strong>.</p>

	<p>A receipt will be emailed to <strong>{{ $user->email }}</strong>, but you can review your order below</p>

	<hr>

	<div class="row">

		<div class="product-item col-sm-6">
			<img src="/assets/images/{{ $product->img }}" alt="shoes">
		</div>

		<div class="product-item-description col-sm-6">
			<h2>{{ $product->title }}</h2>
			<P>{{ $product->description }}</P>
			<p>Total: <strong>${{ $product->price }}</strong></p>

			<hr>

			<h3>Billing Information</h3>
			<p>{{ $user->firstname }} {{ $user->lastname }}
				<br>{{ $user->address }}
				<br>{{ $user->city }}, {{ $user->state }} {{ $user->zip }}
			</p>

			<a href="/products" class="cart-btn">View More Products</a>
		</div>
	
	</div><!-- end of row -->

</div>
@endsection