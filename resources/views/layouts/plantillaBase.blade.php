<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="{{ asset('assets/owl-carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/dist/assets/owl.theme.default.min.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        legend{
            font-size: 13px;
            font-weight: bold;
        }
        .image-container {
            display: inline-block;
            overflow: hidden;
            position: relative;
        }

        .zoom {
            transition: transform 0.3s ease-in-out;
        }

        .image-container:hover .zoom {
            transform: scale(1.2);
        }

        .circle-a:before {
            width: 500px;
            height: 500px;
            top: -300px; left: 52%;
            -webkit-transform: translate(-50%,0);
            -ms-transform: translate(-50%,0);
            transform: translate(-50%,0);
        }
        .circle-a:after {
            top: 160px;
            right: 10%;
        }
        .circle-b:before {
            top: 60%;
            left: -25px;
        }
        .circle-b:after {
            width: 150px;
            height: 150px;
            bottom: -70px;
            right: -70px;
        }
        a.more-link {
            background-color: rgba(255, 255, 255, 0.35);
            display: inline-block;
            padding: 12px 18px;
            color: #fff;
            text-decoration: none;
            font: 500 15px 'Work Sans', Helvetica, sans-serif;
            line-height: 1.5;
            text-align: center;
            border: none !important;
            position: relative;
            border-radius: 30px;
            text-transform: uppercase;
            -webkit-transition: .1s all ease-in-out;
            -moz-transition: .1s all ease-in-out;
            -o-transition: .1s all ease-in-out;
            transition: .1s all ease-in-out;
        }
        a.more-link:hover {
            background-color: rgba(255, 255, 255, 0.50);
        }
        .partner-area .sponsor-info {
            box-shadow: 0px 0px 30px rgba(85, 85, 85, 0.07);
            background-color: #ffffff;
            border-radius: 200px;
            padding: 95px 50px;
            position: relative;
            margin-top: -78px;
            z-index: 1;
        }
        .partner-area .sponsor-info .owl-carousel .owl-item img {
            width: 300px;
            height: auto;
            margin: auto;
            transition: all ease 0.5s;
        }
        .partner-area .sponsor-info .owl-carousel .owl-item img:hover {
            opacity: 1;
        }
        @media (max-width: 575.98px) {
            .partner-area .sponsor-info {
                border: none;
                box-shadow: none;
                background: none;
            }
        }

        @media (min-width: 768px) {
         .modal-mod {
            max-width: 45%;
         }
        }
    </style>

    <title>Atención Ciudadana</title>
</head>
<body>

    <!-- =============================================== -->
    <!-- MENU -->
    <!-- =============================================== -->

<header data-aos="" class="container-fluid text-center fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
        <div class="container-fluid" >



        <img class="logoR"  src="" height="25" style="padding-left:20px;">

            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link active mx-3 fs-5 fw-bold text-d redText lkm" aria-current="page" href="/clientes">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-4 fs-5 fw-bold redText lkm" href="#categorias">Categorías</a>
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
                    <li class="nav-item">
                        <a class="nav-link active mx-4 fs-5 fw-bold redText lkm" href="https://www.elalto.gob.bo/">-> GAMEA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<div class="container-fluid">

    <!-- =============================================== -->
    <!-- ENCABEZADO -->
    <!-- =============================================== -->
    <div id="banner" class="container" >
        <img  data-aos="zoom-in-up" id="bannerLogo" src="/imagenes/logoBanner.png"  width="100%">
        <img   data-aos="zoom-in"
               data-aos-offset="200"
               data-aos-delay="50"
               data-aos-duration="1000"
               data-aos-easing="ease-in-out"
               data-aos-mirror="true"
               data-aos-once="false"
               data-aos-anchor-placement="top-center"
               id="bannerLetra" src="/imagenes/letrasBanner.png" width="100%">
                <img src="/imagenes/banner6.jpeg" width="100%">

    </div>




    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-end logoTamaño">
                    <img src="imagenes/11.png" alt="Image" class="img-fluid " width="150">
                </div>
            </div>
            <div class="col">
                <div class="text-center logoTamaño2">
                    <img src="imagenes/22.png" alt="Image" class="img-fluid" width="90">
                </div>
            </div>
            <div class="col">
                <div class="text-start logoTamaño3">
                <img src="imagenes/33.png" alt="Image" class="img-fluid " width="95">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 text-center">
                <a href="#idtramitesnuevos" class="btn btn-primary btn-lg">Comenzar <i class="fas fa-arrow-alt-circle-down"></i></a>
                <a href="#rutasVehiculos" class="btn btn-danger btn-lg">Busca tu línea <i class="fas fas fa-shuttle-van"></i></a>
            </div>
        </div>
    </div>




    <!-- =============================================== -->
    <!--CONTENIDO -->
    <!-- =============================================== -->






    <!-- <div class="untree_co-section">
		<div class="container">
			<div class="row text-center justify-content-center mb-5">
				<div class="col-lg-7"><h2 class="section-title text-center"></h2></div>
			</div>

			<div class="owl-carousel owl-3-slider">

				<div class="item">
					<a class="media-thumb" href="images/1.png" data-fancybox="gallery"> -->
						<!-- <div class="media-text">
							<h3>SMGI</h3>
							<span class="location">Secretaria Municipal Gestion Institucional</span>
						</div> -->
						<!-- <img src="imagenes/1.png" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="images/2.png" data-fancybox="gallery"> -->
						<!-- <div class="media-text">
							<h3>DAC</h3>
							<span class="location">Dirección de Atencion Ciudadana</span>
						</div> -->
						<!-- <img src="imagenes/2.png" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="images/3.png" data-fancybox="gallery"> -->
						<!-- <div class="media-text">
							<h3>USUT</h3>
							<span class="location">Unidad Sistema Unico de Tramites</span>
						</div> -->
						<!-- <img src="imagenes/3.png" alt="Image" class="img-fluid">
					</a>
				</div> -->


			<!-- 	<div class="item">
					<a class="media-thumb" href="images/hero-slider-4.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Rialto Bridge</h3>
							<span class="location">Italy</span>
						</div>
						<img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="images/hero-slider-5.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>San Francisco, United States</h3>
							<span class="location">United States</span>
						</div>
						<img src="images/hero-slider-5.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Lake Thun</h3>
							<span class="location">Switzerland</span>
						</div>
						<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">
					</a>
				</div> -->
<!--
			</div>

		</div>
	</div>  -->

<div id="contidoPrincipal">

    @yield('contenido')

</div>

</div>
</body>
    <!--========================================================== -->
    <!--FOOTER-->
    <!--========================================================== -->

<footer class="container w-100  d-flex  align-items-center justify-content-center flex-wrap mt-1">
    <p class="fs-5 px-3  pt-3 fw-bold">Atención Ciudadana &copy; GAMEA Todos Los Derechos Reservados 2022</p>
    <div id="iconos" >
        <a href="https://www.facebook.com/ElAltoAlcaldia"><i class="bi bi-facebook"></i></a>
        <a href="https://twitter.com/renuevaelalto?t=9W6ixRI4MKKTbYUqmJxf6Q&s=09"><i class="bi bi-twitter"></i></a>
        <a href="https://www.instagram.com/alcaldiaelalto/?utm_medium=copy_link"><i class="bi bi-instagram"></i></a>
    </div>
</footer>



<script src="https://kit.fontawesome.com/655d53150e.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>




    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#table').DataTable({
             "lengthMenu":[[50,150,-1],[50,150,300,"All"]],
            responsive: "true",
            dom: 'Bfrtilp',
              buttons:[
                        {
                          extend:    'excelHtml5',
                          text:      '<i class="fas fa-file-excel"></i> ',
                          titleAttr: 'Exportar a Excel',
                          className: 'btn btn-success'
                        },
                        {
                          extend:    'pdfHtml5',
                          text:      '<i class="fas fa-file-pdf"></i> ',
                          titleAttr: 'Exportar a PDF',
                          className: 'btn btn-danger'
                        },
                        {
                          extend:    'print',
                          text:      '<i class="fa fa-print"></i> ',
                          titleAttr: 'Imprimir',
                          className: 'btn btn-info'
                        },
                      ]
          });

        } );
    </script>





<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
{{-- <script src="{{ asset('assets/owl-carousel/dist/owl.carousel.min.js') }}"></script> --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('js/main.js') }}" defer></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
<script>
    $('.sponsor-slider').owlCarousel({
	 	loop: true,
	 	margin: 30,
	 	nav: false,
	 	dots: false,
	 	autoplay: true,
	 	smartSpeed: 1000,
	 	autoplayHoverPause: true,
	 	responsive:{
            0:{
                items: 1,
            },
            576:{
                items: 1,
            },
            768:{
                items: 3,
            },
            992:{
                items: 4,
            },
            1200:{
                items: 5,
            },
            1400:{
                items: 5,
            },
	 	}
	})
</script>

</html>
