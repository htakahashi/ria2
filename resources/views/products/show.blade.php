@extends ('layouts.master')

@section ('content')

<div class="container-fluid">
	
	<h1 class="page-title">{{ $product->title }}</h1>
	<span><a href="/products" class="btn back-btn"><i class="fa fa-arrow-circle-o-left"></i> Back</a></span>


	<div class="row">

		<div class="product-item col-sm-6">
			<img src="/assets/images/{{ $product->img }}" alt="shoes">
		</div>

		<div class="product-item-description col-sm-6">
			<h2>{{ $product->title }}</h2>
			<P>{{ $product->description }}</P>
		
			<p><strong>${{ $product->price }}</strong></p>

			<a href="/checkout/{{ $product->id }}" class="cart-btn">Order Now</a>
		</div>
		
	</div><!-- end of row -->
</div><!-- end of container fluid -->

@endsection
