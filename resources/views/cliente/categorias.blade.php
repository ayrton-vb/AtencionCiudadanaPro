@extends('layouts.plantillaBase')

@section('contenido')

    <section class="d-flex flex-column justify-content-center align-items-center pt-3  text-center w-50 m-auto" id="intro">
    <h1 data-aos="fade-down" class="p-3 fs-2 fw-bold"><span class="text-danger text-decoration-underline">{{$direccionsi->alias}}</span></h1>
    <p data-aos="fade-down" class="p-3  fs-2">
        <span class="text-danger">Categorias</span>
    </p>
</section>

    <section class="d-flex">
        @for ($i = 1; $i <= $areasList[1]; $i++)

            <input type="button" class="btn btn-danger me-2" value="{{$areasByDireccion[$i-1]->alias}}">
        @endfor
    </section>
    <section id="contenidoCategorias">

    </section>


@endsection

