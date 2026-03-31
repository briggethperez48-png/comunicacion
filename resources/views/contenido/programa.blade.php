@extends('layouts.appA')
@section('title', 'Programa')
@section('content')
    <section class="margen">
        <div class="p-1 mt-5 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-center">
            <div>
                <h1><strong>Programa del Evento</strong></h1>
            </div>
            <div class="container mt-2 mb-5">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-dark text-white py-3">
                        <h2 class="h4 mb-0 text-center">Detalles del Evento - 22 de Abril</h2>
                    </div>
                    <div class="card-body bg-light">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <p class="mb-1"><strong>Horario:</strong> 08:00 a 15:30 horas</p>
                                <p class="mb-1"><strong>Créditos:</strong> 1 crédito (7.5h ponencia / 30min informativo)</p>
                                <p class="mb-1"><strong>Modalidad:</strong> Virtual (Zoom por Telmex)</p>
                            </div>
                            <div class="col-md-6 border-start-md">
                                <p class="mb-0"><strong>Dirigido a:</strong></p>
                                <small class="text-muted">Personal de salud operativo, responsables de calidad, líderes de servicio, enlaces de PCI y personal interesado.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive shadow-sm rounded">
                    <table class="table table-hover table-striped mb-0 align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 15%;">Horario</th>
                                <th scope="col" style="width: 45%;">Tema</th>
                                <th scope="col" style="width: 20%;">Ponente</th>
                                <th scope="col" style="width: 20%;">Institución</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold text-dark">08:00 - 09:30</td>
                                <td>De la conciencia a la acción: cambio conductual y sostenibilidad</td>
                                <td>OMS/OPS</td>
                                <td>OMS/OPS</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark">09:30 - 11:00</td>
                                <td>La acción que previene: fundamentos epidemiológicos</td>
                                <td>Dr. Oscar Sosa Hernández</td>
                                <td>Hospital Juárez de México</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark">11:00 - 12:30</td>
                                <td>La acción correcta en el momento correcto: los 5 momentos de la higiene de manos</td>
                                <td>Hosp. Gral. Naval de Alta Especialidad</td>
                                <td>SEMAR</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark">12:30 - 14:00</td>
                                <td>Técnica que protege: ejecución correcta</td>
                                <td>Mtra. Blanca Estela Cervantes Guzmán</td>
                                <td>Hospital Juárez de México</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark">14:00 - 15:30</td>
                                <td>AESP 5, PCI e higiene de manos</td>
                                <td>Consejo de Salubridad General</td>
                                <td>Consejo de Salubridad General</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection