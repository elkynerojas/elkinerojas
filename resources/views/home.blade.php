<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Elkin Rojas</title>

  <!-- Font Awesome Icons -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{ asset('css/creative.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Elkin Rojas</a>
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
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Elkin Rojas</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Bienvenido! Soy un desarrollador web Full Stack. En este sitio encontrará una reseña de mi trabajo y algunos artículos interesantes sobre el mundo de la informática y la tecnología</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Visitar blog</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  {{-- <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">¿Que sé hacer?</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2">Páginas web</h3>
            <p class="text-muted mb-0">De a conocer su negocio de forma rápida y sencilla</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2">Aplicaciones móviles</h3>
            <p class="text-muted mb-0">Esté mas cerca de las personas a través de su dispositivo móvil</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Software en la nube</h3>
            <p class="text-muted mb-0">Gestione su empresa u organice su información de forma eficiente</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Sistemas Linux</h3>
            <p class="text-muted mb-0">Asesorías para implementación de servidores y software libre</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6 text-center">
          <a class="portfolio-box" href="{{ asset('img/portfolio/fullsize/1.jpg') }}">
            <img class="img-fluid" src="{{ asset('img/portfolio/thumbnails/portafolio_construprecios.jpg') }}" alt="" width="250" height="250">
            <div class="portfolio-box-caption">
              {{-- <div class="project-category text-white-50">
                Category
              </div> --}}
              <div class="project-name">
                Construprecios
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
          <a class="portfolio-box" href="{{ asset('public/img/portfolio/fullsize/2.jpg') }}">
            <img class="img-fluid" src="{{ asset('img/portfolio/thumbnails/portafolio_clase_aparte.jpg') }}" alt="" width="250px" height="250px">
            <div class="portfolio-box-caption">
              {{-- <div class="project-category text-white-50">
                Category
              </div> --}}
              <div class="project-name">
                Clase Aparte
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
          <a class="portfolio-box" href="{{ asset('img/portfolio/fullsize/3.jpg') }}">
            <img class="img-fluid" src="{{ asset('img/portfolio/thumbnails/portafolio_medisoft.jpg') }}" alt="">
            <div class="portfolio-box-caption">
              {{-- <div class="project-category text-white-50">
                Category
              </div> --}}
              <div class="project-name">
                Medisoft
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{ asset('img/portfolio/fullsize/4.jpg') }}">
            <img class="img-fluid" src="{{ asset('img/portfolio/thumbnails/4.jpg') }}" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
          <a class="portfolio-box" href="{{ asset('img/portfolio/fullsize/5.jpg') }}">
            <img class="img-fluid" src="{{ asset('img/portfolio/thumbnails/portafolio_tiendaya.jpg') }}" alt="">
            <div class="portfolio-box-caption">
              {{-- <div class="project-category text-white-50">
                Category
              </div> --}}
              <div class="project-name">
                TiendaYA
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{ asset('img/portfolio/fullsize/6.jpg') }}">
            <img class="img-fluid" src="{{ asset('img/portfolio/thumbnails/6.jpg') }}" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  {{-- <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
      <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
    </div>
  </section> --}}

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">¿Necesita de mis servicios?</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Es tan sencillo como hacer una llamada en enviar un correo electrónico</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+57 3182204190</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:rojaselkin1@gmail.com">rojaselkin1@gmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Elkin Rojas</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/creative.min.js') }}"></script>

</body>

</html>
