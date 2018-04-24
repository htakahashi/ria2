@extends('layouts.layout')



@section('content')

<!-- Intro -->
					<div id="intro">
						<h1>This is<br />
						My Final</h1>
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
							<h2>Laravel final project</h2>
							<h3>By Cody Moulton</h3>
							<h3>4/16/2018</h3>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Login</h3>
								<p>Returning Users, please login above.</p>
							</section>
							<section>
								<h3>New?</h3>
								<p>Go to our registration form to create an account <a href="/register">here</a>.</p>
							</section>
							<section>
								<h3>Admins</h3>
								<p>Think you're special? Prove it <a href="/register">here</p>
							</section>
						</section>
					</footer>


@endsection
