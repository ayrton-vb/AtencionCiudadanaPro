@extends('layouts.plantillaBase2')

@section('contenido')


    <!--========================================================== -->
    <!-- ICONOS -->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 data-aos="fade-down" class="p-3 fs-2 fw-bold""><span class="text-danger text-decoration-underline">Empadronamiento por actividad económica</span></h1>

        <div>
            <a data-aos="fade-up" href="/clientes/1/categoriasByArea" type="button" class="btn btn-outline-danger  mx-2 fs-6 m-1  fw-bold">Volver</a>
            <button data-aos="fade-up" id="btnCrearPdf" type="button" class="btn btn-outline-primary  mx-2 fs-6 m-1  fw-bold">Descargar</button>
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
                        <img src="/imagenes/tramites/Recurso 2.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                        </span>
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">Nombre del trámite:</h3>
                        <p class="fs-4">Empadronamiento por actividad económica</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 3.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">¿De qué se trata el trámite?</h3>
                        <p class="fs-4">Es el registro de toda actividad económica para la emisión de la licencia de funcionamiento. </p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 4.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div data-aos="flip-up" data-aos-delay="350" class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">¿Cuál es el área responsable?</h3>
                        <p class="fs-4">Unidad de Ingresos Tributarios - Área de actividad económica - Ventanilla 3 ó 4</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 5.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">¿Dónde debo iniciar el trámite?</h3>
                        <p class="fs-4">Jacha Uta
                            Edificio del Gobierno Autónomo Municipal de El Alto.
                            Avenida Costanera a una cuadra del puente Bolivia.
                            Planta Baja - Oficina de ..........
                        </p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 6.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">¿Cuáles son los días y horarios de atención?</h3>
                        <p class="fs-4">De lunes a viernes de 8:00 a 16:00.
                        </p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 7.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">¿Cuáles son los requisitos?</h3>
                        <h6 class="fw-bold">PERSONA NATURAL</h6>
                        <p class="fs-4">
                            - FOLDER Solicitud de Inscripción, más Formularios FUTAE y FUI adquirirlo en CAJA.
                        </p>
                        <p class="fs-4">
                            - Original y Fotocopia de Cedula de Identidad.
                        </p>
                        <p class="fs-4">
                            - Fotocopia Anverso de la Factura de Luz de la Actividad.
                        </p>
                        <p class="fs-4">
                            - Fotocopia del contrato de alquiler y/o pago IMPUESTO del INMUEBLE.
                        </p>
                        <p class="fs-4">
                            - Fotocopia del NIT más Certificado de Inscripción.
                        </p>
                        <p class="fs-4">
                            - RAI, Manifiesto Ambiental, Estudio Acústico, Resolución SEDES, Resolución SEDUCA, Certificado Sanitario, Certificado Zoonosis (Según corresponda). Carnicerías (FUTECRA).
                        </p>
                        <p class="fs-4">
                            - Para terceras personas, se solicitará poder notariado con vigencia de al menos un año.
                        </p>



                        <p>
                        <h6 class="fw-bold">PERSONA JURÍDICA</h6>
                        <p class="fs-4">
                            - FOLDER más Formularios FUTAE y FUI adquirirlo en CAJA.
                        </p>
                        <p class="fs-4">
                            - Fotocopia de Cédula de Identidad del Representante Legal.
                        </p>
                        <p class="fs-4">
                            - Fotocopia LEGALIZADA del Poder Notariado del representante Legal.
                        </p>
                        <p class="fs-4">
                            - Fotocopia del NIT más Certificado de Inscripción.
                        </p>
                        <p class="fs-4">
                            - Fotocopia del Testimonio de Constitución.
                        </p>
                        <p class="fs-4">
                            - Fotocopia de la Factura de Luz de la Actividad.
                        </p>
                        <p class="fs-4">
                            - RAI, Manifiesto Ambiental, Estudio Acústico, Resolución SEDES, Resolución SEDUCA, Certificado Sanitario, Certificado Zoonosis (Según corresponda).
                        </p>
                        <p class="fs-4">
                            - Para terceras personas, se solicitará poder notariado con vigencia de al menos un año.
                        </p>









                        </p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 8.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">¿Debo realizar algún pago? ¿Cuánto?</h3>
                        <p class="fs-4">Si y depende de la actividad económica</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 9.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">¿Cuánto tiempo dura el trámite?</h3>
                        <p class="fs-4">Depende de la fecha de inspección, el registro y la emisión de la licencia de funcionamiento.</p>
                    </div>
                </div>

                <div data-aos="flip-up" data-aos-delay="350" class="row pt-3 pb-3">
                    <div class="col-3 text-end">
                        <img src="/imagenes/tramites/Recurso 10.png" class="card-img-top w-25 mx-auto pt-3 me-5" alt="...">
                    </div>

                    <div class="col-9 pt-4 border-start border-danger  border-5">
                        <h3 class="fw-bold">¿Qué debo recibir al finalizar el trámite?</h3>
                        <p class="fs-4">Licencia de Funcionamiento</p>
                    </div>
                </div>

            </div>

        </div>


        </div>
    </section>


@endsection
