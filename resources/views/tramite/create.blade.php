@extends('layouts.plantillaBase')

@section('contenido')

    <form action="/tramites" method="POST">
        @csrf

        <h1 class="text-center">Crear Tramite</h1>



    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                    <select  id="direccion" name="" class="form-select" aria-label="Default select example" onchange="onSelectDireccion(direccion.value);" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($direccions as $direccion)
                            <option  value="{{$direccion->id}}">{{$direccion->alias}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Area</label>
                    <select  id="area" name="" class="form-select" aria-label="Default select example" onchange="onSelectArea(area.value);" tabindex="1">
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Categoria</label>
                    <select  id="categoria" name="id_categoria" class="form-select" aria-label="Default select example" tabindex="1">
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del trámite</label>
                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">¿De qué se trata el trámite?</label>
                    <input id="sobre" name="sobre" type="text" class="form-control" tabindex="1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">¿Cuál es el área responsable?</label>
                    <input id="areaRes" name="areaRes" type="text" class="form-control" tabindex="1">
                </div>

            </div>
            <div class="col-6">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">¿Dónde debo iniciar el trámite?</label>
                    <input id="inicio" name="inicio" type="text" class="form-control" tabindex="1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">¿Cuáles son los días y horarios de atención?</label>
                    <input id="horario" name="horario" type="text" class="form-control" tabindex="1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">¿Debo realizar algún pago? ¿Cuánto?</label>
                    <input id="pago" name="pago" type="text" class="form-control" tabindex="1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">¿Cuánto tiempo dura el trámite?</label>
                    <input id="duracion" name="duracion" type="text" class="form-control" tabindex="1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> ¿Qué debo recibir al finalizar el trámite?</label>
                    <input id="termino" name="termino" type="text" class="form-control" tabindex="1">
                </div>

            </div>
        </div>
    </div>












        <a href="/tramites" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>

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


        function onSelectArea($value){
            var idArea = $value;
            console.log(idArea);
            if(! idArea){
                $('#categoria').html('<option  value="">-Selecciona-</option>');
                return;
            }
            $.get('/api/tramites/'+idArea+'/area', function (data){
                console.log(data);
                var html_select = '<option  value="">-Selecciona-</option>';
                for (var i=0; i<data.length; i++)
                    html_select += '<option  value="'+data[i].id+'">'+data[i].alias+'</option>';
                $('#categoria').html(html_select);
            });
        }
    </script>

@endsection
