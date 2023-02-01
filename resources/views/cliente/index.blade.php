@extends('layouts.plantillaBase')

@section('contenido')

            
<!-- =============================================== -->
<!-- INTRO-->
<!-- =============================================== -->

<section  class="w-50 mx-auto text-center pt-3 pb-3 " id="intro">
            <h1 data-aos="fade-down" class="p-3 pb-0 fs-2 ">Información  sobre <span class="blueText">servicios y trámites</span>
            del Gobierno Autónomo Municipal de la ciudad de El Alto
            </h1>
</section>


<!-- =============================================== -->
<!-- SERVICIOS categorias-->
<!-- =============================================== -->

<section id="servicios" class="container-fluid pt-3 pb-3">
    <h1 data-aos="zoom-in-up" class="fs-2 text-center fw-bold "><span class="redText text-decoration-underline">Categorías</span>  </h1>
    <div id="contenidoCategorias" class="row w-85 mx-auto servicio-fila ">



    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    window.onload = function() {
     
        $.getJSON("http://ip-api.com/json/?callback=?", function (data) {
    console.log(data.country)
    console.log(data.city)
    console.log(data.lat)
    console.log(data.lon)
    console.log(data.query)
    ;

    $.get('/api/visitas/'+data.country+'/'+data.city+'/'+data.lat+'/'+data.lon+'/'+data.query+'/ip', function (data){
                console.log(data)});
});

            
                // var html_select = '<option  value="">-Selecciona-</option>';
                // for (var i=0; i<data.length; i++)
                //     html_select += '<option  value="'+data[i].id+'">'+data[i].alias+'</option>';
                // $('#area').html(html_select);                                  

            var direccion = 1;
            /*       var html_label = '<label> tramites categoria: '+categoria+'</label>';
                   $('#contenidoCategorias').html(html_label);*/
            var contenidoCategorias = document.getElementById('contenidoCategorias');

            const fracment = document.createDocumentFragment();


            $.get('/api/cliente/areas', function (data){

                for (var i=0; i<data.length; i++){

                    const col = document.createElement("div");
                    col.classList.add("col-lg-4","col-md-12","col-sm-12","my-5","d-flex","icono-wrap");
                    col.setAttribute("data-aos","zoom-in-left");
                    col.setAttribute("data-aos-delay","200");
                    const img = document.createElement("img");
                    img.setAttribute("src", "/imagenes/recaudaciones/categoria/Recursos "+data[i].id+".png");
                    img.setAttribute("width","150");
                    img.setAttribute("height","130");
                    const div = document.createElement("div");
                    const div2 = document.createElement("div");
                    const titulo = document.createElement("h5");
                    titulo.classList.add("fs-5","mt-4","px-4","pb-1","fw-bold");
                    titulo.innerText = data[i].alias;
                    const enlace = document.createElement("a");
                    enlace.classList.add("fs-4","fw-bold", "btn", "btn-outline-secondary", "mx-4", "mt-2");
                    enlace.innerText = "Trámites";
                    enlace.setAttribute("href","/clientes/"+data[i].id+"/categoriasByArea");


                    col.appendChild(img);
                    col.appendChild(div);
                    div.appendChild(div2);
                    div2.appendChild(titulo);
                    div2.appendChild(enlace);

                    fracment.appendChild(col);
                    contenidoCategorias.appendChild(fracment);

                }});




    };


</script>


<!-- =============================================== -->
<!-- TRMITES MAS DEMANDADOS-->
<!-- =============================================== -->

<section  id="TramitesDem" class="container-fluid pt-3 pb-3" >
    <h1 data-aos="fade-down" class="fs-2 text-center fw-bold"><span class="redText text-decoration-underline">Busqueda</span>
    </h1>


    <!-- <div data-aos="fade-right" id="carouselExampleIndicators" class="carousel carousel-dark slide pt-3 pb-3 d-none d-lg-block" data-bs-ride="carousel">
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
                                <img src="/imagenes/recaudaciones/categoria/Recursos 1.png"  alt="...">

                            </div>
                            <h5 class="card-title">Empadronamiento por actividad económica.</h5>
                            <p class="card-text">Es el registro de toda actividad económica para la emisión de la licencia de funcionamiento.</p>
                            <a href="/clientes/1/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                        </div>
                    </div>


                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="/imagenes/recaudaciones/categoria/Recursos 3.png"  alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cambio de radicatoria</h5>
                                <p class="card-text">Cambio de radicación del vehículo de un determinado Gobierno Municipal a otro, (en este caso de cualquier municipio al municipio de El Alto)</p>
                                <a href="clientes/30/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                            </div>
                        </div>

                    </div>

                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="/imagenes/recaudaciones/categoria/Recursos 2.png"  alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Empadronamiento de bienes por cambio de jurisdicción</h5>
                                <p class="card-text">Cuando el ciudadano hace el pago en un municipio que no corresponde.</p>
                                <a href="/clientes/13/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="./imagenes/recaudaciones/categoria/Recursos 3.png" alt="...">

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Duplicado de placa</h5>
                                <p class="card-text">Se trata del duplicado de la placa, el cual se lo realiza por deterioro, pérdida o robo</p>
                                <a href="/clientes/32/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="./imagenes/recaudaciones/categoria/Recursos 4.png"  alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">VISADO DE PLANO DE LOTE PARA CATASTRO</h5>
                                <p class="card-text">Consiste en la otorgación del visto bueno a documentación técnica con datos técnicos de su terreno, una vez perfeccionado su derecho propietario en oficinas de DDR</p>
                                <a href="/clientes/47/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="./imagenes/recaudaciones/categoria/Recursos 4.png"  alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">CERTIFICACIÓN DE NÚMERO DE DOMICILIO</h5>
                                <p class="card-text">Obtención de certificación de número de puerta.</p>
                                <a href="/clientes/62/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="./imagenes/recaudaciones/categoria/Recursos 7.png"  alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Bono Mensual para Personas con Discapacidad Grave y Muy Grave</h5>
                                <p class="card-text">Efectiviza el pago del Bono Mensual para Personas con Discapacidad Grave y Muy Grave del Municipio del Alto.</p>
                                <a href="/clientes/1/servicioByServicio" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="./imagenes/recaudaciones/categoria/Recursos 6.png"  alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">CERTIFICACIÓN DE NÚMERO DE DOMICILIO</h5>
                                <p class="card-text">Obtención de certificación de número de puerta.</p>
                                <a href="/clientes/62/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="./imagenes/recaudaciones/categoria/Recursos 9.png"  alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Capacitación y orientación</h5>
                                <p class="card-text">El objetivo es dar y reforzar conocimientos en jóvenes de 16 a 28 años en diferentes áreas de interés</p>
                                <a href="/clientes/3/servicioByServicio" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                            </div>
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
    </div> -->
<!-- 
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div> -->


<div class="input-group mb-3">

  <input onkeyup ="onBusqueda(busqueda.value);" onkeydown ="onBusqueda2(busqueda.value);" id="busqueda" type="text" class="form-control" placeholder="Palabra Clave" aria-label="Recipient's username" aria-describedby="button-addon2" >
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
  


  
</div>

<section>
<div id="area">
   
</div>
<div id="">
    <div class="container">
        <div id="contenidoBusqueda" class="row">

            
        </div>
    </div>        
</div>
</section>

    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>

        function onBusqueda2($value){

            let cupcakes = Array.prototype.slice.call(document.getElementsByClassName("cupcake"), 0);
  
            for(element of cupcakes){
                console.log(element);
                element.remove();
            }  
            var html_select = '';
            $('#area').html(html_select);

        }


        function onBusqueda($value){

            var palabra = $value;

            var contenidoCategorias = document.getElementById('contenidoBusqueda');
            const fracment = document.createDocumentFragment();

      

            console.log(palabra);
 
            $.get('/api/tramites/'+palabra+'/palabra', function (data){
                console.log(data);


           
    

            for (var i=0; i<data.length; i++){
                var html_select = '<h3  value="">Tramites:</h3></br>';

                const col = document.createElement("div");
                col.setAttribute("id","");
                col.classList.add("col-lg-4", "col-md-6", "col-sm-12", "mb-2", "cupcake");

                const card = document.createElement("div");
                card.setAttribute("id","dentro");
                card.classList.add("card");
                
                const cardBody = document.createElement("div");
                cardBody.classList.add("card-body");
                
                const imagesWra = document.createElement("div");
                imagesWra.classList.add("images-wrapper");
                
                const img = document.createElement("img");
                const idCategoria = data[i].id_categoria;
                const area = 0;


                img.setAttribute("src", "/imagenes/tramites/Recursos 7.png");
                
                const h5 = document.createElement("h5");
                h5.classList.add("card-title");
                h5.innerText = data[i].nombre;
                
                const p = document.createElement("p");
                p.classList.add("card-text");
                p.innerText = data[i].sobre;

                const enlace = document.createElement("a");
                enlace.classList.add("fs-4", "fw-bold", "btn","btn-outline-secondary","mx-4","mt-2");
                enlace.innerText = "Requisitos";
                enlace.setAttribute("href","/clientes/"+data[i].id+"/tramiteByTramite");


                col.appendChild(card);
                card.appendChild(cardBody);
                cardBody.appendChild(imagesWra);
                imagesWra.appendChild(img);

                cardBody.appendChild(h5);
                cardBody.appendChild(p);
                cardBody.appendChild(enlace);

                
                fracment.appendChild(col);
            
                contenidoCategorias.appendChild(fracment);
            
            
                    
            $('#area').html(html_select);

                console.log(html_select);


       
            }});


        }


       
    </script>



    <!-- =============================================== -->
    <!-- TRMITES MAS DEMANDADOS 2-->
    <!-- =============================================== -->


    <div data-aos="fade-right" id="carouselExampleIndicators2" class="carousel carousel-dark slide pt-3 pb-3 d-lg-none" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="cards-wrapper">
                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="/imagenes/recaudaciones/categoria/Recurso 1.png"  alt="...">

                            </div>
                            <h5 class="card-title">Empadronamiento por actividad económica.</h5>
                            <p class="card-text">Es el registro de toda actividad económica para la emisión de la licencia de funcionamiento.</p>
                            <a href="/clientes/1/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="./imagenes/recaudaciones/categoria/Recurso 3.png" alt="...">

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Duplicado de placa</h5>
                                <p class="card-text">Se trata del duplicado de la placa, el cual se lo realiza por deterioro, pérdida o robo</p>
                                <a href="/clientes/32/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="./imagenes/recaudaciones/categoria/Recurso 3.png" alt="...">

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cambio de radicatoria</h5>
                                <p class="card-text">Cambio de radicación del vehículo de un determinado Gobierno Municipal a otro, (en este caso de cualquier municipio al municipio de El Alto)o</p>
                                <a href="/clientes/30/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</section>




<!-- =============================================== -->
<!-- PUNTOS DE ATENCION -->
<!-- =============================================== -->
<section id="ubicacion" class=" pt-3">
 <h1 data-aos="zoom-in-up" class="redText text-center fs-2 fw-bold text-decoration-underline">Puntos de Atención</h1>

 <div id="seccion-direccion" class="mt-3">
  <!-- <div class="mapa"> </div> -->
  
  <div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7650.369027973927!2d-68.21930977677047!3d-16.51677994473054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edfa8d350a625%3A0x5851be5b6c74cbde!2sAlcald%C3%ADa%20de%20El%20Alto%20%22Jach&#39;a%20Uta%22!5e0!3m2!1ses!2sbo!4v1664895689610!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div>
      <div class="wrapper-local">
          <h2> Edificio JACHA U'TA Avenida Costanera entre puente Bolivia y Avenida Litoral</h2>
 
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

<div id="seccion-direccion" class="">
  <!-- <div class="mapa"> </div> -->
  
  <div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.139134034695!2d-68.17632711313618!3d-16.519072043319053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf634acbe9f5%3A0xd40509c954aacfb6!2sTerminal%20Metropolitana%20de%20El%20Alto!5e0!3m2!1ses!2sbo!4v1664895976620!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div>
      <div class="wrapper-local">
          <h2>Terminal Metropolitana El Alto, Av. Ladislao Cabrera - Av Panamericana El Alto</h2>

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


<!-- =============================================== -->
<!-- SECCION SOBRE-->
<!-- =============================================== -->

<!-- <section id="nosotros" class="container-fluid pt-3 pb-3" >
    <h1 data-aos="fade-down" class="text-center "><span class="text-danger">Atencion Ciudadadana </span></h1>

        <p data-aos="fade-down" class="text-center p-3  fs-3 ">
            <span class="text-danger">Portal Web</span> que permite ala ciudadania obtener
           información sobre los servicios y trámites que se desarrollan en el Gobierno Autónomo
           Municipal de La Ciudad de El Alto y sus dependencias.
       </p>
</section> -->

  <!--========================================================== -->
                        <!-- SECCION CONTACTOS-->
<!--========================================================== -->

<section id="seccion-contacto" class="pb-3">

    <div class="container">
        <div class="row">
            <div class="col-sx-12 col-md-6">
                <!--========================================================== -->
                <!-- CONTENEDOR DEL NUMEROS DE COTACTO -->
                <!--========================================================== -->
                <div id="numeros-contacto" class="container d-flex h-100 align-items-center">
                    <div id="numeros-dependencias w-50">
                        <h5 class="text-white text-center fw-bold">Números de Contacto  </h5>
                        <div id="contactoNumero" class="text-center">
                            <img src="/imagenes/atencionCiudadana/servicioB.png" class="" style="width: 20%">
                            <h6 class="text-center text-white">Direccion de Atencion Ciudadana</h6>
                            <h6 class="text-center text-white">22837573</h6>
                        </div>
                        <div id="contactoNumero" class="text-center">
                            <img src="/imagenes/recaudaciones/servicioB.png" class="w-25">
                            <h6 class="text-center text-white">Direccion de Recaudaciones</h6>
                            <h6 class="text-center text-white">22837682</h6>
                        </div>
                        <div id="contactoNumero" class="text-center">
                            <img src="/imagenes/catastro/servicioB.png" class="w-25">
                            <h6 class="text-center text-white">Direccion de Catastro</h6>
                            <h6 class="text-center text-white">22837421</h6>
                        </div>
                        <div id="contactoNumero" class="text-center">
                            <img src="/imagenes/integral/servicioB.png" class="w-25">
                            <h6 class="text-center text-white">Direccion de Desarrollo Integral</h6>
                            <h6 class="text-center text-white">22837410</h6>
                        </div>

                    </div>
                    <div id="numeros-emergencia w-50 ">
                        <h5 class="text-white text-center fw-bold " >Números de Emergencia</h5>
                        <div id="contactoNumero" class="text-center">
                            <img src="/imagenes/emergencia.png" class="w-25">
                            <h6 class="text-center">Adulto Mayor</h6>
                            <h6 class="text-center">800164444</h6>
                        </div>
                        <div id="contactoNumero" class="text-center">
                            <img src="/imagenes/emergencia.png" class="w-25">
                            <h6 class="text-center">Dirección de  Niñez Genero y Atención Social</h6>
                            <h6 class="text-center">22837408</h6>
                        </div>
                        <div id="contactoNumero" class="text-center">
                            <img src="/imagenes/emergencia.png" class="w-25">
                            <h6 class="text-center">S.U.M.A.</h6>
                            <h6 class="text-center">161</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sx-12 col-md-6">
                <!--========================================================== -->
                <!-- CONTENEDOR DEL FORMULARIO -->
                <!--========================================================== -->
                <div id="contenedor-formulario" class="container">

                
                    <div class="text-center text-white">
                        <div><img src="./imagenes/buzon.png" alt="" class="w-25 pt-1"></div>

                        <h3 class="fw-bold">Buzón de Sugerencias</h3>
                        <p class="fs-4">Estamos en constante mejora para entregar un mejor servicio a la población déjanos
                            saber tus sugerencias de mejora

                        </p>
                    </div>


                    <form   action="" method="">
           
                        <div class= "mb-3 d-flex">
                            <input type="email" class="form-control w-50 me-1"  id="email" name="email" placeholder="correoEjemplo@ejemplo.com">
                            <input type="input" class="form-control w-50" id="name" name="name" placeholder="Nombre Completo">
                        </div>


                        <div class="mb-3">
                            <textarea class="form-control" name="message" id="message" placeholder="Mensaje" rows="4"></textarea>
                        </div>

                        <div class="mb-3 d-flex">

                            <input type="tel" class="form-control w-50 me-1" name="phone" id="phone" placeholder="Celular">

                            <!-- <button type="submit" id="boton" class="btn w-50 fs-5 text-ligth">Enviar mensaje</button> -->

                            <button href="clientes"  type="" id="boton" class="btn w-50 fs-5 text-ligth">mensaje</button>
                        </div>

                        <div id="icono-w" class="mb-3 d-flex justify-content-center">
                            <a   href="http://wa.me/59167158245?text=Hola%20necesito%20informacion%20sobre%20atención%20ciudadana">
                                <i class="bi bi-whatsapp "></i>
                            </a>
                            <a href="http://wa.me/59167158245?text=Hola%20necesito%20informacion%20sobre%20atención%20ciudadana" type="button" id="boton-w" class="btn w-50 fs-5 text-ligth">
                                Whatsapp
                            </a>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>









</section>




@endsection
