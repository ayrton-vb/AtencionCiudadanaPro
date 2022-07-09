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

            <input id="categoria{{$areasByDireccion[$i-1]->id}}" onclick="funcion(categoria{{$areasByDireccion[$i-1]->id}}.value)" type="button" class="btn btn-outline-danger me-2" value="{{$areasByDireccion[$i-1]->alias}}">
        @endfor
    </section>
    <section id="contenidoCategorias">

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
        window.onload = function() {
           var categoria = $("#categoria1").val();

            var html_label = '<label> tramites categoria: '+categoria+'</label>';
            $('#contenidoCategorias').html(html_label);
        };

        function funcion($value){
            var categoria = $value;
            console.log(categoria)
            var html_label = '<label> tramites categoria: '+categoria+'</label>';
            $('#contenidoCategorias').html(html_label);
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

