<div class="links">
	<a href="/">Home</a>
    <a href="/checkout">Checkout</a>
    @if (Auth::user())
        @if (Auth::user()->role == 1)
            <a href="/customer">Customer</a>
        @endif
    @endif
    <a href="/products">Products</a>
    <a href="/thankyou">Thankyou</a>
    @if (Auth::user())
        @if (Auth::user()->role == 0)
            <a href="/orders">Orders</a>
        @endif
    @endif
</div>
