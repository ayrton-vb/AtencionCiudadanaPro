@extends('layouts.plantillaBase2')

@section('contenido')

    <section class="mt-5 d-flex flex-column justify-content-center align-items-center pt-3  text-center w-50 m-auto" id="intro">

        <p data-aos="fade-down" class="pt-3  fs-2">
            <span class="text-danger fw-bold">Trámites y servicios de {{$Area->alias}}</span>
        </p>

            <a data-aos="fade-up" href="/clientes" type="button" class="btn btn-outline-danger  mx-2 fs-6 m-1  fw-bold mb-3 ">Volver</a>

    </section>

    <section >
        <div class="container">
            <div id="contenidoCategorias" class="row">
                    @foreach($categorias as $categoria)
                          <div  class="col-lg-4 col-md-6 col-sm-12 mb-2">
                              <div id="dentro" class="card" >
                                  <div class="card-body">
                                      <div class="images-wrapper">
                                          <img class="imgTamaño mb-0" src="/imagenes/recaudaciones/categoria/Recursos {{$categoria->id_area}}.png"  alt="...">
                                      </div>
                                      <h5 class="card-title mt-0">{{$categoria->alias}}</h5>
                                          <a href="/clientes/{{$categoria->id}}/tramiteByTramiteSucursal" class="fs-4 fw-bold btn btn-outline-secondary mx-4 mt-2">Tramites</a>
                                      
                                  </div>
                              </div>
                          </div>

                @endforeach

            </div>
        </div>




    </section>


@endsection

