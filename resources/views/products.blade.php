@extends('layouts.layout')



@section('content')

<!-- Intro -->
					<div id="intro">
						<h1>Products</h1>
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
							<li class="active"><a href="/products">Products</a></li>
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




						
						<section class="posts">
                                <article>
                                    <header>
                                        <span class="date">Product 1</span>
                                        <h2><a href="/checkout/1">Potato Launcher<br />
                                        (Basic)</a></h2>
                                    </header>
                                    <a href="#" class="image fit"><img src="{{ asset('img/potatolauncher.jpg') }}" alt="" /></a>
                                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                    <ul class="actions">
                                        <li><a href="/checkout/1" class="button">Buy for $200</a></li>
                                    </ul>
                                </article>
                                <article>
                                    <header>
                                        <span class="date">Product 2</span>
                                        <h2><a href="/checkout/2">Spud Gun<br />
                                        (Intermediate)</a></h2>
                                    </header>
                                    <a href="#" class="image fit"><img src="{{ asset('img/spudgun.jpg') }}" alt="" /></a>
                                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                    <ul class="actions">
                                        <li><a href="/checkout/2" class="button">Buy for $350</a></li>
                                    </ul>
                                </article>
                                <article>
                                    <header>
                                        <span class="date">Product 3</span>
                                        <h2><a href="/checkout/3">Starch Cannon<br />
                                        (Advanced)</a></h2>
                                    </header>
                                    <a href="#" class="image fit"><img src="{{ asset('img/starchcannon.jpg') }}" alt="" /></a>
                                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                    <ul class="actions">
                                        <li><a href="/checkout/3" class="button">Buy for $999</a></li>
                                    </ul>
                                </article>
                            </section>


@endsection
