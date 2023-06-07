@extends('layouts.plantillaBase2')

@section('contenido')
    <!--========================================================== -->
    <!-- ICONOS -->
    <!--========================================================== -->


    <section class="mt-5 d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 data-aos="fade-down" class="p-3 fs-2 fw-bold"><span class="text-danger fw-bold">PERMISO EXCEPCIONAL PARA CIRCULAR EN EL AREA DE RESTRICCION</span></h1>

        <div>
            <a data-aos="fade-up" href="clientes" type="button" class="btn btn-outline-danger  mx-2 fs-6 m-1  fw-bold">Volver</a>

    
            
            
            <a data-aos="fade-up" id="btnCrearPdf" type="button" class="btn btn-outline-primary  mx-2 fs-6 m-1  fw-bold" href="pdfrestriccion">Descargar</a>
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
                        <p class="">Permiso excepcional para circular en el area de restriccion</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 3.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿De qué se trata el servicio?</h3>
                        <p class="">Otorgar permiso excepcional para circular en el area de restriccion vehicular</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 4.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div data-aos="flip-up" data-aos-delay="350" class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿Cuál es el área responsable?</h3>
                        <p class="">Secretaria Municipal de Movilidad Urbana -
                                Direccion de Regulacion de la Movilidad Urbana
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
                            (Jach'a Uta), piso 4 oficinas de la  Direccion de Regulacion de la Movilidad Urbana.
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
                       
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 7.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿Cuáles son los requisitos?</h3>

                                <p id="" class="fw-bold text-danger">Persona Natural</p>

                                    <p class="">-Nota de solicitud de permiso excepcional debidamente respaldada y justificada con un número de teléfono vinculado a WhatsApp para el seguimiento del trámite.</p>
                                    <p class="">-Fotocopia simple de la Cedula de identidad del propietario y/o poseedor o en su caso del representante legal, el mismo deberá ser acreditado mediante poder notariado para efectuar trámites ante el GAMEA (fotocopia).</p>
                                    <p class="">-Fotocopia simple de la Licencia de conducir con la categoría correspondiente;</p>
                                    <p class="">-Fotocopia simple del Certificado de Propiedad de Registro del Vehículo Automotor RUAT-03</p>
                                    <p class="">-Fotocopia simple de la Póliza de Seguro Obligatorio contra Accidentes de Tránsito (SOAT) vigente;</p>
                                    <p class="">-Fotocopia simple del Certificado de inspección Técnica Vehicular expedido por la Policía Boliviana.</p>
                                    <p class="">-No tener deudas pendientes sobre impuestos a la propiedad del vehículo (adjuntar en fotocopia simple el ultimo formulario de pago de impuesto);</p>
                                    <p class="">-No tener deudas por infracciones pendientes de la Policía Boliviana</p>



                                    <p id="" class="fw-bold text-danger">Persona Juridica</p>

                                    <p class="">-Número de identificación tributaria (fotocopia simple).</p>
                                    <p class="">-Licencia de funcionamiento emitido por la autoridad pertinente (fotocopia simple).<p>
                                    <p class="">-Documentación que vincule la relación laboral entre el solicitante y la entidad pública o privada.</p>
                                    






                            
                    </div>
                </div>

             



                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 9.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">Descargables</h3>
                        <p class="">
                        </p>
                    </div>
                </div>




                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 8.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿Debo realizar algún pago? ¿Cuánto?</h3>
                        <p class=""></p>
                    </div>
                </div>

           
                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-2 text-end">
                        <img src="/imagenes/tramites/Recursos 10.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    </div>

                    <div class="col-10 pt-4 border-start border-danger  border-5 wrapper-tramite">
                        <h3 class="fw-bold text-danger">¿Qué debo recibir al término del servicio?</h3>
                        <p class="">
                        Permiso excepcional para circular en el area de restriccion vehicular
                                               </p>
                    </div>
                </div>

            </div>

        </div>


        </div>
    </section>
@endsection
