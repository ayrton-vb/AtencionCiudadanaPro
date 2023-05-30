@extends('layouts.plantillaBase2')

@section('contenido')

    <section class="mt-5 d-flex flex-column justify-content-center align-items-center pt-3  text-center w-50 m-auto" id="intro">

        <p data-aos="fade-down" class="pt-3  fs-2">
            <span class="text-danger fw-bold">Area {{$Area->alias}}</span>
        </p>

            <a data-aos="fade-up" href="/clientes" type="button" class="btn btn-outline-danger  mx-2 fs-6 m-1  fw-bold">Volver</a>

    </section>

    <section class="d-flex flex-column justify-content-center align-items-center text-center w-50 m-auto" id="intro">
        <p data-aos="fade-down" class="mt-4 fs-2">
            <span class="text-danger fw-bold">Destacados</span>
        </p>
    </section>

    <section>
    <div class="container">
            <div id="contenidoCategorias" class="row">
      
                          <div  class="col-lg-4 col-md-6 col-sm-12 mb-2">
                              <div id="dentro" class="card" >
                                  <div class="cardDestacado card-body">
                                        <h5 class="card-title mt-0">Cronograma Mantenimieto de Luminarias</h5>
                                      <div class="images-wrapperDestacado">
                                      <a title="Los Tejos" href="/Archivos/CRONOGRAMA DE MANTENIMIENTO PRIMERA SEMANA MAYO (1).jpg" target="blank_"><img src="/Archivos/CRONOGRAMA DE MANTENIMIENTO PRIMERA SEMANA MAYO (1).jpg" alt="Cronograma" /></a>
                                    
                                      </div>
                                   
               
                                  </div>
                              </div>
                          </div>

            </div>
        </div>
    </section>

    <section class="d-flex flex-column justify-content-center align-items-center text-center w-50 m-auto" id="intro">
        <p data-aos="fade-down" class="pt-3  fs-2">
            <span class="text-danger fw-bold">Tramites y Servicios</span>
        </p>
    </section>


    <section >
        <div class="container">
            <div id="contenidoCategorias" class="row">
                    @foreach($var as $va)
                          <div  class="col-lg-4 col-md-6 col-sm-12 mb-2">
                              <div id="dentro" class="card" >
                                  <div class="card-body">
                                      <div class="images-wrapper">
                                          <img class="imgTamaño mb-0" src="/imagenes/recaudaciones/categoria/Recursos {{$va->categorias->id_area}}.png"  alt="...">
                                      </div>
                                      <h5 class="card-title mt-0">{{$va->nombre}}</h5>
                                      <p class="card-text">{{$va->sobre}}</p>
                                      @if($tra[1]==1)
                                      <a href="/clientes/{{$va->id}}/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                                      @else
                                          <a href="/clientes/{{$va->id}}/servicioByServicio" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos</a>
                                      @endif
                                  </div>
                              </div>
                          </div>

                @endforeach

            </div>
        </div>
    </section>


@endsection

