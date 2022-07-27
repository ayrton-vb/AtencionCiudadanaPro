@extends('layouts.plantillaBase')

@section('contenido')
    <h1 class="text-center">Requisitos</h1>
    <a href="/servicios/{{$idServicio}}/requisitobyServicioCreate" class="btn btn-primary mb-2">Crear</a>
    <a href="/servicios" class="btn btn-danger mb-2">Volver</a>
    <table id="table" class="table table-light table-striped mt-4">
        <thead class="bg-primary">
        <tr>
            <th>Id</th>
            <th>Dato</th>
            <th>Servicio</th>
            <th>Tipo Persona</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($requisitos as $requisito)
            <tr>
                <td>{{$requisito->id}}</td>
                <td>{{$requisito->dato}}</td>
                <td>{{$requisito->servicios->nombre}}</td>
                <td>{{$requisito->tipoPersonas->nombre}}</td>
                <td>
                    <form action="{{ route ('requisitos.destroy',$requisito->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/requisitos/{{$idServicio}}/{{$requisito->id}}/editRequisitobyServicio" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
