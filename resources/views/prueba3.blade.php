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



<table class="table w-100" style="margin-top: 50px;">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr class="border-bottom border-danger m-0 p-0" >
    {{ asset('imagenes/escudoElAlto.png') }}
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recursos 2.png') }}" class="w-50 mr-3" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">Nombre del servicio:</h5></td>
        <td> <p class="fs-6 w-100"></p>FIDEICOMISO FOREPRO - GAMEA</td>

    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recursos 3.png') }}" class="w-50" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿De qué se trata el servicio?</h5></td>
        <td> <p class="fs-6 w-100">Otorgar créditos para la Reactivación Económica de la Producción Local y las Actividades Productivas en el Municipio de El Alto.</p></td>

    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recursos 4.png') }}" class="w-50" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Cuál es el área responsable?</h5></td>
        <td> <p class="fs-6 w-100"></p>Secretaría Municipal de Desarrollo Económico -
                            Dirección de Servicios Municipales e Iniciativas Económicas -
                            Unidad de Iniciativas Económicas.</td>
    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recursos 5.png') }}" class="w-50" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Dónde debo solicitar el servicio?</h5></td>
        <td> <p class="fs-6 w-100"></p>Avenida Costanera, Nro.:5022 Urbanización Libertad, entre calle J.J. Torrez y calle Hernán Siles Zuaso Casa Municipal 
                            (Jach'a Uta), a media cuadra de la Estacion de Bomberos, El Alto,
                            5to piso oficina Secretaria Municipal de Desarrollo Económico.</td>
    </tr>
    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recursos 6.png') }}" class="w-50" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Cuáles son los días y horarios de atención?</h5></td>
        <td> <p class="fs-6 w-100">Horas 08:00 A 12:00 y 14:00 A 18:00 de lunes a viernes.</p>
        <p class="fs-6 w-100">Número de Contacto: 64192381</p></td>
   
    </tr>
    <tr class="m-0 p-0" style="margin-bottom: -10px;">
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recursos 7.png') }}" class="w-50" alt="..."></th>
        <td colspan="2"><h5 class="fs-6 fw-bold w-100">¿Cuáles son los requisitos?</h5></td>
    </tr>
    <tr class="m-0 p-0">
        <th></th>
        <td colspan="2">   <p id="" class="m-0 p-0 fs-4 fw-bold text-danger w-100">Persona Natural</p></td>
        </td>
    </tr>
    <tr class="m-0 p-0">
        <th></th>
        <td colspan="2"><p class="fs-6 m-0 p-0 w-100">*Fotocopia de cedula de identidad vigente de los solicitantes y garante (cuando corresponda). </p></td>
        </td>
    </tr>
    <tr class="m-0 p-0">
        <th></th>
        <td colspan="2"><p class="fs-6 m-0 p-0 w-100">*Declaración Patrimonial Jurada por los solicitantes y/o garantes del crédito. </p></td>
        </td>
    </tr>
    <tr class="m-0 p-0">
        <th></th>
        <td colspan="2"><p class="fs-6 m-0 p-0 w-100">*Fotocopia de Factura de los servicios básicos de agua, luz o gas del domicilio. </p></td>
        </td>
    </tr>
    <tr class="m-0 p-0">
        <th></th>
        <td colspan="2"><p class="fs-6 m-0 p-0 w-100">*Croquis de ubicación del domicilio y unidad productiva. </p></td>
        </td>
    </tr>
    <tr class="m-0 p-0">
        <th></th>
        <td colspan="2"><p class="fs-6 m-0 p-0 w-100">*Formulario para el destino del Crédito. </p></td>
        </td>
    </tr>
    <tr class="m-0 p-0">
        <th></th>
        <td colspan="2"><p class="fs-6 m-0 p-0 w-100">*En caso de tener pasivos deberá presentar el Plan de pagos, y las tres últimas bolitas de pago y/o el extracto de préstamo para créditos grupales o extracto. </p></td>
        </td>
    </tr>



    <tr class="border-bottom border-top border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recursos 8.png') }}" class="w-50" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Debo realizar algún pago? ¿Cuánto?</h5></td>
        <td> <p class="fs-6 w-100"></p>No tiene costo.</td>
    </tr>

    <tr class="border-bottom border-danger m-0 p-0" >
        <th scope="row"> <img src="{{ asset('imagenes/tramites/Recursos 10.png') }}" class="w-50" alt="..."></th>
        <td><h5 class="fs-6 fw-bold w-100">¿Qué debo recibir al término del servicio?</h5></td>
        <p class="fs-4">Prestamo FOREPRO </p>
                        <p class="fs-4">
                             Interés y Plazo:                     
                        </p>
                        <p class="fs-4">
                             8% ANUAL y a un plazo de 18 meses                            
                        </p>
                        <p class="fs-4">
                        Monto del Préstamo:                        
                        </p>
                        <p class="fs-4">
                        Mínimo: 10.000,00 (Diez Mil 00/100 Bolivianos); Máximo: 25.000,00 (Veinticinco Mil 00/100 Bolivianos)                          
                        </p>
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
