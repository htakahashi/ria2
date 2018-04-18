<nav  class="myMenu">
		<ul class="primary-nav">
		<li class="active"><a href="/cozy">Home</a></li>
		<li class="about"><a>About</a></li>
		<li><a>Contact Us</a></li>	

		<li class=""><a href="/cart"> Patterns	</a></li>
		@if (Route::has('login'))
              
                    @auth
                       <li> <a href="{{ url('logout') }}">Logout</a></li>
                    @else
					<li><a href="{{ route('login') }}">Login</a></li>
					<li class="last"><a href="{{ route('register') }}">Register</a></li>
                    @endauth
               
            @endif
		<button class="nav-button">Toggle Navigation</button>
		</ul>
			
		</nav>