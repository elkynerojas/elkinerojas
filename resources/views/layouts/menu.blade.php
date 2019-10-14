<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Inicio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#about">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#services">Hoja de vida</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#portfolio">Portafolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contact">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                  >Salir</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login/Registro</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>