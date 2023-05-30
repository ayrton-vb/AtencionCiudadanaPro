@extends('layouts.plantillaBase2')

@section('contenido')
    <!--========================================================== -->
    <!-- ICONOS -->
    <!--========================================================== -->


    <section class="mt-5 d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 data-aos="fade-down" class="p-3 fs-2 fw-bold"><span class="text-danger fw-bold">FIDEICOMISO FOREPRO - GAMEA</span></h1>

        <div>
            <a data-aos="fade-up" href="clientes" type="button" class="btn btn-outline-danger  mx-2 fs-6 m-1  fw-bold">Volver</a>

    
            
            
            <a data-aos="fade-up" id="btnCrearPdf" type="button" class="btn btn-outline-primary  mx-2 fs-6 m-1  fw-bold" href="pdfForepro">Descargar</a>
        </div>

    </section>



    <!--========================================================== -->
    <!-- REQUISITOS -->
    <!--========================================================== -->

    <section>
        <div class="w-100 pb-5" id="requisito">

            <div class="container">

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end ">
                        <img src="/imagenes/tramites/Recursos 2.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                        </span>
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">Nombre del servicio:</h3>
                        <p class="">FIDEICOMISO FOREPRO - GAMEA</p>
                          <p class="">
                             Interés y Plazo:                     
                        </p>
                        <p class="">
                             8% ANUAL y a un plazo de 18 meses                            
                        </p>
                        <p class="">
                        Monto del Préstamo:                        
                        </p>
                        <p class="">
                        Mínimo: 10.000,00 (Diez Mil 00/100 Bolivianos); Máximo: 25.000,00 (Veinticinco Mil 00/100 Bolivianos)                          
                        </p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 3.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿De qué se trata el servicio?</h3>
                        <p class="">Otorgar créditos para la Reactivación Económica de la Producción Local y las Actividades Productivas en el Municipio de El Alto.</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 4.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div data-aos="flip-up" data-aos-delay="350" class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿Cuál es el área responsable?</h3>
                        <p class="">Secretaría Municipal de Desarrollo Económico -
                            Dirección de Servicios Municipales e Iniciativas Económicas -
                            Unidad de Iniciativas Económicas.
                        </p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 5.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿Dónde debo solicitar el servicio?</h3>
                        <p class="">Avenida Costanera, Nro.:5022 Urbanización Libertad, entre calle J.J. Torrez y calle Hernán Siles Zuaso Casa Municipal 
                            (Jach'a Uta), a media cuadra de la Estacion de Bomberos, El Alto,
                            planta baja oficinas de FOREPRO.
                        </p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 6.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿Cuáles son los días y horarios de atención?</h3>
                        <p class="">Horas 08:00 A 12:00 y 14:00 A 18:00 de lunes a viernes.</p>
                        <p class="">Número de Contacto: 64192381</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 7.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿Cuáles son los requisitos?</h3>

                                <p id="" class="fw-bold text-danger">Persona Natural</p>

                                    <p class="">-Fotocopia de cedula de identidad vigente de los solicitantes y garante (cuando corresponda). </p>
                                    <p class="">-Declaración Patrimonial Jurada por los solicitantes y/o garantes del crédito.</p>
                                    <p class="">-Fotocopia de Factura de los servicios básicos de agua, luz o gas del domicilio.</p>
                                    <p class="">-Croquis de ubicación del domicilio y unidad productiva.</p>
                                    <p class="">-Formulario para el destino del Crédito.</p>
                                    <p class="">-En caso de tener pasivos deberá presentar el Plan de pagos, y las tres últimas boletas de pago y/o el extracto de préstamo para créditos grupales.</p>







                            
                    </div>
                </div>

             



                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 9.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">Descargables</h3>
                        <p class="">

                        <a class="btn btn-danger" href="/Archivos/jure.docx" target="blank_">Declaracion Jurada</a>
                        <a class="btn btn-info" href="/Archivos/nota.docx" target="blank_">Modelo Nota</a>
                        </p>
                    </div>
                </div>




                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 8.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿Debo realizar algún pago? ¿Cuánto?</h3>
                        <p class="">No tiene costo.</p>
                    </div>
                </div>

           
                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 10.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿Qué debo recibir al término del servicio?</h3>
                        <p class="">
                          Obtener el crédito a FOREPRO, para el capital de operación mediante la entidad financiera Banco Unión S.A. 
                          dirigido a artesanos micro y pequeños empresarios constituidos en el Municipio de El Alto.
                                               </p>
                    </div>
                </div>

            </div>

        </div>


        </div>
    </section>
@endsection
