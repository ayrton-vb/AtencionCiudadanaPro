@extends('layouts.plantillaBase')

@section('contenido')

    <section class="d-flex flex-column justify-content-center align-items-center pt-3  text-center w-50 m-auto" id="intro">

        <p data-aos="fade-down" class="pt-3  fs-2">
            <span class="text-danger text-decoration-underline">Trámites y servicios de {{$Area->alias}}</span>
        </p>
 
            <a data-aos="fade-up" href="/clientes" type="button" class="btn btn-outline-danger  mx-2 fs-6 m-1  fw-bold mb-3 ">Volver</a>

    </section>

    <section >
        <div class="container">
            <div id="contenidoCategorias" class="row">
                    @foreach($var as $va)
                          <div  class="col-lg-4 col-md-6 col-sm-12 mb-2">
                              <div id="dentro" class="card" >
                                  <div class="card-body">
                                      <div class="images-wrapper">
                                          <img src="/imagenes/recaudaciones/categoria/Recurso {{$va->categorias->id_area}}.png"  alt="...">

                                      </div>
                                      <h5 class="card-title">{{$va->nombre}}</h5>
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

