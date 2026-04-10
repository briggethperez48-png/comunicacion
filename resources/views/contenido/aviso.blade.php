@extends('layouts.appA')
@section('title', 'Aviso de privacidad')
@section('content')
    <section class="margen">
        <div class="p-1 mt-5 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-center">
            <div class="text-center mb-1 mt-3">
                <h1>
                    AVISO DE PRIVACIDAD SIMPLIFICADO
                </h1>
            </div>
                <div class="mb-4 p-3" style="text-align:justify; font-size:18px">
                    <p>
                        La Secretaría de Salud de la Ciudad de México a través de la Subsecretaría de Prestación de Servicios Médicos e Insumos, con domicilio en Avenida Insurgentes Norte, No. 423, piso 20, Colonia Conjunto Urbano Nonoalco Tlatelolco, Alcaldía Cuauhtémoc, C. P. 06900, Ciudad de México, es la responsable del tratamiento de los datos personales que se recaban, los cuales serán protegidos en el Sistema de Datos Personales “Seminario: Manos que cuidan, manos que salvan”.
                        <br><br>Los datos personales recabados, serán utilizados con la finalidad de procesar y registrar la información identificativa de los asistentes y ponentes que acuden a los Cursos, Talleres, Congresos, Simposios, Diplomados, Seminarios o Webinars en materia de Cuidados Paliativos o Voluntad Anticipada.
                        <br><br>Para su uso, se prevé integrar de manera ordenada y sistemática la información de los asistentes y ponentes a fin de mantener un registro del personal de salud y proporcionar una constancia con Valor Curricular.
                        <br><br>Así mismo, se le informa que sus datos personales no podrán ser difundidos sin su consentimiento expreso, salvo las excepciones previstas en los artículos 16, 60, fracción I, 61 y 64 de la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados de la Ciudad de México.
                        <br><br>La transferencia de Datos Personales será únicamente a Organismos Garantes y Autoridades Judiciales o Administrativas para atender requerimientos de información, motivo por el cual, estos podrían ser transmitidos a los siguientes Sujetos Obligados:
                    </p>
                    <ul>
                        <li>
                            Comisión Nacional de Arbitraje Médico; en aquellos casos en que se investiguen asuntos relacionados con la posible irregularidad o negativa en la prestación de servicios médicos justificados o urgentes y requiera información y/o pruebas que aporten los prestadores de servicios médicos y los usuarios, en relación con las quejas planteadas y en su caso, aquéllas otras que sean necesarias para dilucidar quejas y realizar las diligencias correspondientes.
                        </li>
                        <li>
                            Secretaría de Salud (SSA); con la finalidad de ejecutar los programas de servicios de salud y la formación de recursos humanos para la salud.
                        </li>
                        <li>
                            Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales (INAI); a fin de conocer los recursos de revisión que por su interés y trascendencia así lo ameriten y la sustanciación a los recursos de inconformidad a las determinaciones o resoluciones del Instituto de Acceso a la Información Pública y Protección de Datos Personales de la Ciudad de México.
                        </li>
                        <li>
                            Instituto de Acceso a la Información Pública y Protección de Datos Personales de la Ciudad de México (INFO); toda información necesaria para conocer, sustanciar y resolver los recursos de revisión interpuestos por los titulares, recursos de inconformidad, procedimientos de verificación y para determinar el probable incumplimiento de la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados.
                        </li>
                    </ul>
                    <p>
                        Usted podrá manifestar la negativa al tratamiento de sus datos personales directamente ante la Unidad de Transparencia de la Secretaría de Salud de la Ciudad de México, con domicilio en Avenida Insurgentes Norte, No. 423, planta baja, Colonia Conjunto Urbano Nonoalco Tlatelolco, Alcaldía Cuauhtémoc, C.P. 06900, Ciudad de México, con número telefónico 55 5132 1250, extensión 1344.
                        <br><br>Para conocer el Aviso de Privacidad Integral, puede acudir directamente a la Unidad de Transparencia o ingresar a la página <a href="http://data.salud.cdmx.gob.mx/ssdf/portalut/inicio.php" target="_blank" rel="noopener noreferrer">http://data.salud.cdmx.gob.mx/ssdf/portalut/inicio.php</a> en el apartado de “Avisos de Privacidad SEDESA”.
                    </p>
                </div>
        </div>
        <div class="botones-container d-flex flex-column flex-md-row justify-content-md-between align-items-center mx-md-5">
            <a href="{{url('/content/')}}" class="btn btn-lg btn-outline-secondary shadow-sm px-5 mx-2 mb-3 mb-md-0 w-100 w-md-auto">
                Regresar
            </a>
        </div>
    </section>
@endsection