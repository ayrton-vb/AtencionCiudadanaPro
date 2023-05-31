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

<section id="" class="container-fluid pt-3 pb-3">
    <h1 data-aos="zoom-in-up" class="fs-2 text-center fw-bold "><span class="redText text-decoration-underline">Nuevo Trámite</span>  </h1>
    <div data-aos="fade-down"  class="card mb-3 mx-auto " style="max-width: 540px;">
        <div class="row g-0">
             <div class="images-wrapper ">
             <img src="/imagenes/LOGOFOREPRO.png" class="img-fluid rounded-start pt-1" alt="...">
            </div>
          
            <div class="col-md-12">
            <div class="card-body">
                <h5 class="card-title">FIDEICOMISO FOREPRO - GAMEA</h5>
                <p class="card-text">Acceso a unidades económica productivas y artesanos a un crédito de Fomento</p>
                <p class="card-text"><small class="text-muted">Objetivo: Otorgar créditos para la Reactivación Económica de la Producción Local 
                    y las Actividades Productivas en el Municipio de El Alto.</small></p>
                    <a href="ervicioForepro" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
            </div>
            
            </div>
        </div>
    </div>
</section>

</br>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




</br>



<!-- =============================================== -->
<!-- SERVICIOS categorias-->
<!-- =============================================== -->

<section id="" class="container-fluid pt-3 pb-3">
    <h1 data-aos="zoom-in-up" class="fs-2 text-center fw-bold "><span class="redText text-decoration-underline">Categorías</span>  </h1>
    <div data-aos="zoom-in-up" id="contenidoCategorias" class="row mx-auto servicio-fila border border-3 border-danger rounded-3">

    <div id="contenidoTitulo" class="">
    </div>

    </div>


    <div data-aos="zoom-in-up" id="contenidoCategorias2" class="row mx-auto servicio-fila border border-3 border-danger rounded-3 mt-2 ">

    <div id="contenidoTitulo2" class="">
    </div>

    </div>


    <div data-aos="zoom-in-up" id="contenidoCategorias3" class="row mx-auto servicio-fila border border-3 border-danger rounded-3 mt-2">

    <div id="contenidoTitulo3" class="">
    </div>

    </div>


    <div data-aos="zoom-in-up" id="contenidoCategorias4" class="row mx-auto servicio-fila border border-3 border-danger rounded-3 mt-2">

    <div id="contenidoTitulo4" class="">
    </div>
    <div id="contenidoTitulo5" class="">
    </div>

    </div>


</section>



<section >
        <div class="container">
        <h1 data-aos="zoom-in-up" class="fs-2 text-center fw-bold "><span class="redText text-decoration-underline">Trámites Nuevos</span>  </h1>
            <div id="contenidoTramitesNuevos" class="row">


            </div>
        </div>
    </section>





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
                });
    });

            
                // var html_select = '<option  value="">-Selecciona-</option>';
                // for (var i=0; i<data.length; i++)
                //     html_select += '<option  value="'+data[i].id+'">'+data[i].alias+'</option>';
                // $('#area').html(html_select);                                  

            var direccion = 1;
            var direccion2 = 2;
            var direccion3 = 3;
            var direccion4 = 4;
            var direccion5 = 5;

        

            /*       var html_label = '<label> tramites categoria: '+categoria+'</label>';
                   $('#contenidoCategorias').html(html_label);*/
            var contenidoCategorias = document.getElementById('contenidoCategorias');
            var contenidoTramitesNuevos = document.getElementById('contenidoTramitesNuevos');
            var contenidoTitulo = document.getElementById('contenidoTitulo');

            var contenidoCategorias2 = document.getElementById('contenidoCategorias2');
            var contenidoTitulo2 = document.getElementById('contenidoTitulo2');

            var contenidoCategorias3 = document.getElementById('contenidoCategorias3');
            var contenidoTitulo3 = document.getElementById('contenidoTitulo3');

            var contenidoCategorias4 = document.getElementById('contenidoCategorias4');
            var contenidoTitulo4 = document.getElementById('contenidoTitulo4');


            const fracment = document.createDocumentFragment();
            const fracment2 = document.createDocumentFragment();

            const fracment3 = document.createDocumentFragment();

            const fracment4 = document.createDocumentFragment();
            const fracment5 = document.createDocumentFragment();

            const fracment6 = document.createDocumentFragment();
            const fracment7 = document.createDocumentFragment();

            const fracment8 = document.createDocumentFragment();
            const fracment9 = document.createDocumentFragment();

            const fracment10 = document.createDocumentFragment();



            $.get('/api/cliente/tramitesNuevos', function (data2){
                for (var i=0; i<data2.length; i++){

                    var icono;

                    switch (data2.id_categoria) {
                    case 1:
                        icono=1;
                    case 2:
                        icono=1;
                        case 2:
                        icono=1;
                        case 2:
                        icono=1;
                    default:
                     
                    }

                 
                    
                    

                    $.get("/api/cliente/"+data2[i].id_categoria+"/tramitesNuevos2", function (data3){
                        console.log(data3);
                        icono = data3.id_area;
                        console.log(icono);
                        console.log(i);
                        return icono;
                    });

                    console.log(icono);

                    const col2 = document.createElement("div");
                    col2.classList.add("col-lg-2", "col-md-2", "col-sm-6");
                    col2.setAttribute("data-aos","zoom-in-left");
                    col2.setAttribute("data-aos-delay","200");
                    const card2 = document.createElement("div");
                    card2.classList.add("card");
                    card2.setAttribute("id","dentro");
                    const cardBody2 = document.createElement("div");
                    cardBody2.classList.add("card-body");
                    const imagWrapper2 = document.createElement("div");
                    imagWrapper2.classList.add("images-wrapper");
                    const img2 = document.createElement("img");
                    img2.classList.add("imgTamaño", "mb-0");
                    img2.setAttribute("src", "/imagenes/tramites/Recursos 7.png");
                    const titulo2 = document.createElement("h6");
                    titulo2.classList.add("fw-bold");
                    titulo2.classList.add("card-title", "mt-0");
                    titulo2.innerText = data2[i].nombre;

                    const enlace2 = document.createElement("a");
                    enlace2.classList.add("fs-6", "fw-bold", "btn", "btn-outline-secondary", "mx-4", "mt-2");
                    enlace2.innerText = "Requisitos";
                    enlace2.setAttribute("href","/clientes/"+data2[i].id+"/tramiteByTramite");

                    col2.appendChild(card2);
                    card2.appendChild(cardBody2);
                    cardBody2.appendChild(imagWrapper2);
                    imagWrapper2.appendChild(img2);
                    cardBody2.appendChild(titulo2);
                    cardBody2.appendChild(enlace2);


                    fracment2.appendChild(col2);
                    contenidoTramitesNuevos.appendChild(fracment2);
                    

                }
                
            });


 


                $.get("/api/cliente/"+direccion+"/areasByDireccion", function (data){

                    const tituloPrincipal = document.createElement("h1");
                    tituloPrincipal.setAttribute("data-aos","zoom-in-up");
                    tituloPrincipal.classList.add("fs-2","text-center","fw-bold","mt-2");
                    const spam = document.createElement("span");
                    spam.classList.add("redText");
                    spam.innerText = "Recaudaciones";

                    tituloPrincipal.appendChild(spam);
                    fracment3.appendChild(tituloPrincipal);
                    contenidoTitulo.appendChild(fracment3);

                    for (var i=0; i<data.length; i++){    
                        const col = document.createElement("div");
                        col.classList.add("col-lg-4","col-md-12","col-sm-12","my-5","d-flex","icono-wrap","colImagen");
                        col.setAttribute("data-aos","zoom-in-left");
                        col.setAttribute("data-aos-delay","200");
                        const img = document.createElement("img");
                        img.classList.add("imgTamaño");
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

                    $.get("/api/cliente/"+direccion2+"/areasByDireccion", function (data){

                    const tituloPrincipal = document.createElement("h1");
                    tituloPrincipal.setAttribute("data-aos","zoom-in-up");
                    tituloPrincipal.classList.add("fs-2","text-center","fw-bold","mt-2");
                    const spam = document.createElement("span");
                    spam.classList.add("redText");
                    spam.innerText = "Catastro";

                    tituloPrincipal.appendChild(spam);
                    fracment4.appendChild(tituloPrincipal);
                    contenidoTitulo2.appendChild(fracment4);

                    for (var i=0; i<data.length; i++){    
                        const col = document.createElement("div");
                        col.classList.add("col-lg-4","col-md-12","col-sm-12","my-5","d-flex","icono-wrap","colImagen");
                        col.setAttribute("data-aos","zoom-in-left");
                        col.setAttribute("data-aos-delay","200");
                        const img = document.createElement("img");
                        img.classList.add("imgTamaño");
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

                        fracment5.appendChild(col);
                        contenidoCategorias2.appendChild(fracment5);

                    }});


                    $.get("/api/cliente/"+direccion3+"/areasByDireccion", function (data){

                    const tituloPrincipal = document.createElement("h1");
                    tituloPrincipal.setAttribute("data-aos","zoom-in-up");
                    tituloPrincipal.classList.add("fs-2","text-center","fw-bold","mt-2");
                    const spam = document.createElement("span");
                    spam.classList.add("redText");
                    spam.innerText = "Desarrollo Integral";

                    tituloPrincipal.appendChild(spam);
                    fracment5.appendChild(tituloPrincipal);
                    contenidoTitulo3.appendChild(fracment5);

                    for (var i=0; i<data.length; i++){    
                        const col = document.createElement("div");
                        col.classList.add("col-lg-4","col-md-12","col-sm-12","my-5","d-flex","icono-wrap","colImagen");
                        col.setAttribute("data-aos","zoom-in-left");
                        col.setAttribute("data-aos-delay","200");
                        const img = document.createElement("img");
                        img.classList.add("imgTamaño");
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

                        fracment6.appendChild(col);
                        contenidoCategorias3.appendChild(fracment6);

                    }});


                    $.get("/api/cliente/"+direccion4+"/areasByDireccion", function (data){

                    const tituloPrincipal = document.createElement("h1");
                    tituloPrincipal.setAttribute("data-aos","zoom-in-up");
                    tituloPrincipal.classList.add("fs-2","text-center","fw-bold","mt-2");
                    const spam = document.createElement("span");
                    spam.classList.add("redText");
                    spam.innerText = "Otros";

                    tituloPrincipal.appendChild(spam);
                    fracment6.appendChild(tituloPrincipal);
                    contenidoTitulo4.appendChild(fracment6);

                    for (var i=0; i<data.length; i++){    
                        const col = document.createElement("div");
                        col.classList.add("col-lg-4","col-md-12","col-sm-12","my-5","d-flex","icono-wrap","colImagen");
                        col.setAttribute("data-aos","zoom-in-left");
                        col.setAttribute("data-aos-delay","200");
                        const img = document.createElement("img");
                        img.classList.add("imgTamaño");
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

                        fracment7.appendChild(col);
                        contenidoCategorias4.appendChild(fracment7);

                    }});

                    $.get("/api/cliente/"+direccion5+"/areasByDireccion", function (data){

                    for (var i=0; i<data.length; i++){    
                        const col = document.createElement("div");
                        col.classList.add("col-lg-4","col-md-12","col-sm-12","my-5","d-flex","icono-wrap","colImagen");
                        col.setAttribute("data-aos","zoom-in-left");
                        col.setAttribute("data-aos-delay","200");
                        const img = document.createElement("img");
                        img.classList.add("imgTamaño");
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

                        fracment10.appendChild(col);
                        contenidoCategorias4.appendChild(fracment10);

                    }});


    };


</script>


<!-- =============================================== -->
<!-- BUSQUEDA-->
<!-- =============================================== -->

<section  id="" class="container-fluid pt-3 pb-3" >
    <h1 data-aos="fade-down" class="fs-2 text-center fw-bold"><span class="redText text-decoration-underline">Busqueda</span>
    </h1>





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
                col.classList.add("col-lg-3", "col-md-3", "col-sm-6","col-12", "mb-2", "cupcake");

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
                
                const h5 = document.createElement("h6");
                h5.classList.add("fw-bold");
                h5.classList.add("card-title");
                h5.innerText = data[i].nombre;
                
                const p = document.createElement("h6");
                p.classList.add("card-text");
                p.innerText = data[i].sobre;

                const enlace = document.createElement("a");
                enlace.classList.add("fs-6", "fw-bold", "btn","btn-outline-secondary","mx-4","mt-2");
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
<!-- PUNTOS DE ATENCION -->
<!-- =============================================== -->
<section id="ubicacion" class=" pt-3">
 <h1 data-aos="zoom-in-up" class="redText text-center fs-2 fw-bold text-decoration-underline">Puntos de Atención</h1>

 <div id="seccion-direccion" class="mt-3">
  <!-- <div class="mapa"> </div> -->
  
  <div id="mapa_big">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.1889088972666!2d-68.22366828459147!3d-16.516557945531773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edfa8d350a625%3A0x5851be5b6c74cbde!2sAlcald%C3%ADa%20de%20El%20Alto%20%22Jach&#39;a%20Uta%22!5e0!3m2!1ses!2sbo!4v1681150233289!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
  </div>
  <div id="mapa_small">  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.1889088972666!2d-68.22366828459147!3d-16.516557945531773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edfa8d350a625%3A0x5851be5b6c74cbde!2sAlcald%C3%ADa%20de%20El%20Alto%20%22Jach&#39;a%20Uta%22!5e0!3m2!1ses!2sbo!4v1681150233289!5m2!1ses!2sbo" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
  </div>


  <div>
      <div class="wrapper-local">
          <h2> Edificio JACHA U'TA Avenida Costanera entre puente Bolivia y Avenida Litoral</h2>
 
          <section class="d-flex justify-content-start" id="numeros-local">
              <div class="horarios">
                  <p class="text-danger fs-3 fw-bold">Horarios de Atención</p>
                  <p class="fs-4">De 8:00 a.m. a 12:00 p.m. y 14:00 p.m. a 18:00 p.m.</p>
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
  
  <div id="mapa_big2">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.139134034695!2d-68.17632711313618!3d-16.519072043319053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf634acbe9f5%3A0xd40509c954aacfb6!2sTerminal%20Metropolitana%20de%20El%20Alto!5e0!3m2!1ses!2sbo!4v1664895976620!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div id="mapa_small2">  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.103801433186!2d-68.17936698459141!3d-16.52085644564368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edfa123a4c253%3A0x4c217d3abfd9e28c!2sTerminal%20de%20Buses%20El%20Alto!5e0!3m2!1ses!2sbo!4v1681141353534!5m2!1ses!2sbo" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>


  <div>
      <div class="wrapper-local">
          <h2>Terminal Metropolitana El Alto, Av. Ladislao Cabrera - Av Panamericana El Alto</h2>

          <section class="d-flex justify-content-start" id="numeros-local">
              <div class="horarios">
                  <p class="text-danger fs-3 fw-bold">Horarios de Atención</p>
                  <p class="fs-4">De 8:00 a.m. a 12:00 p.m. y 14:00 p.m. a 18:00 p.m.</p>
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

                        <h3 class="fw-bold">Buzón de Sugerencias y Reclamos</h3>
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


    <div id="contactoNumero" class="text-center mx-auto" style="width: 50%;" >
                            <img src="/imagenes/vistas.png" class="w-25">
                            <h4 class="text-white d-flex justify-content-center">Personas que visitaron la página:</h4>
                            <h4 class="text-white text-center">{{$visitas}}</h4>
    </div>






</section>




@endsection
