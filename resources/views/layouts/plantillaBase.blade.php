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

<div class="container">

    <!-- =============================================== -->
    <!-- MENU -->
    <!-- =============================================== -->


<header class="container text-center">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nav" style="border: solid 1px red;">
        <div class="container-fluid"  style="border: solid 1px blue;">

            <img class=""  src="/imagenes/LogoR.png" width="50">



            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav" style="border: solid 1px red;">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item" style="border: solid 1px black;">
                        <a class="nav-link active mx-3 fs-5 text-d" aria-current="page" href="#intro">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-4 fs-5" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-4 fs-5" href="#actividades">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-4 fs-5" href="#ubicacion">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>



    <!-- =============================================== -->
    <!-- ENCABEZADO -->
    <!-- =============================================== -->
    <div id="banner" >
        <img  data-aos="zoom-in-up" id="bannerLogo" src="/imagenes/logoBanner.png" width="100%">
        <img   data-aos="zoom-in"
               data-aos-offset="200"
               data-aos-delay="50"
               data-aos-duration="1000"
               data-aos-easing="ease-in-out"
               data-aos-mirror="true"
               data-aos-once="false"
               data-aos-anchor-placement="top-center"
               id="bannerLetra" src="/imagenes/letrasBanner.png" width="100%">
                <img src="/imagenes/banner.png" width="100%">

    </div>




    <!-- =============================================== -->
    <!--CONTENIFO -->
    <!-- =============================================== -->
<div style="height: 2000px">

</div>


    <!--========================================================== -->
    <!--FOOTER-->
    <!--========================================================== -->


</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="main.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>

</body>
</html>
