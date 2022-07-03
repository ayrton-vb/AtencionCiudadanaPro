@extends('layouts.plantillaBase')

@section('contenido')


<!-- =============================================== -->
<!-- INTRO-->
<!-- =============================================== -->

<section  class="w-50 mx-auto text-center pt-3 pb-3 border-bottom border-2" id="intro">
    <h1 data-aos="fade-down" class="p-3 pb-0 fs-2 ">Información  sobre <span class="text-danger">servicios y tramites</span>
      del Gobierno Autónomo Municipal de La Ciudad de El Alto
    </h1>
    
  </section>

  <!-- =============================================== -->
<!-- TRMITES MAS DEMANDADOS-->
<!-- =============================================== -->

<section  class="container-fluid border-bottom border-2 pt-3 pb-3" id="">
    <h1 data-aos="fade-down" class="fs-2 text-center fw-bold"><span class="text-danger">Trámites Más Demandados</span>
    </h1>


<div id="carouselExampleIndicators" class="carousel carousel-dark slide pt-3 pb-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="cards-wrapper">
        <div class="card" >
            <div class="card-body">
            <div class="images-wrapper">
                <img src="/imagenes/recaudaciones/servicio.png"  alt="...">

        </div>
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
            </div>
        </div>
        <div class="card" >
        <div class="images-wrapper">
            <img src="/imagenes/recaudaciones/servicio.png"  alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
        </div>
        </div>
        <div class="card" >
        <div class="images-wrapper">
            <img src="/imagenes/recaudaciones/servicio.png"  alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
        </div>
        </div>

      </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <div class="card" >
  <div class="images-wrapper">
      <img src="./imagenes/catastro/servicio.png" alt="...">

  </div>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
  </div>
</div>
<div class="card" >
<div class="images-wrapper">
    <img src="./imagenes/catastro/servicio.png"  alt="...">      
</div>  
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
  </div>
</div>
<div class="card" >
<div class="images-wrapper">
    <img src="./imagenes/catastro/servicio.png"  alt="...">      
</div>  
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
  </div>
</div>

      </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <div class="card" >
  <div class="images-wrapper">
      <img src="./imagenes/integral/servicio.png" alt="...">

  </div>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
  </div>
</div>
<div class="card" >
<div class="images-wrapper">
    <img src="./imagenes/integral/servicio.png"  alt="...">     
 </div>  
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
  </div>
</div>
<div class="card" >
    <div class="images-wrapper">
        <img src="./imagenes/integral/servicio.png"  alt="...">      
    </div>  
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
  </div>
</div>

      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    
  </section>




<!-- =============================================== -->
<!-- SERVICIOS-->
<!-- =============================================== -->
<section id="servicios" class="container-fluid border-bottom border-2 pt-3 pb-3">
  <h1 data-aos="zoom-in-up" class="fs-2 text-center fw-bold "><span class="text-danger text-decoration-underline">Categorias</span>  </h1>
  <div class="row w-85 mx-auto servicio-fila ">
    
    <div  data-aos="flip-up" data-aos-delay="0" class="col-lg-6  col-md-12 col-sm-12 my-5 d-flex icono-wrap">
      <img src="/imagenes/recaudaciones/servicio.png" alt="recaudaciones" width="180" height="160">
      <div>
        <h3 class="fs-3 mt-4 px-4 pb-1 fw-bold">Recaudaciones</h3>
        <p class="fs-4 px-4 m-0">Actividades económicas</p>
        <p class="fs-4 px-4 m-0">Inmuebles</p>
        <p class="fs-4 px-4 m-0">Vehículos</p>
        <a href="./recaudaciones/index.html" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
        
      </div>
    </div>

    <div  data-aos="flip-up"  data-aos-delay="100" class="col-lg-6  col-md-12 col-sm-12 my-5 d-flex icono-wrap">
      <img src="./imagenes/catastro/servicio.png" alt="recaudaciones" width="180" height="160">
      <div>
        <div>
          <h3 class="fs-3 mt-4 px-4 pb-1 icono-wrap fw-bold">Catastro</h3>
          <p class="fs-4 px-4 m-0">Trámites Catastrales</p>
          <p class="fs-4 px-4 m-0">Trámites de Urbanizaciones</p>
          <p class="fs-4 px-4 m-0">Trámites de Planimetrías</p>
          <a href="./catastro/index.html" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
        </div>
        
      </div>
    </div>

    <div  data-aos="flip-up"  data-aos-delay="100" class="col-lg-6  col-md-12 col-sm-12 my-5 d-flex icono-wrap">
      <img src="./imagenes/integral/servicio.png" alt="recaudaciones" width="180" height="160">
      <div>
        <div>
          <h3 class="fs-3 mt-4 px-4 pb-1 fw-bold">Desarrollo Integral</h3>
          <p class="fs-4 px-4 m-0">Pago de Bono Discapacidad</p>
          <p class="fs-4 px-4 m-0">Actividades Juventudes</p>
          <p class="fs-4 px-4 m-0">Atencion Adulto Mayor</p>
          <a href="./integral/index.html" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Detalles</a>
      </div>
        
      </div>
    </div>

    <div   data-aos="flip-up"  data-aos-delay="200" class="col-lg-6  col-md-12 col-sm-12 my-5 d-flex icono-wrap">
      <img src="./imagenes/sisco/servicio.png" alt="recaudaciones" width="180" height="160">
      <div>
        <div>
          <h3 class="fs-3 mt-4 px-4 pb-1 fw-bold">Seguimiento a Trámites</h3>
          <p class="fs-4 px-4 m-0">Seguimiento a Trámites Ingresados por Ventanilla Única</p>
          <a href="http://consulta_sisco.elalto.gob.bo/" class="fs-4 fw-bold btn btn-outline-danger mx-4 mt-2">Seguimiento</a>
      </div>
        
      </div>
    </div>
  
  </div>
</section>




<!-- =============================================== -->
<!-- SLIDER DE IMAGENES -->
<!-- =============================================== -->

<section id="actividades" class=" border-bottom border-2 pb-3 pt-3">
  <div class="container w-60 m-auto text-center" id="actividades">
    <h1 data-aos="zoom-in-up" class="fs-2 fw-bold">Actividades <span class="text-danger text-decoration-underline">Relevantes</span></h1>
    <p data-aos="zoom-in-up" class="fs-3 ">Rebaja de impuestos, Capacitaciones gratuitas, Avisos </p>
  </div>
  
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

            <!-- IMAGENES DEBEN TENER EL MISMO TAMAÑO-->

    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="./imagenes/recaudaciones/info.jpg" class="d-block w-50 mx-auto" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
          </div>
      </div>
      <!-- <div class="carousel-item text-center" data-bs-interval="2000">
        <img src="./img/catastro/info.jpg" class="d-block w-50 mx-auto" alt="...">
        <div class="carousel-caption d-none d-md-block">
     
        </div>
      </div> -->
      <div class="carousel-item " data-bs-interval="2000">
        <img src="./imagenes/integral/info.jpg" class="d-block w-50 mx-auto" alt="...">
        <div class="carousel-caption d-none d-md-block">
       
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    
   
</section>


    <!-- =============================================== -->
<!-- UBICACION-->
<!-- =============================================== -->
<section id="ubicacion" class=" pt-3 pb-3">
 <h1 data-aos="zoom-in-up" class="text-danger text-center fs-2 fw-bold text-decoration-underline">Ubicación</h1>
<div id="seccion-direccion" class="border-top border-2 mt-3">
  <div class="mapa"> </div>
  <div>
      <div class="wrapper-local">
          <h2> Edificio JACHA U'TA Avenida Costanera entre puente Bolivia y Avenida Litoral</h2>
          <h2 class="text-danger mb-4" id="typewriter"></h2>
          <p class="fs-4 text-body">Distrito Municipal 1, Ceja calle 2, minibús 230</p>
          <p class="fs-4 text-body">Distrito Municipal 4, Avenida costanera, minibús 236</p>
          <p class="fs-4 text-body">Distrito Municipal 3, Avenida Bolivia, minibús 213</p>
          <section class="d-flex justify-content-start" id="numeros-local">
              <div>
                  <p class="text-danger fs-3 fw-bold">Horarios de Atención</p>
                  <p class="fs-4">De 8:00 a.m. a 16:00 p.m.</p>
              </div>
              <div>
                  <!-- <p class="text-primary fs-5">Temperatura</p>
                  <p>datos</p> -->
              </div>
        </section>
      </div>
  </div>
</div>

</section>



<section id="nosotros" class="container-fluid border-bottom border-2  pt-3 pb-3" >
<h1 data-aos="fade-down" class="text-center "><span class="text-danger">Atencion Ciudadadana es</span>
    
        <p data-aos="fade-down" class="p-3  fs-3 ">
           <span class="text-danger">Atención Ciudadana</span> es el portal Web que permite al ciudadano obtener 
           información sobre los servicios y trámites que se desarrollan en el Gobierno Autónomo 
           Municipal de La Ciudad de El Alto y sus dependencias.       
       </p>  
</section>

  <!--========================================================== -->
                        <!-- SECCION CONTACTOS-->
<!--========================================================== -->

<section id="seccion-contacto" class="border-bottom border-light border-2  pt-3 pb-3">

<!--========================================================== -->
                      <!-- CONTENEDOR DEL FORMULARIO -->
<!--========================================================== -->

  <div data-aos="fade-down" class="container  border-top border-danger " style="max-width: 600px" id="contenedor-formulario" >
      <div class="text-center " id="titulo-formulario">
            <div><img src="./imagenes/buzon.png" alt="" class="w-25 pt-1"></div>
        
        <h2 class="fw-bold">Buzón de Sugerencias</h2>
        <p class="fs-3">Estamos en constante mejora para entregar un mejor servicio a la población déjanos 
          saber tus sugerencias de mejora

        </p>
      </div>

      <form   method="POST" data-netlify="true" action="#">     
            <div class= "mb-3">           
              <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
            </div>
 
          
            <div class="mb-3">            
              <input type="input" class="form-control" id="name" name="name" placeholder="John Doe">
            </div>
      

            <div class="mb-3">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Celular">
            </div>

          <div class="mb-3">       
            <textarea class="form-control" name="message" id="message" placeholder="Mensaje" rows="4"></textarea>
          </div>

          <div class="mb-3">
            <button type="submit" id="boton" class="btn w-100 fs-5 text-ligth">Enviar mensaje por correo electrónico</button>
          </div>

          <div id="icono-w" class="text-center" >
            <a href="http://wa.me/59168018826?text=Hola%20necesito%20informacion%20sobre%20atención%20ciudadana"><i class="bi bi-whatsapp"></i></a>
            <a href="http://wa.me/59168018826?text=Hola%20necesito%20informacion%20sobre%20atención%20ciudadana" type="button" id="boton-w" class="btn w-100 fs-5 text-ligth">Enviar mensaje por Whatsapp</a>
          </div>

      </form>
  
  </div>
  

  
</section>




@endsection