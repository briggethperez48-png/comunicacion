@extends('layouts.appA')
@section('title', 'Dudas')
@section('content')
    <section class="margen">
        <div class="p-1 mt-5 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-center">
            <div class="text-center mb-2">
                <h1>
                    <strong>Preguntas Frecuentes</strong>
                </h1>
            </div>
            <div class="preguntasFrec mt-3 mx-4" style="text-align:justify;">
                <ul>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Quién organiza el <i>Seminario: Manos que cuidan, manos que salvan</i>?</span>
                            </div>
                            <div class="respuesta">
                                Organizado por la Secretaría de Salud de la Ciudad de México, a través de la Oficina de la Responsable Estatal de Calidad.
                            </div>
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Dónde se realiza el <i>Seminario: Manos que cuidan, manos que salvan</i>?</span>
                            </div>
                            <div class="respuesta">
                                Se llevará a cabo de manera virtual, utilizando la plataforma Zoom.
                            </div>
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Cuando se realizará el <i>Seminario: Manos que cuidan, manos que salvan</i>?</span>
                            </div>
                            <div class="respuesta">
                                El 22 de abril del 2026.
                            </div>
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿El seminario tiene algún costo?</span>
                            </div>
                            <div class="respuesta">
                                La inscripción es gratuita.
                            </div>
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Cómo puedo inscribirme?</span>
                            </div>
                            <div class="respuesta">
                                Complete el formulario en el enlace proporcionado para el 
                                <a href="{{url('/formulario/create')}}">"Registro Participante"</a>.
                            </div>
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Quiénes pueden participar?</span>
                            </div>
                            <div class="respuesta">
                                Abierto a todo público, especialmente dirigido a Personal de salud operativo, responsables de calidad, líderes de servicio y enlaces de PCI.
                            </div>
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Cuál es el objetivo del <i>Seminario: Manos que cuidan, manos que salvan</i>?</span>
                            </div>
                            <div class="respuesta">
                                Fortalecer, conforme a la estrategia multimodal de la OMS, las competencias técnicas, epidemiológicas y conductuales del personal de salud para la adecuada higiene de manos, mediante capacitación, disponibilidad de insumos, monitoreo y promoción de una cultura de seguridad, a fin de prevenir las IAAS y mejorar la seguridad del paciente.
                            </div>
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Se otorgan certificados?</span>
                            </div>
                            <div class="respuesta">
                                Se otorgará una constancia de participación, en un plazo no mayor a 15 días hábiles tras completar la <a href="{{url('/encuesta')}}">"Encuesta de Satisfacción"</a>.
                            </div>
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Cuál es la fecha límite para inscribirse?</span>
                            </div>
                            <div class="respuesta">
                                La inscripción está sujeta a disponibilidad de lugares. Complete el formulario de registro a la brevedad.
                            </div>
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Cuándo recibiré mi constancia?</span>
                            </div>
                            <div class="respuesta">
                                Tras concluir el <i>Seminario: Manos que cuidan, manos que salvan</i> y responder la <a href="{{url('/encuesta')}}">"Encuesta de Satisfacción"</a>, recibirá su constancia por correo en un plazo no mayor a 15 días hábiles.
                            </div>
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Tiene más preguntas?</span>
                            </div>
                            <div class="respuesta">
                                Contáctenos a: <a href="mailto:fabiola.beltran.salud.cdmx@gmail.com">fabiola.beltran.salud.cdmx@gmail.com</a> o al 55 5132 1250 ext. 1339, 1356 y 1424.
                            </div>
                        </div>
                    </div>
                    
               </ul>
            </div>
        </div>
    </section>
@endsection