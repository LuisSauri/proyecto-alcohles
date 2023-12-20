<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="shortcut icon" href="/img/seafi_favicon.png" />
    <script src="/js/app.js"></script>


     <!--Bootstrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Core theme JS-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
      <!--OpenStreetMap-->
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

      <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.css" />
      <script src="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.js"></script>
      
      
</head>
<body class="d-flex flex-column h-100">
    <header> @yield('header')
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              
              <ul class="navbar-nav">
                <li>
                  <a class="navbar-brand" href="/home">
                    <img src="/img/seafi_favicon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    SEAFI
                  </a>
                </li>
                <li>
                  <a class="nav-item"><a class="nav-link" href="{{url('/registros/form')}}">Registrar</a></a>
                
                <li>
                  <a class="nav-item" ><a class="nav-link" href="{{url('/registros/padron')}}">Consulta</a></a>
                </li>          
                
              </ul>
              
              @guest
              <ul style="margin-left: auto;">
                  <a class="nav-item" ><a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a></a>
              </ul>
              @else
              
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a class="nav-item"><a class="nav-link" href="logout"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="bi bi-box-arrow-left"></i> {{ __('Cerrar Sesión') }}</a></a>
                    </form>
              
              @endguest
            </div>
          </nav>
    </header>
    

    <main>

      @yield('image_seafi')

      @yield('content')
        
    </main>


  <footer class="footer mt-auto py-3">
    @yield('footer')
    <div class="container-fluid">
      <a class="link" href="https://seafi.campeche.gob.mx/">
        <img src="/img/seafi_favicon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Servicio de Administración Fiscal del Estado de Campeche.
      </a>
   </div>
  </footer>
</body>
</html>