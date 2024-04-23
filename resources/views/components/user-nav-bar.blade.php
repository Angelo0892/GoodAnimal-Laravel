<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('navigation.index')}}">GoodAnimal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  
          <li class="nav-item">
            <a class="nav-link" href="{{route('navigation.catalogo')}}">Animales</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('navigation.noticias')}}">Noticias</a>
          </li>
        </ul>

        <ul class="d-flex mb-lg-0">
          @if (Route::has('login'))
              @auth
                  <li class="nav-item nav-login">
                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                  </li>
                  @else
                  
                  <li class="nav-item nav-login">
                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                  </li>
                  <li class="nav-item nav-login">
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="nav-link">Register</a>
                    @endif
                  </li>
              @endauth
          @endif
        </ul>
          <!--
          <li class="nav-item">
            <a class="nav-link" href="{{route('navigation.contacto')}}">Contactanos</a>
          </li>
          -->
      </div>
    </div>  
</nav>