  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <h1 class="title"><a class="navbar-brand" href="#">Formation Laravel</a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @if(Auth::guest())
            @if(Route::current()->getName() == "login")
              <li class="nav-item active">
                <a class="nav-link" href={{ route('login')}} > Login </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{ route('register')}} > Inscription </a>
              </li>
            @elseif(Route::current()->getName() == 'register')
              <li class="nav-item">
                <a class="nav-link" href={{ route('login')}} > Login </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href={{ route('register')}} > Inscription </a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href={{ route('login')}} > Login </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{ route('register')}} > Inscription </a>
              </li>
            @endif
          @endif
          @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link" href={{ route('articles.index')}} > Liste des articles </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href={{ route('logout')}} > Deconnexion </a>
            </li>
          @endif
          {{-- @switch(Auth::check())
              @case(Route::current()->getName() == "articles")
                <li class="nav-item active">
                  <a class="nav-link" href={{ route('articles')}} > Liste des articles </a>
                </li>
              @default
                <li class="nav-item">
                  <a class="nav-link" href={{ route('articles')}} > Liste des articles </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href={{ route('logout')}} > Deconnexion </a>
                </li>
          @endswitch --}}
                {{-- @if(Auth::guest())
            <li class="{{ $currentRoute === 'login' ? "nav-item active" : "nav-item" }}" >
              <a class="nav-link" href={{ route('login')}} >@yield('liens2')</a>
            </li>
            <li class="{{ $currentRoute === 'Inscription' ? "nav-item active" : "nav-item" }}" >
              <a class="nav-link" href={{ route('register')}} >@yield('liens3')</a>
            </li>
          @else
          <li class="{{ $currentRoute === 'logout' ? "nav-item active" : "nav-item" }}" >
            <a class="nav-link" href={{ route('logout')}} >Deconnexion</a>
          </li>
          @endif  --}}
        </ul>
      </div>
    </div>
  </nav>
