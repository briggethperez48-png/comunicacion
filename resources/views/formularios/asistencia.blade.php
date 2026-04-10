@extends('layouts.appA')
@section('title', 'Registro')
@section('content')
    <section class="margen">
        <div class="p-1 mt-5 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-center">
            <div class="text-center mt-5 mb-4">
                <h1 class="font-weight-bold">Registro de asistencia</h1>
                <p class="text-muted">Confirma tu asistencia</p>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="row justify-content-center">

                        @for($dia = 1; $dia <= $diasEvento; $dia++)
                            <div class="col-md-4 col-lg-3 mb-4">
                                <div class="asis card h-100 text-center border-0 shadow-sm">
                                    
                                        
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        
                                        <h5 class="font-weight-bold mb-3">
                                            Día {{ $dia }}
                                        </h5>
                                        
                                        <!-- Formulario -->
                                        @if($dia == $diaActual)
    
                                            @if($estadoAsistencia == 'antes')
                                                <div class="alert alert-info p-2 mb-0 border-0 shadow-sm">
                                                    <i class="fas fa-clock mb-1"></i><br>
                                                    <small class="font-weight-bold">PRÓXIMAMENTE</small><br>
                                                    <span style="font-size: 0.8rem;">Abre a las {{ $horaApertura }}</span>
                                                </div>

                                            @elseif($estadoAsistencia == 'durante')
                                                <div>
                                                    <img src="{{asset('img/seminario.png')}}" alt="" class="img-fluid mb-2" style="width: 40%; height:auto;">
                                                </div>
                                                <form method="POST" action="{{ route('asistencia.store') }}">
                                                    @csrf
                                                    <input type="hidden" name="dia" value="{{ $dia }}">
                                                    <button type="submit" class="btn btn-success btn-block font-weight-bold shadow-sm">
                                                        Confirmar asistencia
                                                    </button>
                                                    <small class="text-success d-block mt-2 font-weight-bold">
                                                        Registro abierto hasta las {{ $horaCierre }}.
                                                    </small>
                                                </form>

                                            @else
                                                <div>
                                                    <img src="{{asset('img/germenes.png')}}" alt="" class="img-fluid mb-2" style="width: 40%; height:auto;">
                                                </div>
                                                <div class="alert alert-warning p-2 mb-0 border-0 shadow-sm">
                                                    <small class="font-weight-bold text-uppercase">Tiempo agotado</small><br>
                                                    <span style="font-size: 0.8rem;">El registro cerró a las {{ $horaCierre }}</span>
                                                </div>
                                            @endif

                                        @elseif($dia < $diaActual)
                                            <span class="badge badge-secondary p-2">
                                                Día completado
                                            </span>
                                        @else
                                            <span class="badge badge-light p-2 text-muted border">
                                                No disponible
                                            </span>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection