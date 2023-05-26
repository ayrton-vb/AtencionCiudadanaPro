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

    <title>AtencionCiudadana</title>
</head>
<body style="margin: 0; padding: 0;">


<table class="table w-100" style="margin-bottom: -60px;margin-top: 0; padding-top: 0; ">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr >
        <th scope="row" ><img  style="width: 60px;" src="{{ asset('imagenes/escudoElAlto.png') }}" alt="..."></th>
        <td class="text-end"><img style="width: 80px;" src="{{ asset('imagenes/logoGamea.png') }}" alt="..."></td>
    </tr>
    </tbody>
</table>

<div  class="text-center" ><h2 class="fw-bolder" >Gobierno Autónomo Municipal de El Alto</h2></div>

<!--========================================================== -->
<!-- REQUISITOS -->
<!--========================================================== -->


<div  class="text-center mb-4 mt-4" ><h3 class="fw-bolder" >{{$direcciones->nombre}}</h3></div>



@foreach($areas as $area)


@switch($area->id)

                @case(1)
                    <table class="table w-100 " style="border: solid red 1px">
                        <thead>
                        <tr>
                            <th scope="col" ></th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr class="border-bottom border-danger m-0 p-0" >
                                <th scope="row" class="text-center">
                                    <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                                    <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recursos 1.png') }}">
                                </th>

                            </tr>

                    
                        </tbody>
                    </table>
                    @break



                @case(2)

                <table class="table w-100 " style="border: solid red 1px">
                        <thead>
                        <tr>
                            <th scope="col" ></th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr class="border-bottom border-danger m-0 p-0" >
                                <th scope="row" class="text-center">
                                    <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                                    <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recursos 2.png') }}">
                                </th>

                            </tr>

                    
                        </tbody>
                    </table>

                    @break

                    @case(3)

            <table class="table w-100 " style="border: solid red 1px">
                    <thead>
                    <tr>
                        <th scope="col" ></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr class="border-bottom border-danger m-0 p-0" >
                            <th scope="row" class="text-center">
                                <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                                <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recursos 3.png') }}">
                            </th>

                        </tr>

                
                    </tbody>
                </table>

                @break

                @case(4)

            <table class="table w-100 " style="border: solid red 1px">
                    <thead>
                    <tr>
                        <th scope="col" ></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr class="border-bottom border-danger m-0 p-0" >
                            <th scope="row" class="text-center">
                                <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                                <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recursos 4.png') }}">
                            </th>

                        </tr>

                
                    </tbody>
                </table>

                @break

                @case(5)

            <table class="table w-100 " style="border: solid red 1px">
                    <thead>
                    <tr>
                        <th scope="col" ></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr class="border-bottom border-danger m-0 p-0" >
                            <th scope="row" class="text-center">
                                <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                                <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recursos 5.png') }}">
                            </th>

                        </tr>

                
                    </tbody>
                </table>

                @break

                @case(6)

            <table class="table w-100 " style="border: solid red 1px">
                    <thead>
                    <tr>
                        <th scope="col" ></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr class="border-bottom border-danger m-0 p-0" >
                            <th scope="row" class="text-center">
                                <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                                <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recursos 6.png') }}">
                            </th>

                        </tr>

                
                    </tbody>
                </table>

                @break

                @case(7)

            <table class="table w-100 " style="border: solid red 1px">
                    <thead>
                    <tr>
                        <th scope="col" ></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr class="border-bottom border-danger m-0 p-0" >
                            <th scope="row" class="text-center">
                                <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                                <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recurso 7.png') }}">
                            </th>

                        </tr>

                
                    </tbody>
                </table>

                @break
                @case(8)

            <table class="table w-100 " style="border: solid red 1px">
                    <thead>
                    <tr>
                        <th scope="col" ></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr class="border-bottom border-danger m-0 p-0" >
                            <th scope="row" class="text-center">
                                <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                                <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recursos 8.png') }}">
                            </th>

                        </tr>

                
                    </tbody>
                </table>

                @break
                @case(9)

            <table class="table w-100 " style="border: solid red 1px">
                    <thead>
                    <tr>
                        <th scope="col" ></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr class="border-bottom border-danger m-0 p-0" >
                            <th scope="row" class="text-center">
                                <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                                <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recursos 9.png') }}">
                            </th>

                        </tr>

                
                    </tbody>
                </table>

                @break

                @case(10)

<table class="table w-100 " style="border: solid red 1px">
        <thead>
        <tr>
            <th scope="col" ></th>
        </tr>
        </thead>
        <tbody>

            <tr class="border-bottom border-danger m-0 p-0" >
                <th scope="row" class="text-center">
                    <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                    <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recursos 10.png') }}">
                </th>

            </tr>

    
        </tbody>
    </table>

    @break

    @case(11)

<table class="table w-100 " style="border: solid red 1px">
        <thead>
        <tr>
            <th scope="col" ></th>
        </tr>
        </thead>
        <tbody>

            <tr class="border-bottom border-danger m-0 p-0" >
                <th scope="row" class="text-center">
                    <h3 class="" style="font-size: 20px;">Categoria en el sistema: {{$area->alias}}</h3>
                    <img style="width: 90px;" src="{{ asset('/imagenes/recaudaciones/categoria/Recursos 11.png') }}">
                </th>

            </tr>

    
        </tbody>
    </table>

    @break



                @default

    
@endswitch


@foreach($categorias as $categoria)
@if($categoria->id_area == $area->id)

<table class="table w-100 " style="border: solid red 1px;" >
    <thead>
    <tr>
        <th scope="col-2" style="width: 80px !important;"></th>
        <th scope="col-5" class="w-25"></th>
        <th scope="col-1" class="w-25" style="width:20px !important;"></th>
        <th scope="col-4" ></th>
    </tr>
    </thead>
    <tbody>

        <tr class="border-bottom border-danger m-0 p-0" >
            <th  scope="row"><h2 class="fw-bolder" style="font-size: 15px;" >Area:  </h2></th>
            <td class="d-flex fw-bolder" style=""><h3 class="" style="font-size: 15px;">{{$area->nombre}}</h3></td>
            <td><h3 class="text-center fw-bolder" style="font-size: 15px;">Revizado</h3></td>
            <td><h3 class="text-center fw-bolder" style="font-size: 15px; ">Observaciones</h3></td>
        </tr>

            <tr class="border-bottom border-danger m-0 p-0" >
                <th scope="row"><h2 style="font-size: 15px; min-height: 40px;" class="fw-bolder" >Categoria:  </h2></th>
                <td><h2 class="fw-bolder" style="font-size: 15px;">{{$categoria->nombre}}</h2></td>
                <td style="border: solid 1px red;" class="text-center">
                <div>
                <input type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                </div>
                </td>
                <td style="height:80px !important;"></td>
            </tr>
                <!-- @foreach($tramites as $tramite)
                    @if($tramite->id_categoria == $categoria->id)

                    <tr class="border-bottom border-danger border-top border-danger m-0 p-0" style="" >
                        <th scope="row"><h3 style="font-size: 15px; min-height: 40px;" class="" >Tramite:</h3></th>
                        <td><h3 class="" style="font-size: 15px;">{{$tramite->nombre}}</h3></div> </td>
                        <td style="border: solid 1px red;" class="text-center">
                        <div>
                        <input type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </div>
                        </td>
                        <td></td>
                    </tr>
                 
                    @endif
                @endforeach -->

                
                @foreach($tramites as $tramite)
                    @if($tramite->id_categoria == $categoria->id)
                        <tr class="border-bottom border-danger m-0 p-0" >
                            <th  scope="row"><h3 class="" style="font-size: 15px;" >tramite:  </h3></th>
                            <td class="d-flex" style=""><h3 class="" style="font-size: 15px;">{{$tramite->nombre}}</h3></td>
                            <td style="border: solid 1px red;" class="text-center">
                            <div>
                            <input type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                            </div>
                            </td>
                            <td style="height:80px !important;">
                            </td>
                        </tr>

                        @endif
                    @endforeach
                    
                    


                @foreach($servicios as $servicio)
                    @if($servicio->id_categoria == $categoria->id)

                    <tr class="border-bottom border-danger border-top border-danger m-0 p-0" style="" >
                        <th scope="row"><h3 style="font-size: 15px; min-height: 40px;" class="" >Servicio:</h3></th>
                        <td><h3 class="" style="font-size: 15px;">{{$servicio->nombre}}</h3></div> </td>
                        <td style="border: solid 1px red;" class="text-center">
                        <div>
                        <input type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </div>
                        </td>
                        <td></td>
                    </tr>

                    <tr class="border-bottom border-danger m-0 p-0" >
                        <th  scope="row"><h3 class="" style="font-size: 15px;" >tramite:  </h3></th>
                        <td class="d-flex" style=""><h3 class="" style="font-size: 15px;">{{$tramite->nombre}}</h3></td>
                        <td><h3 class="text-center" style="font-size: 15px;">Revizado</h3></td>
                        <td><h3 class="text-center" style="font-size: 15px; ">Observaciones</h3></td>
                        </tr>

                    <tr class="border-bottom border-danger m-0 p-0" >
                        <th scope="row"><h3 style="font-size: 15px; min-height: 40px;" class="" >Categoria:  </h3></th>
                        <td><h3 class="" style="font-size: 15px;">{{$categoria->nombre}}</h3></td>
                        <td style="border: solid 1px red;" class="text-center">
                        <div>
                        <input type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                        </div>
                        </td>
                        <td></td>
                    </tr>
                    

                


                 
                    @endif
                @endforeach




    </tbody>
</table>

@endif
@endforeach

<table class="table w-100 " style="border: solid red 1px;" >
    <thead>
    <tr>
        <th scope="col-2" ></th>

    </tr>
    </thead>
    <tbody>

        <tr class="m-0 p-0" >
            <th  scope="row"><h3 class="text-center" style="font-size: 15px; height: 100px;" >Validacion de categoria  </h3></th>
           

        </tr>
        <tr class="m-0 p-0" >
         
            <td class="d-flex" style=""><h3 class="text-center" style="font-size: 15px; ">Firma y sello encargado de la validacion</h3></td>

        </tr>
        <tr class="m-0 p-0" >
         
         <td class="d-flex" style=""><h3 class="text-start" style="font-size: 15px; ">Numero de contacto del encargado de la validacion:</h3></td>

     </tr>
    </tbody>
</table>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
@endforeach


<!-- @foreach($areas as $area)
<div  class="primary" ><h4 class="fw-bolder" >Area : {{$area->nombre}}</h3></div> 
    @foreach($categorias as $categoria)
        @if($categoria->id_area == $area->id)
        <div  class="secondary" ><h4 class="fw-bolder" >Categoria : {{$categoria->nombre}}</h3></div> 
            @foreach($tramites as $tramite)
                @if($tramite->id_categoria == $categoria->id)
                 <div  class="Success" ><h6 class="fw-bolder" >Tramite: {{$tramite->nombre}}</h6></div>
                    @foreach($requisitos as $requisito)
                        @if($requisito->id_tramite == $tramite->id)
                                <div  class="Danger" ><h6 class="fw-bolder">{{$requisito->dato}}</h6></div>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endif
    @endforeach
@endforeach -->



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
