@extends('layouts.layout')



@section('content')

<!-- Intro -->
					<div id="intro">
						<h1>Hello Milord!</h1>
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
							<li class="active"><a href="/">Home</a></li>
							<li><a href="/products">Products</a></li>
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
							<section class="alt">
								<h2>Hello Admin! You've got the power! You can view sales below!</h2>
								<br><br>

								@foreach ($orderslist as $orderstable)
									<h4>{{ $orderstable->fname }} {{ $orderstable->lname }}</h4>
									<h3>Purchased: {{ $orderstable->product }}</h3>
									<p style="text-align: center;">{{ $orderstable->address }}, {{ $orderstable->city }} {{ $orderstable->state }} {{ $orderstable->zip }}</p>
									<hr>
								@endforeach


								@foreach ($userrole as $perm)
									<p>Permission: {{ $perm->role }}</p>
								@endforeach

								<p><a href="/">Back to Home</a></p>
							</section>
					</footer>


@endsection
