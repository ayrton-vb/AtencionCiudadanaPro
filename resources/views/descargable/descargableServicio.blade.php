@extends('layouts.plantillaBase')

@section('contenido')
    <h1 class="text-center">Descargable</h1>
    <a href="/servicios/{{$id_servicio}}/descargablebyServicioCreate" class="btn btn-primary mb-2">Crear</a>
    <a href="/servicios" class="btn btn-danger mb-2">Volver</a>
    <table id="table" class="table table-light table-striped mt-4">
        <thead class="bg-primary">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Id Servicio</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($descargables as $descargable)
            <tr>
                <td>{{$descargable->id}}</td>
                <td>{{$descargable->nombre}}</td>
                <td>{{$descargable->id_servicio}}</td>
                <td>
                    <form action="{{ route ('descargables.destroy',$descargable->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/Archivos/{{$descargable->nombre}}" class="btn btn-info" target="blank_">Ver</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
