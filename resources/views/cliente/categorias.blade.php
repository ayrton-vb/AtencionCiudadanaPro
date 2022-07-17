@extends('layouts.plantillaBase')

@section('contenido')

    <section class="d-flex flex-column justify-content-center align-items-center pt-3  text-center w-50 m-auto" id="intro">
        <h1 data-aos="fade-down" class="p-3 fs-2 fw-bold"><span class="text-danger text-decoration-underline">{{$direccionsi->alias}}</span></h1>
        <p data-aos="fade-down" class="p-3  fs-2">
            <span class="text-danger">Categorias</span>
        </p>
    </section>

    <section class="d-flex mb-4">
        @for ($i = 1; $i <= $areasList[1]; $i++)

            <input id="categoria{{$areasByDireccion[$i-1]->id}}" onclick="funcion({{$areasByDireccion[$i-1]->id}})" type="button" class="btn btn-outline-danger me-2" value="{{$areasByDireccion[$i-1]->alias}}">
        @endfor
    </section>
    <section >
        <div class="container">
            <div id="contenidoCategorias" class="row">

      {{--          <div  class="col-3 mb-2">
                    <div id="dentro" class="card" >
                        <div class="card-body">
                            <div class="images-wrapper">
                                <img src="/imagenes/recaudaciones/categoria/Recurso 2.png"  alt="...">

                            </div>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Detalles</a>
                        </div>
                    </div>
                </div>--}}

            </div>
        </div>




    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
        window.onload = function() {
            if(document.getElementById('categoria1')){
                var categoria = 1;
                /*       var html_label = '<label> tramites categoria: '+categoria+'</label>';
                       $('#contenidoCategorias').html(html_label);*/
                var contenidoCategorias = document.getElementById('contenidoCategorias');

                const fracment = document.createDocumentFragment();

                $.get('/api/tramites/'+categoria+'/area2', function (data){
                    console.log(data);
                    console.log(data.length);
                    var html_select = '<option  value="">-Selecciona-</option>';
                    for (var i=0; i<data.length; i++){
                        // html_select += '<option  value="'+data[i].id+'">'+data[i].alias+'</option>';
                        const col = document.createElement("div");
                        col.classList.add("col-3","mb-2");
                        const card = document.createElement("div");
                        card.classList.add("card");
                        card.setAttribute("id","dentro");
                        const cardBody = document.createElement("div");
                        cardBody.classList.add("card-body");
                        const imagesWrapper = document.createElement("div");
                        imagesWrapper.classList.add("images-wrapper");
                        const img = document.createElement("img");
                        img.classList.add("images-wrapper");
                        img.setAttribute("src", "/imagenes/recaudaciones/categoria/Recurso "+categoria+".png");
                        const cardTitle = document.createElement("h5");
                        cardTitle.classList.add("card-title","mt-1");
                        cardTitle.innerText = data[i].nombre;
                        const cardText = document.createElement("p");
                        cardText.classList.add("card-text");
                        cardText.innerText = "contenido";
                        const enlace = document.createElement("a");
                        enlace.classList.add("fs-6","fw-bold", "btn", "btn-outline-secondary", "mx-4", "mt-2");
                        enlace.innerText = "Requisitos";
                        enlace.setAttribute("href","/clientes/"+data[i].id+"/tramiteByTramite");


                        col.appendChild(card);
                        card.appendChild(cardBody);
                        cardBody.appendChild(imagesWrapper);
                        imagesWrapper.appendChild(img);
                        cardBody.appendChild(cardTitle);
                        cardBody.appendChild(cardText);
                        cardBody.appendChild(enlace);

                        fracment.appendChild(col);
                        contenidoCategorias.appendChild(fracment);

                    }});


                console.log(fracment);
            }




        };

        function funcion($value){
            var categoria = $value;
            console.log(categoria)

            var contenidoCategorias = document.getElementById('contenidoCategorias');
            contenidoCategorias.innerHTML="";

            const fracment = document.createDocumentFragment();




        $.get('/api/tramites/'+categoria+'/area2', function (data){
            console.log(data);
            console.log(data.length);

            for (var i=0; i<data.length; i++){
                // html_select += '<option  value="'+data[i].id+'">'+data[i].alias+'</option>';
                const col = document.createElement("div");
                col.classList.add("col-3","mb-2");
                const card = document.createElement("div");
                card.classList.add("card");
                card.setAttribute("id","dentro");
                const cardBody = document.createElement("div");
                cardBody.classList.add("card-body");
                const imagesWrapper = document.createElement("div");
                imagesWrapper.classList.add("images-wrapper");
                const img = document.createElement("img");
                img.classList.add("images-wrapper");
                img.setAttribute("src", "/imagenes/recaudaciones/categoria/Recurso "+categoria+".png");
                const cardTitle = document.createElement("h5");
                cardTitle.classList.add("card-title","mt-1");
                cardTitle.innerText = data[i].nombre;
                const cardText = document.createElement("p");
                cardText.classList.add("card-text");
                cardText.innerText = "contenido";
                const enlace = document.createElement("a");
                enlace.classList.add("fs-6","fw-bold", "btn", "btn-outline-secondary", "mx-4", "mt-2");
                enlace.innerText = "Requisitos";
                enlace.setAttribute("href","/clientes/"+data[i].id+"/tramiteByTramite");


                col.appendChild(card);
                card.appendChild(cardBody);
                cardBody.appendChild(imagesWrapper);
                imagesWrapper.appendChild(img);
                cardBody.appendChild(cardTitle);
                cardBody.appendChild(cardText);
                cardBody.appendChild(enlace);

                fracment.appendChild(col);
                contenidoCategorias.appendChild(fracment);

            }});
        }
    </script>



@endsection

