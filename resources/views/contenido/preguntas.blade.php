@extends('layouts.appA')
@section('title', 'Dudas')
@section('content')
    <section class="margen">
        <div class="p-1 mt-5 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-center">
            <div class="text-center">
                <h1>
                    <strong>Preguntas Frecuentes</strong>
                </h1>
            </div>
            <div class="preguntasFrec mx-4" style="text-align:justify;">
                <ul>
                    <div class="pregunta">
                        <div>
                            <div class="cuestion">
                                <i class="fa-solid fa-chevron-down"></i>
                                <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            </div>
                            <div class="respuesta">
                                La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                                Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                                Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                                y con la Academia Nacional de Medicina de México.
                            </div>
                        </div>
                    </div>
               </ul>
            </div>
        </div>
    </section>
@endsection