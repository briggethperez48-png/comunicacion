@extends('layouts.appA')
@section('title', 'Inicio')
@section('content')
    <section class="margen">
        <div class="mt-5 mb-5 ml-4 mr-4 shadow rounded">
            <div class="bloque" id="General">
                
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center mt-1">
    
                    <div class="EncaImg d-flex justify-content-center justify-content-md-end align-items-center m-2">
                        <img src="{{ asset('img/seminario.png') }}" alt=""
                            class="rounded-circle" 
                            style="max-width: 40%; height: auto; filter: brightness(1); mix-blend-mode: multiply;">
                    </div>

                    <div class="Enca d-flex justify-content-center justify-content-md-end align-items-center pt-3 px-3">
                        <div class="text-left text-md-left"> 
                            <h1>Seminario: Manos que cuidan, manos que salvan</h1>
                            <h2>
                                <b>Manos que cuidan, manos que salvan:</b> la seguridad del paciente comienza contigo.
                            </h2>
                        </div>
                    </div>
                </div>
                <hr>
                    <!-- Contenido -->
                <div class="mt-2">
                        <!-- Introduccion -->
                    <div class="text text-muted mx-4" style="text-align: justify; font-size:18px;">
                        <p>
                            <b>La Secretaría de Salud Pública de la Ciudad de México</b> invita a todo
                            el personal de salud operativo, responsables de calidad, líderes de servicios
                            y enlaces de PCI e interesados al Semianrio <b><i>Manos que cuidan, manos que salvan:
                            la seguridad del paciente comienza contigo.</i></b>
                        </p>
                    </div>
                        <!-- InfoGen -->
                    <div class="row mt-2 mx-2 mx-md-4 text-muted"
                            style="gap:20px;">
                        <!-- Columna 1 -->
                        <div class="col-12 col-sm shadow-sm p-2 rounded-lg">
                            <div><h3>Curso</h3></div>
                            <div class="">
                                <h4>
                                    <i class="fa fa-globe"></i>
                                    Modalidad Virtual  (Zoom)
                                </h4>
                                        <p>
                                            <a href="http://eventos.salud.cdmx.gob.mx/">
                                                http://eventos.salud.cdmx.gob.mx/
                                            </a>
                                        <br>
                                            <a href="https://www.facebook.com/SSaludCdMx/">
                                            https://www.facebook.com/SSaludCdMx/
                                            </a>
                                        </p>
                            </div>
                            <div class="">
                                <h4>
                                    <i class="fa fa-calendar"></i>
                                    Lapso
                                </h4>
                                        <p>
                                            22 de abril
                                        <br>
                                            De 08:00 a 15:30
                                        </p>
                            </div>
                            <div class="">
                                    <h4>
                                        <i class="fa-solid fa-pen-nib"></i>
                                        Evento gratuito
                                    </h4>
                                        <p>
                                            Créditos: 1 (7 horas y media)
                                        </p>
                            </div>
                        </div>
                        <!--Columna 2-->
                        <div class="col-12 col-sm shadow-sm p-2 rounded-lg">
                            <div><h3>Información</h3></div>
                            <div class="">
                                <h4>
                                    <i class="fa fa-pencil"></i>
                                    Inscripción
                                </h4>
                                    <p>
                                        <a href="{{url('/formulario/create')}}">
                                        http://eventos salud.comx.gob.mx/create
                                        </a>
                                    </p>
                            </div>

                            <div class="">
                                <h4>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    Contactos
                                </h4>
                                    <p>
                                        <a href="mailto:voluntad.anticipada.cdmx@gmail.com">
                                        voluntad.anticipada.cdmx@gmail.com
                                        </a>
                                    <br>
                                        55 5132 1250 ext. 1560 y 1307
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bloque" id="Presentacion">
                <!-- <div class="d-flex align-items-center justify-content-center pt-5 m-4">
                    <div class="content text-justify">
                        <h1 class="ml-4">Justificación</h1>
                        <div class="text-muted">
                            <p>
                                El Congreso Internacional e Interinstitucional de Voluntad Anticipada convoca a profesionales de la salud, del derecho, académicos y sociedad en general a reflexionar sobre el final de la vida como un proceso de transiciones conscientes, guiado por la dignidad, la autodeterminación y el acompañamiento humano. Desde una perspectiva interdisciplinaria, el evento reunirá a especialistas en bioética, medicina, derecho y ciencias sociales para fortalecer competencias profesionales y sensibilidad ética en la atención de las personas en esta etapa.
                            </p>
                            <p>
                                Este congreso, organizado por la Secretaría de Salud Pública de la Ciudad de México, la Universidad Nacional Autónoma de México (UNAM), a través de su Instituto de Investigaciones Jurídicas, y la Academia Nacional de Medicina de México, busca contribuir a la construcción de un futuro en el que cada persona pueda decidir su camino con respeto y paz, promoviendo una atención humana y un enfoque de muerte digna.
                            </p>
                            <p>
                                El evento se realizará los días <span>miércoles 25, jueves 26 y viernes 27 de marzo del año en curso</span>, en modalidad híbrida: presencialmente en el Auditorio “Dr. Héctor Fix-Zamudio” del Instituto de Investigaciones Jurídicas de la UNAM y con transmisión en vivo para participantes virtuales, con interacción en tiempo real mediante la plataforma Zoom de la institución sede. Para ambas modalidades se requiere realizar una inscripción previa.
                            </p>
                        </div>
                    </div>
                </div> -->
                <div class="inferior d-flex justify-content-center">
                    <div>
                        <a href="{{url('/content/objetivos')}}">
                        <button type="submit" class="btn btn-dark mb-4 mt-3 px-4 py-2 shadow-sm rounded border-0"
                                style="color:#fff; font-size:20px; font-weight:600;">Detalles</button>
                        </a>
                    </div>
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection