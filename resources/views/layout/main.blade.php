<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Grupo Medra - @yield('title')</title>
  <link rel="icon" type="image/png" sizes="96x96" href="{{ url('assets/images/favicon.png') }}">
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{url('assets/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{url('assets/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="teal" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="{{url('/')}}" class="brand-logo"><span class="white-text text-darken-2"> <i class="material-icons">home</i></span></a>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"><span class="white-text text-darken-2">Empresa</span></a></li>
        <li><a href="#"><span class="white-text text-darken-2">Servicios</span></a></li>
        <li><a href="{{url('/contacto')}}"><span class="white-text text-darken-2">Contacto</span></a></li>
         @if(Auth::check())
        <li><a href="{{url('/logout')}}"><span class="white-text text-darken-2">Cerrar Sesión</span></a></li>
         @endif
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#"><span class="white-text text-darken-2">Empresa</span></a></li>
        <li><a href="#"><span class="white-text text-darken-2">Servicios</span></a></li>
        <li><a href="{{url('/contacto')}}"><span class="white-text text-darken-2">Contacto</span></a></li>
      </ul>
    </div>
  </nav>

  @yield('content')

  <footer class="page-footer teal">
    <div class="footer-copyright">
      <div class="container">
        Grupo Medra 2016
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{url('assets/js/materialize.js')}}"></script>
  <script src="{{url('assets/js/init.js')}}"></script>
 @yield('scripts')
</body>
</html>
