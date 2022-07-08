@extends('layouts.plantillaBase')

@section('contenido')


    <form action="/requisitos/{{$requisito->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categoria</label>
            <input style="display: none" id="id_tramite" name="id_tramite" type="text" class="form-control" tabindex="1" value="{{$tramite->id}}">
            <input id="" name="" type="text" class="form-control" tabindex="1" value="{{$tramite->nombre}}" disabled>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del trámite</label>
            <input id="dato" name="dato" type="text" class="form-control" tabindex="1" value="{{$requisito->dato}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categoria</label>
            <select  id="id_tipoPersona" name="id_tipoPersona" class="form-select" aria-label="Default select example" tabindex="1">
                <option value="{{$requisito->id_tipoPersona}}">{{$requisito->tipoPersonas->nombre}}</option>
                @foreach($tipoPersonas as $tipoPersona)
                    <option value="{{$tipoPersona->id}}">{{$tipoPersona->nombre}}</option>
                @endforeach
            </select>
        </div>
        <a href="/tramites/{{$tramite->id}}/requisitobyTramite" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

@endsection
