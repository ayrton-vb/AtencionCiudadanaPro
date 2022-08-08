<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Atención Ciudadana</title>
</head>
<body>

    <!-- =============================================== -->
    <!-- MENU -->
    <!-- =============================================== -->

<header data-aos="" class="container-fluid text-center fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark " id="nav">
        <div class="container-fluid"  >
            <img class="logoR"  src="" width="50">

            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item" >
                        <a class="nav-link active mx-3 fs-5 fw-bold text-d redText lkm" aria-current="page" href="/clientes">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-4 fs-5 fw-bold redText lkm" href="#servicios">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-4 fs-5 fw-bold redText lkm" href="#ubicacion">Puntos de Atención</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active mx-4 fs-5 fw-bold redText lkm" href="#directorio">Directorio Institucional</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active mx-4 fs-5 fw-bold redText lkm" href="#seccion-contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<div class="container">





    <!-- =============================================== -->
    <!--CONTENIDO -->
    <!-- =============================================== -->
<div id="contidoPrincipal">

    @yield('contenido')

</div>


    <!--========================================================== -->
    <!--FOOTER-->
    <!--========================================================== -->
    <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap mt-1">
  <p class="fs-5 px-3  pt-3 fw-bold">Atención Ciudadana &copy; GAMEA Todos Los Derechos Reservados 2022</p>
  <div id="iconos" >
      <a href="https://www.facebook.com/ElAltoAlcaldia"><i class="bi bi-facebook"></i></a>
      <a href="https://twitter.com/renuevaelalto?t=9W6ixRI4MKKTbYUqmJxf6Q&s=09"><i class="bi bi-twitter"></i></a>
      <a href="https://www.instagram.com/alcaldiaelalto/?utm_medium=copy_link"><i class="bi bi-instagram"></i></a>
  </div>
</footer>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{asset('js/main.js') }}" defer></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>

</body>
</html>
