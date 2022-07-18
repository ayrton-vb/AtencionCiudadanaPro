<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="{{ asset('css/main2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Hello, world!</title>
</head>
<body>
<h2 class="text-center">Gobierno Autonomo Municipal de El Alto</h2>


<!--========================================================== -->
<!-- REQUISITOS -->
<!--========================================================== -->



<table class="table w-100">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 2.png') }}" class="w-75 mr-3" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">Nombre del trámite:</h5></td>
        <td> <p class="fs-6 w-100">{{$tramite->nombre}}</p></td>

    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 3.png') }}" class="w-75" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿De qué se trata el trámite?</h5></td>
        <td> <p class="fs-6 w-100">{{$tramite->sobre}}</p></td>

    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 4.png') }}" class="w-75" alt="..."></th>
        <td><h2 class="fs-6 fw-bold w-100">¿Cuál es el área responsable?</h2></td>
        <td> <p class="fs-6 w-100">{{$tramite->areaRes}}</p></td>
    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 4.png') }}" class="w-75" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Cuál es el área responsable?</h5></td>
        <td> <p class="fs-6 w-100">{{$tramite->areaRes}}</p></td>
    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 5.png') }}" class="w-75" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Dónde debo iniciar el trámite?</h5></td>
        <td> <p class="fs-6 w-100">{{$tramite->inicio}}</p></td>
    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 6.png') }}" class="w-75" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Cuáles son los días y horarios de atención?</h5></td>
        <td> <p class="fs-6 w-100">{{$tramite->horario}}</p></td>
    </tr>
    <tr class="m-0 p-0" style="margin-bottom: -10px;">
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 7.png') }}" class="w-75" alt="..."></th>
        <td colspan="2"><h5 class="fs-6 fw-bold w-100">¿Cuáles son los requisitos?</h5></td>
        @for ($i = 0; $i < $var2; $i++)

    </tr>
    <tr class="m-0 p-0">
        <th></th>
        <td colspan="2"  class="border-bottom border-danger">
            <p id="{{$var[$i]->nombre}}" class="m-0 p-0 fs-4 fw-bold text-danger w-100">{{$var[$i]->nombre}}</p>
            @foreach($requisitos as $requisito)
                @if($requisito->id_tipoPersona == $var[$i]->id)
    </tr>
    <tr class="m-0 p-0">
        <th></th>
        <td colspan="2"><p class="fs-6 m-0 p-0 w-100">*{{$requisito->dato}}</p></td>
                @else
                @endif
            @endforeach
            @endfor
        </td>
    </tr>

    <tr class="border-bottom border-top border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 8.png') }}" class="w-75" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Debo realizar algún pago? ¿Cuánto?</h5></td>
        <td> <p class="fs-6 w-100">{{$tramite->pago}}</p></td>
    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 9.png') }}" class="w-75" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Cuánto tiempo dura el trámite?</h5></td>
        <td> <p class="fs-6 w-100">{{$tramite->duracion}}</p></td>
    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 10.png') }}" class="w-75" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Qué debo recibir al finalizar el trámite?</h5></td>
        <td> <p class="fs-6 w-100">{{$tramite->termino}}</p></td>
    </tr>

    </tbody>
</table>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
