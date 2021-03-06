@extends('layouts.plantillaBase')

@section('contenido')
    <!--========================================================== -->
    <!-- ICONOS -->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 data-aos="fade-down" class="p-3 fs-2 fw-bold"><span class="text-danger text-decoration-underline">{{$servicio->nombre}}</span></h1>

        <div>
            <a data-aos="fade-up" href="/clientes/{{$servicio->categorias->id_area}}/categoriasByArea" type="button" class="btn btn-outline-danger  mx-2 fs-6 m-1  fw-bold">Volver</a>

            <a data-aos="fade-up" id="btnCrearPdf" type="button" class="btn btn-outline-primary  mx-2 fs-6 m-1  fw-bold" href="/pdf/{{$servicio->id}}/pdfrequisitobyServicio">Descargar</a>
        </div>

    </section>



    <!--========================================================== -->
    <!-- REQUISITOS -->
    <!--========================================================== -->

    <section>
        <div class="w-100 pb-5" id="requisito">

            <div class="container">

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end ">
                        <img src="/imagenes/tramites/Recurso 2.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                        </span>
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">Nombre del servicio:</h3>
                        <p class="fs-4">{{$servicio->nombre}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 3.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">??De qu?? se trata el servicio?</h3>
                        <p class="fs-4">{{$servicio->sobre}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 4.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div data-aos="flip-up" data-aos-delay="350" class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">??Cu??l es el ??rea responsable?</h3>
                        <p class="fs-4">{{$servicio->areaRes}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 5.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">??D??nde debo solicitar el servicio?</h3>
                        <p class="fs-4">{{$servicio->inicio}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 6.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">??Cu??les son los d??as y horarios de atenci??n?</h3>
                        <p class="fs-4">{{$servicio->horario}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 7.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">??Cu??les son los requisitos?</h3>

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

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 8.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">??Debo realizar alg??n pago? ??Cu??nto?</h3>
                        <p class="fs-4">{{$servicio->pago}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 9.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">??Cuanto tiempo dura el servicio?</h3>
                        <p class="fs-4">{{$servicio->duracion}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 10.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">??Qu?? debo recibir al t??rmino del servicio?</h3>
                        <p class="fs-4">{{$servicio->termino}}</p>
                    </div>
                </div>

            </div>

        </div>


        </div>
    </section>
@endsection
