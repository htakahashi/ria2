<nav class="navbar sticky-top navbar-expand-md mainNav">

  <a class="navbar-brand" href="/">Blade Shoes</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color: #7e8d85;"></i></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Welcome <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/products">Products</a>
      </li>  
    </ul>

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
              @auth
                <li class="nav-item dropdown" style="list-style-type: none">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->firstname }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu mydropdown" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @else
                 <a class="nav-link" style="display:inline-block;" href="{{ route('login') }}">Login</a>
                  <a class="nav-link" style="display:inline-block;" href="{{ route('register') }}">Register</a>
              @endauth
            </div>
        @endif

    </div>
  </div>{{-- end of collapse --}}

</nav>