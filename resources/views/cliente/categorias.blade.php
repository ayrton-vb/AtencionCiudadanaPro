@extends('layouts.plantillaBase')

@section('contenido')

    <section class="d-flex flex-column justify-content-center align-items-center pt-3  text-center w-50 m-auto" id="intro">

        <p data-aos="fade-down" class="p-3  fs-2">
            <span class="text-danger">Tramites {{$Area->alias}}</span>
        </p>
    </section>

    <section >
        <div class="container">
            <div id="contenidoCategorias" class="row">
                    @foreach($var as $va)
                          <div  class="col-4 mb-2">
                              <div id="dentro" class="card" >
                                  <div class="card-body">
                                      <div class="images-wrapper">
                                          <img src="/imagenes/recaudaciones/categoria/Recurso {{$va->categorias->id_area}}.png"  alt="...">

                                      </div>
                                      <h5 class="card-title">{{$va->nombre}}</h5>
                                      <p class="card-text">{{$va->sobre}}</p>
                                      @if($tra[1]==1)
                                      <a href="/clientes/{{$va->id}}/tramiteByTramite" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos1</a>
                                      @else
                                          <a href="/clientes/{{$va->id}}/servicioByServicio" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Requisitos2</a>
                                      @endif
                                  </div>
                              </div>
                          </div>

                @endforeach

            </div>
        </div>




    </section>


@endsection

