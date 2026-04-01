@extends('layouts.appA')
@section('title', 'Ponentes')
@section('content')
    <section class="margen">
        <div class="mt-5 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-center">
            <div class="Enca text-center">
                <h1>
                    Ponentes <hr>
                </h1>
    @php
        $ponentes = [
                [
                    'id' => 1,
                    'nombre' => 'Academia Nacional de Medicina de México',
                    'foto' => 'CONAMEDR.png',
                    'diapositiva' => 'DiapCONAMED.png',
                    'institucion' => 'CONAMED',
                    'descripcion' => 'Descripción uno',
                    'pais' => 'México'
                ],
                [
                    'id' => 2,
                    'nombre' => 'Instituto de Investigaciones Jurídicas UNAM',
                    'foto' => 'UNAM_logo.png', // Cambia por tus nombres de archivo reales
                    'diapositiva' => 'DiapUNAM.png',
                    'institucion' => 'UNAM',
                    'descripcion' => 'Descripción dos',
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

                            <button popovertarget="ponente-{{ $ponente['id'] }}">
                                <h3>{{ $ponente['nombre'] }}</h3>
                            </button>

                            <div class="popOpen" popover id="ponente-{{ $ponente['id'] }}">
                                <div class="diaPon">
                                    <img src="{{ asset('img/' . $ponente['diapositiva']) }}" alt="">
                                </div>

                                <div class="contentPop rounded-3">
                                    <div class="innerImg">
                                        <img src="{{ asset('img/basePop.png') }}" alt="" 
                                            style="width: 50%; height:auto;" class="rounded-circle">
                                    </div>
                                    <div class="innerPop">
                                        <div class="nomCurso text-center">
                                            <h1>Seminario: Manos que cuidan, manos que salvan</h1>
                                            <h2>La seguridad del paciente comienza contigo</h2>
                                        </div>
                                        <div class="nomPonente" style="height:12%; width: auto;">
                                            <h2>Ponente Invitado:</h2>
                                            <h1>{{ $ponente['nombre'] }}</h1>
                                        </div>
                                        <br>
                                        <div class="innerDesc mt-2" style="text-align: justify;">
                                            <p>{{ $ponente['descripcion'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button class="popOut" 
                                        popovertarget="ponente-{{ $ponente['id'] }}" 
                                        popovertargetaction="hide">
                                    Cerrar
                                </button>
                            </div>

                            <div class="info">
                                <h3 class="ocup">{{ $ponente['institucion'] }}</h3>
                                <h3 class="lugar">{{ $ponente['pais'] }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection