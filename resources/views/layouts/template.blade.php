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
  @yield('menu')
  

  <!-- Masthead -->
  @yield('header')
  <!-- Services Section -->
  @yield('habilidades')

  <!-- Portfolio Section -->
  @yield('portafolio')

  <!-- Contact Section -->
  @yield('contacto')

  <!-- Footer -->
  @yield('footer')

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
