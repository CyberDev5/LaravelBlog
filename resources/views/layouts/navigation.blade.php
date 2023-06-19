  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <h1 class="title"><a class="navbar-brand" href="#">Formation Laravel</a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="{{ $currentRoute === 'home' ? "nav-item active" : "nav-item" }}" >
            <a class="nav-link" href="#">@yield('liens1')</a>
          </li>
          @if(Auth::guest())
            <li class="{{ $currentRoute === 'login' ? "nav-item active" : "nav-item" }}" >
              <a class="nav-link" href={{ route('login')}} >@yield('liens2')</a>
            </li>
            <li class="{{ $currentRoute === 'Inscription' ? "nav-item active" : "nav-item" }}" >
              <a class="nav-link" href={{ route('register')}} >@yield('liens3')</a>
            </li>
          @else
          <li class="{{ $currentRoute === 'logout' ? "nav-item active" : "nav-item" }}" >
            <a class="nav-link" href={ route('logout')}} >Deconnexion</a>
          </li>
          @endif 
        </ul>
      </div>
    </div>
  </nav>
