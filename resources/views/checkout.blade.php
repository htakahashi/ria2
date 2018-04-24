@extends('layouts.layout')



@section('content')

<!-- Intro -->
					<div id="intro">
						<h1>Checkout</h1>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="/" class="logo">LARAVEL</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="/">Home</a></li>
							<li><a href="/products">Products</a></li>
							<li><a href="/login">login</a></li>
							<li><a href="/register">Register</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<footer id="footer">
						<section>
							<form method="post" action="/saveorder">
								<div class="field">
									<label for="fname">First Name</label>
									<input type="text" name="fname" id="fname" />
								</div>
								<div class="field">
									<label for="lname">Last Name</label>
									<input type="text" name="lname" id="lname" />
								</div>

								<div class="field">
									<label for="address">Address</label>
									<input type="text" name="address" id="address" />
								</div>
								<div class="field">
									<label for="city">City</label>
									<input type="text" name="city" id="city" />
								</div>
								<div class="field">
									<label for="state">State</label>
									<input type="text" name="state" id="state" />
								</div>
								<div class="field">
									<label for="zip">Zip</label>
									<input type="text" name="zip" id="zip" />
								</div>

									<input type="hidden" name="product" id="product" value="{{ $potatoGun }}" />
									<input type="hidden" name="price" id="price" value="{{ $price }}" />
								

								<div class="field">
									<label for="card">Credit Card:</label>
									<input type="text" name="card" id="card" />
								</div>

								{{ csrf_field() }}
								
								
								<ul class="actions">
									<li><input type="submit" value="Submit" /></li>
								</ul>
							</form>
						</section>
						<section style="text-align: left;">

							<!--Big If statement depending which gun is chosen-->
								<h2>{{ $potatoGun }}</h2>
								<h2>{{ $price }}</h2>
								<p><a href="/products">Find a different item?</a></p>
								<h3>When You are Ready:</h3>
								<p>Use 5105 1051 0510 5100 to win</p>
								<p>Use 4111 1111 1111 1111 to lose</p>
							
						</section>
					</footer>


@endsection
