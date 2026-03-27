@extends('layouts.appA')
@section('title', 'Objetivos')
@section('content')
    <section class="margen">
        <div class="mt-5 mb-5 ml-4 mr-4 shadow rounded">
            <div class="m-4">
                    <div class="objet text-center">
                        <h1>
                            Objetivos
                        </h1>
                    </div>
                    <div class="objetivoGen">
                        <h2 class="objet text-center">
                            Objetivo General
                        </h2>
                        <p>
                            Fortalecer, conforme a la estrategia multimodal de la OMS, las competencias técnicas, epidemiológicas y conductuales del personal de salud para la adecuada higiene de manos, mediante capacitación, disponibilidad de insumos, monitoreo y promoción de una cultura de seguridad, a fin de prevenir las IAAS y mejorar la seguridad del paciente.
                        </p>
                    </div>
                    <div class="objetivosEsp d-flex justify-content-start">
                        <ul>
                            <h2 class="objet text-center">
                                Objetivos Específicos
                            </h2>
                            <li type="I" class="objetivo">
                                Analizar el panorama, los mecanismos de transmisión y el impacto de las IAAS, para sustentar la higiene de manos como medida clave de prevención.
                            </li>
                            <li type="I" class="objetivo">
                                Aplicar el modelo de los 5 momentos de la higiene de manos, identificando indicaciones críticas y errores frecuentes, para mejorar la adherencia en la práctica clínica.
                            </li>
                            <li type="I" class="objetivo">
                                Ejecutar correctamente la técnica de higiene de manos, considerando su duración, indicaciones y el uso racional de guantes, para garantizar su efectividad en la reducción de microorganismos.
                            </li>
                            <li type="I" class="objetivo">
                                Integrar la higiene de manos dentro de las acciones esenciales del programa de prevención y control de infecciones, fortaleciendo la infraestructura, el monitoreo y la responsabilidad institucional.
                            </li>
                            <li type="I" class="objetivo">
                                Promover el cambio conductual mediante estrategias basadas en la psicología del comportamiento para mejorar la adherencia a la higiene de manos.
                            </li>
                            <li type="I" class="objetivo">
                                Evaluar el impacto de la Estrategia Multimodal de Higiene de las Manos
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 

    <!-- Para asistencia -->
    @if(session('asistencia'))
        <script>
            Swal.fire({
            title: "Asistencia registrada",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonColor: "#9d2148"
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
            title: "Error",
            text: "{{ session('error') }}",
            icon: "error",
            confirmButtonColor: "#9d2148"
            });
        </script>
    @endif

    <!-- Para registro -->
    @if(session('mensaje'))
        <script>
            Swal.fire({
            title: "¡Gracias por tu registro!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonColor: "#9d2148"
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
            title: "Error",
            text: "{{ session('error') }}",
            icon: "error",
            confirmButtonColor: "#9d2148"
            });
        </script>
    @endif

    <!-- Para Evaluación -->
<div id="datos-evaluacion" 
     data-finalizada="{{ session('aprobado') !== null ? 'true' : 'false' }}"
     data-aprobado="{{ session('aprobado') ? 'true' : 'false' }}"
     data-aciertos="{{ session('aciertos') ?? 0 }}"
     data-folio="{{ session('folio') ?? '' }}"
     data-error="{{ session('error') ?? '' }}"
     style="display: none;">
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        const contenedor = document.getElementById('datos-evaluacion');
        
        const finalizada = contenedor.getAttribute('data-finalizada') === 'true';
        const aprobado = contenedor.getAttribute('data-aprobado') === 'true';
        const aciertos = contenedor.getAttribute('data-aciertos');
        const folio = contenedor.getAttribute('data-folio');
        const mensajeError = contenedor.getAttribute('data-error');

        if (mensajeError && mensajeError !== "") {
            Swal.fire({
                title: 'Atención',
                text: mensajeError,
                icon: 'error',
                confirmButtonColor: '#3085d6'
            });
            return;
        }

        if (finalizada) {
            if (aprobado) {
                // MODAL APROBADO
                Swal.fire({
                    title: '¡Felicidades!',
                    icon: 'success',
                    html: `
                        <div class="text-center">
                            <p class="h5">Has aprobado la evaluación.</p>
                            <p>Tus aciertos: <strong>${aciertos} / 4</strong></p>
                            <div style="background-color: #d4edda; color: #155724; padding: 15px; border: 1px solid #c3e6cb; border-radius: 5px; margin-top: 15px;">
                                <strong>Folio generado:</strong><br>
                                <span style="font-size: 1.5rem; font-weight: bold;">${folio}</span>
                            </div>
                        </div>
                    `,
                    confirmButtonColor: '#28a745'
                });
            } else {
                // MODAL NO APROBADO (El que te faltaba)
                Swal.fire({
                    title: 'Evaluación no aprobada',
                    icon: 'warning',
                    html: `
                        <div class="text-center">
                            <p class="h5">Lo sentimos, no has alcanzado el puntaje mínimo.</p>
                            <p>Obtuviste: <strong>${aciertos} de 4 aciertos</strong></p>
                        </div>
                    `,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Regresar'
                });
            }
        }
    });
</script>
@endsection