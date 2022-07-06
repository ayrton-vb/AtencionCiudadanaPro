@extends('layouts.plantillaBase')

@section('contenido')



    <h1 class="text-center">Tramites</h1>
    <a href="requisitos/create" class="btn btn-primary mb-2">Crear</a>
    <table id="table" class="table table-light table-striped mt-4">
        <thead class="bg-primary">
        <tr>
            <th>Id</th>
            <th>dato</th>
            <th>Persona</th>
            <th>Tramite</th>
            <th>Categoria</th>
            <th>Area</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($requisitos as $requisito)
            <tr>
                <td>{{$requisito->id}}</td>
                <td>{{$requisito->dato}}</td>
                <td>{{$requisito->tipoPersonas->nombre}}</td>
                <td>{{$requisito->tramites->alias}}</td>
                <td>{{$requisito->tramites->nombre}}</td>
                <td>{{$requisito->tramites->sobre}}</td>
                <td>{{$requisito->tramites->areaRes}}</td>

            {{--    <td>{{$requisito->tramites->categorias->alias}}</td>
                <td>{{$requisito->tramites->categorias->areas->alias}}</td>
                <td>{{$requisito->tramites->categorias->areas->direccions->alias}}</td>--}}
                <td>
                    <form action="{{ route ('requisitos.destroy',$requisito->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/requisitos/{{$requisito->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
