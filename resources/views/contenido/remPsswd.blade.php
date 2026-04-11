@extends('layouts.appA')
@section('title', 'Recuperar Contraseña')
@section('content')
    <section class="margen">
        <div class="p-1 mt-5 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-center">
            <div class="mx-3 mt-3">
                <h1>
                    Oficina de la Responsable de Calidad
                        en la Secretaría de Salud de la Ciudad de México
                </h1>
            </div>
            <div class="text-center">
                <h1>
                    <strong>
                        ¿Olvidaste tu contraseña?
                    </strong>
                </h1>
            </div>
            <div class="mb-4 p-3" style="text-align:justify; font-size:18px;">
                
                
                <div  class="text-center">
                    <img src="{{asset('img/higieneV.png')}}" class="img-fluid rounded-circle" style="max-width: 20%; height: auto;">
                </div>
                <h2 class="text-center mt-3">
                    <strong>Acude de inmediato a uno de los siguientes contactos:</strong>
                </h2>

                    <div class="row mt-2 mx-2 mx-md-4 text-muted"
                            style="gap:20px;">
                        <!-- Columna 1 -->
                        <div class="col-12 col-sm shadow-sm p-2 rounded-lg text-center mt-4">
                            <div class="">
                                <h2>
                                    Correo electrónico:
                                </h2>
                                        <p>
                                            <h3>
                                                <a href="mailto:fabiola.beltran.salud.cdmx@gmail.com">
                                                fabiola.beltran.salud.cdmx@gmail.com
                                            </a>
                                            </h3>
                                        </p>
                            </div>
                            <div class="">
                                <h2>
                                    Teléfono:
                                </h2>
                                    <p>
                                        <h3>
                                            <strong>55 5132 1250 ext. 1339, 1356 y 1424</strong>
                                        </h3>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection