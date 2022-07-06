@extends('layouts.plantillaBase')

@section('contenido')

    <h1 class="text-center">Tramites</h1>
    <a href="tramites/create" class="btn btn-primary mb-2">Crear</a>
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
        @foreach($tramites as $tramite)
            <tr>
                <td>{{$tramite->id}}</td>
                <td>{{$tramite->nombre}}</td>
                <td>{{$tramite->categorias->alias}}</td>
                <td>{{$tramite->categorias->areas->alias}}</td>
                <td>{{$tramite->categorias->areas->direccions->alias}}</td>
                <td>
                    @if($tramite->id==1)
                         <a href="/tramites/{{$tramite->id}}/edit" class="btn btn-info">Ver</a>
                    @else
                        <a href="/tramites/{{$tramite->id}}/edit" class="btn btn-danger">Crear</a>
                    @endif

                </td>
                <td>
                   <form action="{{ route ('tramites.destroy',$tramite->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/tramites/{{$tramite->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
