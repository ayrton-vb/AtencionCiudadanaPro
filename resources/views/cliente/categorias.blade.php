@extends('layouts.plantillaBase')

@section('contenido')

    <section class="d-flex flex-column justify-content-center align-items-center pt-3  text-center w-50 m-auto" id="intro">
    <h1 data-aos="fade-down" class="p-3 fs-2 fw-bold"><span class="text-danger text-decoration-underline">{{$direccionsi->alias}}</span></h1>
    <p data-aos="fade-down" class="p-3  fs-2">
        <span class="text-danger">Categorias</span>
    </p>
</section>

    <section class="d-flex">
       @for ($i = 1; $i <= $areasList[1]; $i++)

            <input id="categoria{{$areasByDireccion[$i-1]->id}}" onclick="funcion({{$areasByDireccion[$i-1]->id}})" type="button" class="btn btn-outline-danger me-2" value="{{$areasByDireccion[$i-1]->alias}}">
        @endfor
    </section>
    <section id="contenidoCategorias2">
        <div id="contenidoCategorias">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
        window.onload = function() {
           var categoria = 1;

     /*       var html_label = '<label> tramites categoria: '+categoria+'</label>';
            $('#contenidoCategorias').html(html_label);*/
            var contenidoCategorias = document.getElementById('contenidoCategorias');

            const card = document.createElement("div");
            divisor.setAttribute("id", "cerrar");

            const divisor2 = document.createElement("p");
            divisor2.setAttribute("id", "abrir");

            divisor.appendChild(divisor2);



            contenidoCategorias.appendChild(divisor);
        };

        function funcion($value){
            var categoria = $value;
            console.log(categoria)
            var html_label = '<label> tramites categoria: '+categoria+'</label>';




            $('#contenidoCategorias').html(html_label);


            $('#contenidoCategorias').appendChild(prueba)

            $.get('/api/tramites/'+categoria+'/area', function (data){
                console.log(data);
                var html_select = '<option  value="">-Selecciona-</option>';
                for (var i=0; i<data.length; i++)
                    html_select += '<option  value="'+data[i].id+'">'+data[i].alias+'</option>';
                $('#area').html(html_select);
            });
        }

        function onSelectDireccion($value){
            var idDireccion = $value;
            console.log(idDireccion);
            if(! idDireccion){
                $('#area').html('<option  value="">-Selecciona-</option>');
                return;
            }
            $.get('/api/tramites/'+idDireccion+'/direccion', function (data){
                console.log(data);
                var html_select = '<option  value="">-Selecciona-</option>';
                for (var i=0; i<data.length; i++)
                    html_select += '<option  value="'+data[i].id+'">'+data[i].alias+'</option>';
                $('#area').html(html_select);
            });
        }
    </script>



@endsection

