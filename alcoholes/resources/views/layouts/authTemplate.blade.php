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
      <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!-- Core theme JS-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

</head>
<body class="d-flex flex-column h-100">
    <header> @yield('header')
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              
              <ul class="navbar-nav">
                <li>
                  <a class="navbar-brand" href="/login">
                    <img src="/img/seafi_favicon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    SEAFI
                  </a>
                </li>

              </ul>
            </div>
          </nav>
    </header>
    

    <main>

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