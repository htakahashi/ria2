@extends ('layouts.master')

@section ('content')

<div class="container">
	
	<h1 class="page-title">All Products</h1>

<div class="row">

    @foreach ($products as $product)

    <div class="product-item-card col-xs-12 col-md-4 col-lg-3">
        <img src="/assets/images/{{ $product->thumbnail }}" alt="shoes">
        <div class="card-content">
            <h4>{{ $product->title }}</h4>
            <P><?php echo substr($product->description,0,73); ?></P>
            <p><strong>${{ $product->price }}</strong></p>
            <a href="/products/{{ $product->id }}" class="details-btn">See Details</a>
            <a href="/checkout/{{ $product->id }}" class="cart-btn">Buy Now</a>
        </div>
    </div>

   @endforeach
</div><!-- end of row -->
</div><!-- end of container -->
@endsection
