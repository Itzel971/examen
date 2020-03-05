<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
<!-----------------BootstrapCDN------------------------------>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('Bootstrap/css/bootstrap.css') }}">
  <!---<script src="{{ asset('Bootstrap/js/bootstrap.js') }}"></script>-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="icon" type="image/png" href="{{ asset('/Bootstrap/images/perfil.ico')  }}">

</head>

<body>
   

   <img class="img-fluid" src = "{{ asset('/Bootstrap/images/banner.jpg')}}" />

  
  <!-----------------Header con barra de menu------------------------------>
	<nav class="navbar navbar-expand-md navbar-light bg-light">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="{{url('/')}}" class="nav-item nav-link active">Inicio</a>
                <a href="{{url('/soy/')}}" class="nav-item nav-link">Quien Soy</a>
                <a href="{{url('/arbol/')}}" class="nav-item nav-link">Mi Arbol Familiar</a>
                <a href="{{url('/hobbies/')}}" class="nav-item nav-link">Mis Hobbies</a>
                <a href="{{url('/experiencia/')}}" class="nav-item nav-link">Experiencia Profesional</a>
                <a href="{{url('/contactame/')}}" class="nav-item nav-link">Contacto</a>

            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
<!-----------------Seccion de contenido------------------------------>
	<div class="container">
		@yield('contenido')

	</div>
  @yield('TP')  
<!-----------------Footer de pagina------------------------------>
  <nav   class="fixed-bottom navbar-light bg-light">
      <div class="text-center">
        <div class="socials">
          <div class="socials-inner">
            <div class="socials-inner" style="
    background-color: white;
    background-color: #19d8e6;
">
            <h5>Redes sociales</h5>
            
              <a href="#" class="facebook-ico"><span></span>Facebook</a>
              <a href="#" class="twitter-ico"><span></span>Twitter</a>
              <a href="#" class="rss-feed-ico"><span></span>Rss-feed</a>
              <a href="#" class="myspace-ico"><span></span>myspace</a>
              
            
            <div class="cl">&nbsp;</div>
          </div>
            
       
  </nav>

</body>
</html>