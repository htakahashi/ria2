@extends('layouts/layout')

@section('content')
<!-- Main -->
<div id="main">
	<div class="inner">
		<header>
			<h1>This is the Admin Page</h1>
			<div class="row-login">
				 @if (Route::has('login'))
	                @auth
	                    <a class="button special" href="{{ url('/home') }}">Home</a>
	                @else
	                    <a class="button special" href="{{ route('login') }}">Login</a>
	                    <a class="button special" href="{{ route('register') }}">Register</a>
	                @endauth
	        @endif
			</div>
			<p>Meowwww please stop looking at your phone and pet me. You call this cat food this human feeds me, i should be a god so meow meow, but if it fits, i sits. Hide at bottom of staircase to trip human cat dog hate mouse eat string barf pillow no baths hate everything and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor; what's your problem? i meant to do that now i shall wash myself intently toilet paper attack claws fluff everywhere meow miao french ciao litterbox use lap as chair. Step on your keyboard while you're gaming and then turn in a circle chew on cable see owner, run in terror yet catch mouse and gave it as a present. Pet me pet me don't pet me ask for petting try to hold own back foot to clean it but foot reflexively kicks you in face.</p>
		</header>
		<section class="tiles">
			<article class="style1">
				<span class="image">
					<img src="images/pic01.jpg" alt="" />
				</span>
				<a href="generic.html">
					<h2>Magna</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style2">
				<span class="image">
					<img src="images/pic02.jpg" alt="" />
				</span>
				<a href="generic.html">
					<h2>Lorem</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style3">
				<span class="image">
					<img src="images/pic03.jpg" alt="" />
				</span>
				<a href="generic.html">
					<h2>Feugiat</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
		</section>
	</div>
</div>
@endsection