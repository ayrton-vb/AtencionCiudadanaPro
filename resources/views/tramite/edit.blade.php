@extends('layouts.plantillaBase')

@section('contenido')

    <form action="/tramites/{{$tramite->id}}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center">Editar Tramite</h1>


        <div class="container">
            <div class="row">
                <div class="col-6">


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Categoria</label>
                        <input style="display: none" id="categoria" name="id_categoria" type="text" class="form-control" tabindex="1" value="{{$tramite->categorias->id}}">
                        <input id="" name="" type="text" class="form-control" tabindex="1" value="{{$tramite->categorias->alias}}" disabled>

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre del trámite</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$tramite->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">¿De qué se trata el trámite?</label>
                        <input id="sobre" name="sobre" type="text" class="form-control" tabindex="1" value="{{$tramite->sobre}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">¿Cuál es el área responsable?</label>
                        <input id="areaRes" name="areaRes" type="text" class="form-control" tabindex="1" value="{{$tramite->areaRes}}">
                    </div>

                </div>
                <div class="col-6">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">¿Dónde debo iniciar el trámite?</label>
                        <input id="inicio" name="inicio" type="text" class="form-control" tabindex="1" value="{{$tramite->inicio}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">¿Cuáles son los días y horarios de atención?</label>
                        <input id="horario" name="horario" type="text" class="form-control" tabindex="1" value="{{$tramite->horario}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">¿Debo realizar algún pago? ¿Cuánto?</label>
                        <input id="pago" name="pago" type="text" class="form-control" tabindex="1" value="{{$tramite->pago}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">¿Cuánto tiempo dura el trámite?</label>
                        <input id="duracion" name="duracion" type="text" class="form-control" tabindex="1" value="{{$tramite->duracion}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> ¿Qué debo recibir al finalizar el trámite?</label>
                        <input id="termino" name="termino" type="text" class="form-control" tabindex="1" value="{{$tramite->termino}}">
                    </div>

                </div>
            </div>
        </div>


        <a href="/tramites" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Editar</button>
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
