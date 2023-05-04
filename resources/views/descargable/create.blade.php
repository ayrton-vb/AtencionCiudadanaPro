@extends('layouts.plantillaBase')

@section('contenido')

    <form action="/descargables" method="POST" enctype="multipart/form-data">
        @csrf
        <select  id="id_tramite" name="id_tramite" class="form-select"  aria-label="Default select example">
            <option value="{{$tramite->id}}">{{$tramite->nombre}}</option>
        </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descargable del Tramite</label>
      
        </div>
        <div class="mb-3">
          

            <input id="nombre" name="nombre" type="file" class="form-control">

        </div>
        <a href="/tramites/{{$tramite->id}}/descargablebyTramite" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection
