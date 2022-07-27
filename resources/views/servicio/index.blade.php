@extends('layouts.plantillaBase')

@section('contenido')

    <h1 class="text-center">Servicios</h1>
    <a href="servicios/create" class="btn btn-primary mb-2">Crear</a>

    <table id="table" class="table table-light table-striped mt-4">
        <thead class="bg-primary">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Area</th>
            <th>Direccion</th>
            <th>Requisitos</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td>{{$servicio->id}}</td>
                <td>{{$servicio->nombre}}</td>
                <td>{{$servicio->categorias->alias}}</td>
                <td>{{$servicio->categorias->areas->alias}}</td>
                <td>{{$servicio->categorias->areas->direccions->alias}}</td>
                <td>
                    <a href="/servicios/{{$servicio->id}}/requisitobyServicio" class="btn btn-dark">Ver</a>
                </td>
                <td>
                   <form action="{{ route ('servicios.destroy',$servicio->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/servicios/{{$servicio->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
