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
<h2 class="text-center pb-3">Gobierno Autonomo Municipal de El Alto</h2>


<!--========================================================== -->
<!-- REQUISITOS -->
<!--========================================================== -->



<table class="table">
    <thead>
    <tr>
        <th scope="col-2"></th>
        <th scope="col-4"></th>
        <th scope="col-6"></th>
    </tr>
    </thead>
    <tbody>
    <tr class="border-bottom border-danger" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 2.png') }}" class="w-25" alt="..."></th>
        <td><h3 class="fw-bold w-100">Nombre del trámite:</h3></td>
        <td> <p class="fs-4 w-100">{{$tramite->nombre}}</p></td>

    </tr>
    <tr class="border-bottom border-danger" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 3.png') }}" class="w-25" alt="..."></th>
        <td><h3 class="fw-bold w-100">¿De qué se trata el trámite?</h3></td>
        <td> <p class="fs-4 w-100">{{$tramite->sobre}}</p></td>

    </tr>
    <tr class="border-bottom border-danger" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recurso 4.png') }}" class="w-25" alt="..."></th>
        <td><h3 class="fw-bold w-100">¿Cuál es el área responsable?</h3></td>
        <td> <p class="fs-4 w-100">{{$tramite->areaRes}}</p></td>
    </tr>
    </tbody>
</table>



            <div class="row pt-3 pb-3">
                <div class="col-3 text-end">
                    <img src="/imagenes/tramites/Recurso 5.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                </div>

                <div class="col-9 pt-4 border-start border-danger  border-5">
                    <h3 class="fw-bold">¿Dónde debo iniciar el trámite?</h3>
                    <p class="fs-4">{{$tramite->inicio}}</p>
                </div>
            </div>

            <div class="row pt-3 pb-3">
                <div class="col-3 text-end">
                    <img src="/imagenes/tramites/Recurso 6.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                </div>

                <div class="col-9 pt-4 border-start border-danger  border-5">
                    <h3 class="fw-bold">¿Cuáles son los días y horarios de atención?</h3>
                    <p class="fs-4">{{$tramite->horario}}</p>
                </div>
            </div>

            <div class="row pt-3 pb-3">
                <div class="col-3 text-end">
                    <img src="/imagenes/tramites/Recurso 7.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                </div>

                <div class="col-9 pt-4 border-start border-danger  border-5">
                    <h3 class="fw-bold">¿Cuáles son los requisitos?</h3>

                    @for ($i = 0; $i < $var2; $i++)

                        <p id="{{$var[$i]->nombre}}" class="fs-4 fw-bold text-danger">{{$var[$i]->nombre}}</p>


                        @foreach($requisitos as $requisito)
                            @if($requisito->id_tipoPersona == $var[$i]->id)
                                <p class="fs-4">{{$requisito->dato}}</p>
                            @else
                            @endif
                        @endforeach

                    @endfor



                    {{--  @foreach($tipoPersonas as $tipoPersona)
                          @if(0 == 1)
                              <p id="{{$tipoPersona->nombre}}" class="fs-4 fw-bold text-danger">{{$tipoPersona->nombre}}</p>
                          @else
                          @endif

                          @foreach($requisitos as $requisito)
                              @if($requisito->id_tipoPersona == $tipoPersona->id)
                                  <p class="fs-4">{{$requisito->dato}}</p>
                              @else
                              @endif
                          @endforeach

                      @endforeach--}}


                </div>
            </div>

            <div class="row pt-3 pb-3">
                <div class="col-3 text-end">
                    <img src="/imagenes/tramites/Recurso 8.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                </div>

                <div class="col-9 pt-4 border-start border-danger  border-5">
                    <h3 class="fw-bold">¿Debo realizar algún pago? ¿Cuánto?</h3>
                    <p class="fs-4">{{$tramite->pago}}</p>
                </div>
            </div>

            <div class="row pt-3 pb-3">
                <div class="col-3 text-end">
                    <img src="/imagenes/tramites/Recurso 9.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                </div>

                <div class="col-9 pt-4 border-start border-danger  border-5">
                    <h3 class="fw-bold">¿Cuánto tiempo dura el trámite?</h3>
                    <p class="fs-4">{{$tramite->duracion}}</p>
                </div>
            </div>

            <div class="row pt-3 pb-3">
                <div class="col-3 text-end">
                    <img src="/imagenes/tramites/Recurso 10.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                </div>

                <div class="col-9 pt-4 border-start border-danger  border-5">
                    <h3 class="fw-bold">¿Qué debo recibir al finalizar el trámite?</h3>
                    <p class="fs-4">{{$tramite->termino}}</p>
                </div>
            </div>

        </div>

    </div>


    </div>
</section>



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
