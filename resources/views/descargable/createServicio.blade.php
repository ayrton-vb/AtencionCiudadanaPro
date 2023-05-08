@extends('layouts.plantillaBase')

@section('contenido')

    <form action="/descargables2" method="POST" enctype="multipart/form-data">
        @csrf
        <select  id="id_servicio" name="id_servicio" class="form-select"  aria-label="Default select example">
            <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
        </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descargable del Tramite</label>
      
        </div>
        <div class="mb-3">
          

            <input id="nombre" name="nombre" type="file" class="form-control">

        </div>
        <a href="/servicios/{{$servicio->id}}/descargablebyServicio" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection
