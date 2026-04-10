@extends('layouts.appA')
@section('title', 'Ponentes')
@section('content')
    <section class="margen">
        <div class="mt-5 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-center">
            <div class="Enca text-center">
                <h1 class="pt-2">
                    Ponentes <hr>
                </h1>
                @php
                    $ponentes = [
                            [
                                'id' => 1,
                                'nombre' => 'Organización Panamericana de la Salud',
                                'foto' => 'ops.png',
                                'diapositiva' => 'DiapOPS.png',
                                'institucion' => 'Organización Mundial de la Salud',
                                'descripcion' => 'La OPS es la organización internacional especializada en salud pública de las Américas.  Trabaja cada día con los países de la región para mejorar y proteger la salud de su población. Brinda cooperación técnica en salud a sus países miembros, combate las enfermedades transmisibles y ataca los padecimientos crónicos y sus causas, fortalece los sistemas de salud y da respuesta ante situaciones de emergencia y desastres.',
                                'pais' => 'OMS/OPS'
                            ],
                            [
                                'id' => 2,
                                'nombre' => 'Dr. Oscar Sosa Hernández',
                                'foto' => 'sosa.jpg',
                                'diapositiva' => 'DiapSOSA.png',
                                'institucion' => 'Hospital Juárez de México',
                                'descripcion' => 'El Dr. Oscar Sosa Hernández es Médico Especialista en Epidemiología e Infectología, con una destacada trayectoria en el Hospital Juárez de México, donde se desempeña como Jefe de Departamento. Su labor ha sido fundamental en el diseño e implementación de estrategias críticas para la Seguridad del Paciente y la vigilancia epidemiológica de alta especialidad.',
                                'pais' => 'México'
                            ],
                            [
                                'id' => 3,
                                'nombre' => 'Secretaría de Marina',
                                'foto' => 'semar.png',
                                'diapositiva' => 'DiapSEMAR.png',
                                'institucion' => 'SEMAR',
                                'descripcion' => 'Ejerce el Poder Marítimo Nacional, protege los intereses marítimos, mantiene el estado de derecho en las zonas marinas mexicanas, costas, ríos, zonas lacustres y recintos portuarios, así como aplica la Autoridad Marítima Nacional, para garantizar la soberanía e impulsar el desarrollo del país en los términos que establece la Constitución Política de los Estados Unidos Mexicanos, las leyes que de ella deriven y los tratados internacionales.',
                                'pais' => 'México'
                            ],
                            [
                                'id' => 4,
                                'nombre' => 'Mtra. Blanca Estela Cervantes Guzmán',
                                'foto' => 'blanca.png',
                                'diapositiva' => 'DiapBLANCA.png',
                                'institucion' => 'Hospital Juárez de México',
                                'descripcion' => 'La Mtra. Blanca Estela Cervantes Guzmán es una destacada líder en el sector salud, reconocida por su trayectoria de más de 30 años en el Hospital Juárez de México, donde actualmente encabeza la Jefatura de Servicios de Enfermería. Su gestión se caracteriza por un profundo sentido humanista y una búsqueda constante de la excelencia en la práctica clínica y la seguridad del paciente.',
                                'pais' => 'México'
                            ],
                            [
                                'id' => 5,
                                'nombre' => 'Consejo de Salubridad General',
                                'foto' => 'csg.jpg',
                                'diapositiva' => 'DiapCSG.png',
                                'institucion' => 'Consejo de Salubridad General',
                                'descripcion' => 'La misión del Órgano Colegiado del Consejo de Salubridad General es el de identificar asuntos prioritarios de salubridad general -incluyendo crisis y epidemias-, convocar intersectorialmente a su análisis y generación de alternativas de política, lograr decisiones de Estado sobre ellas, instrumentar ágilmente acuerdos, disposiciones y prácticas que las impulsen, establecer el marco de monitoreo y evaluación de estas y dar seguimiento a los responsables de su ejecución.',
                                'pais' => 'México'
                            ],
                            
                        ];
                @endphp

                <div class="ponentes">
    @foreach($ponentes as $ponente)
        <div class="ponente">
            <button class="popClose" popovertarget="ponente-{{ $ponente['id'] }}">
                <img src="{{ asset('img/' . $ponente['foto']) }}" alt="" class="rounded-circle">
            </button>
            
            <br><br>

            <button class="btn-nombre" popovertarget="ponente-{{ $ponente['id'] }}">
                <h3>{{ $ponente['nombre'] }}</h3>
            </button>

            <div class="popOpen" popover id="ponente-{{ $ponente['id'] }}">
                <div class="diaPon">
                    <img src="{{ asset('img/' . $ponente['diapositiva']) }}" alt="">
                </div>
                <div class="contentPop rounded-3">
                    <div class="innerImg">
                        <img src="{{ asset('img/' . $ponente['foto']) }}" alt="" style="width: 50%; height:auto;" class="rounded-circle">
                    </div>
                    <div class="innerPop">
                        <div class="nomCurso text-center">
                            <h1>Seminario: Manos que cuidan, manos que salvan</h1>
                            <h2>La seguridad del paciente comienza contigo</h2>
                        </div>
                        <div class="nomPonente">
                            <h2>Ponente Invitado:</h2>
                            <h1>{{ $ponente['nombre'] }}</h1>
                        </div>
                        <div class="innerDesc mt-2">
                            <p>{{ $ponente['descripcion'] }}</p>
                        </div>
                    </div>
                </div>
                <button class="popOut" popovertarget="ponente-{{ $ponente['id'] }}" popovertargetaction="hide">
                    Cerrar
                </button>
                <div class="mensaje">
                    <p style="color: whitesmoke;"><i>O presione <b>Esc</b> para salir</i></p>
                </div>
            </div>

            <div class="info">
                <h3 class="ocup">{{ $ponente['institucion'] }}</h3>
                <h3 class="lugar">{{ $ponente['pais'] }}</h3>
            </div>
        </div>
    @endforeach
</div>
            </div>
            <div class="inferior d-flex justify-content-end mx-4">
                <div>
                    <a href="{{url('/formulario/create')}}">
                    <button type="submit" class="btn btn-dark mb-4 mt-1 px-4 py-2 shadow-sm rounded border-0"
                            style="color:#fff; font-size:20px; font-weight:600;">Siguiente</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection