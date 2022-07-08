@extends('layouts.plantillaBase')

@section('contenido')

    <form action="/requisitos" method="POST">
        @csrf
        <select  id="id_tramite" name="id_tramite" class="form-select"  aria-label="Default select example">
            <option value="{{$tramite->id}}">{{$tramite->nombre}}</option>
        </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Requisito del trámite</label>
            <input id="dato" name="dato" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categoria</label>
            <select  id="id_tipoPersona" name="id_tipoPersona" class="form-select" aria-label="Default select example" tabindex="1">
                <option value="">-Seleccione-</option>
                @foreach($tipoPersonas as $tipoPersona)
                    <option  value="{{$tipoPersona->id}}">{{$tipoPersona->nombre}}</option>
                @endforeach
            </select>
        </div>
        <a href="/tramites/{{$tramite->id}}/requisitobyTramite" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection
