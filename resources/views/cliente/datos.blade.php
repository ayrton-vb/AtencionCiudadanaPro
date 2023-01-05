@extends('layouts.plantillaBase2')

@section('contenido')
    <!--========================================================== -->
    <!-- ICONOS -->
    <!--========================================================== -->


    <section class="mt-5 d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 data-aos="fade-down" class="p-3 fs-2 fw-bold"><span class="text-danger fw-bold">{{$tramite->nombre}}</span></h1>

        <div>
            <a data-aos="fade-up" href="/clientes/{{$tramite->categorias->id_area}}/categoriasByArea" type="button" class="btn btn-outline-danger  mx-2 fs-6 m-1  fw-bold">Volver</a>

            <a data-aos="fade-up" id="btnCrearPdf" type="button" class="btn btn-outline-primary  mx-2 fs-6 m-1  fw-bold" href="/pdf/{{$tramite->id}}/pdfrequisitobyTramite">Descargar</a>
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
                        <img src="/imagenes/tramites/Recursos 2.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                        </span>
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold redText">Nombre del trámite:</h3>
                        <p class="fs-4">{{$tramite->nombre}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recursos 3.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold redText">¿De qué se trata el trámite?</h3>
                        <p class="fs-4">{{$tramite->sobre}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recursos 4.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div data-aos="flip-up" data-aos-delay="350" class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold redText">¿Cuál es el área responsable?</h3>
                        <p class="fs-4">{{$tramite->areaRes}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recursos 5.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold redText">¿Dónde debo iniciar el trámite?</h3>
                        <p class="fs-4">{{$tramite->inicio}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recursos 6.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold redText">¿Cuáles son los días y horarios de atención?</h3>
                        <p class="fs-4">{{$tramite->horario}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recursos 7.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold redText">¿Cuáles son los requisitos?</h3>

                        @for ($i = 0; $i < $var2; $i++)

                                <p id="{{$var[$i]->nombre}}" class="fs-4 fw-bold redText">{{$var[$i]->nombre}}</p>


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
                        <img src="/imagenes/tramites/Recursos 8.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold redText">¿Debo realizar algún pago? ¿Cuánto?</h3>
                        <p class="fs-4">{{$tramite->pago}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recursos 9.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold redText">¿Cuánto tiempo dura el trámite?</h3>
                        <p class="fs-4">{{$tramite->duracion}}</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recursos 10.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold redText">¿Qué debo recibir al finalizar el trámite?</h3>
                        <p class="fs-4">{{$tramite->termino}}</p>
                    </div>
                </div>

            </div>

        </div>


        </div>
    </section>
@endsection
