@extends('layouts.appA')
@section('title', 'Encuesta de Satisfacción')
@section('content')
    <!-- Sí, juro que es la encuesta -->
    <section class="margen">
        <div class="p-1 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-center">
            <section class="content">
                    <div class="mx-3">
                    <div class="encuHeader">
                        <h2>
                            Encuesta de Satisfacción
                        </h2>
                    </div>
                    <div class="text" style="text-align: justify;">
                        <p>
                            A continuación, le invitamos a participar en nuestra encuesta de satisfacción. 
                            El propósito de esta encuesta es recoger sus impresiones sobre el <b>Seminario: 
                            Manos que cuidan, manos que salvan</b>. Valoramos enormemente sus comentarios, ya que nos permitirán optimizar 
                            y enriquecer nuestras futuras actividades.
                        </p>
                    </div>
                    <form method="POST" action="{{ route('examen.store') }}" style="text-align: justify;">
                        @csrf
                        <div class="mb-3">
                        <label for="pregunta1" class="h3">Pregunta 1</label>
                        <p>
                            ¿Cree que los temas abordados en el <i>Seminario: Manos que cuidan, 
                            manos que salvan</i>, serán utiles para su desarrollo profesional?
                        </p>
                        <select name="pregunta1" class="form-select form-select-lg" required>
                            <option value="">Elija una opción</option>
                            <option value="Muy util">Muy útil</option>
                            <option value="Util">Útil</option>
                            <option value="Regular">Regular</option>
                            <option value="Malo">Malo</option>
                        </select>
                        </div>

                        <div class="mb-3">
                        <label for="pregunta2" class="h3">Pregunta 2</label>
                        <p>
                            ¿Logró ampliar sus conocimientos en su área de trabajo tras concluir 
                            el <i>Seminario: Manos que cuidan, manos que salvan</i>?
                        </p>
                        <select name="pregunta2" class="form-select form-select-lg" required>
                            <option value="">Elija una opción</option>
                            <option value="Si">Sí</option>
                            <option value="No">No</option>
                        </select>
                        </div>

                        <div class="mb-3">
                        <label for="pregunta3" class="h3">Pregunta 3</label>
                        <p>
                            La información y difusión del <i>Seminario: Manos que cuidan, manos que salvan</i>
                            es...
                        </p>
                        <select name="pregunta3" class="form-select form-select-lg" required>
                            <option value="">Elija una opción</option>
                            <option value="Excelente">Excelente</option>
                            <option value="Bueno">Buena</option>
                            <option value="Regular">Regular</option>
                        </select>
                        </div>

                        <div class="mb-3">
                        <label for="sugerencias" class="h3">Sugerencias</label>
                        <p>
                            ¿Que aspectos considera que podrían mejorarse para 
                            nuestros próximos eventos?
                        </p>
                        <div class="text-center">
                            <textarea class="form-control form-control-lg" name="sugerencias" placeholder="Escriba aquí..."></textarea>
                        </div>
                        </div>
                        <label for="escala" class="h3">Nivel de Satisfacción</label>
                            <p class="text-justify">
                                En una escala del 1 al 10, ¿qué tanto recomendaría nuestros eventos a un familiar, 
                                amigo, colega o institución para su desarrollo en el marco de la calidad?
                                <br>
                                    Donde:
                                    <p class="ml-2">
                                        1 = No lo recomendaría
                                    <br> 10 = Lo recomendaría ampliamente</p>
                                
                            </p>
                        <div class="range-container">
                                <div class="d-flex justify-content-between mb-1 font-weight-bold">
                                    <span>0</span>
                                    <span>10</span>
                                </div>
                                
                                <input type="range" id="escala" name="escala" 
                                    min="0" max="10" step="0.5" value="0" 
                                    class="custom-range" list="tickmarks">
                                
                                <datalist id="tickmarks" class="d-flex justify-content-between mt-1 px-1 mb-3">
                                    <option value="0" label="0"></option>
                                    <option value="1" label="1"></option>
                                    <option value="2" label="2"></option>
                                    <option value="3" label="3"></option>
                                    <option value="4" label="4"></option>
                                    <option value="5" label="5"></option>
                                    <option value="6" label="6"></option>
                                    <option value="7" label="7"></option>
                                    <option value="8" label="8"></option>
                                    <option value="9" label="9"></option>
                                    <option value="10" label="10"></option>
                                </datalist>
                            </div>
                        </div>

                        <div class="mx-5">
                            <button type="submit" 
                                class="btn btn-success mb-4 mt-3 px-4 py-2 shadow-sm rounded border-0">
                                <strong>Enviar</strong>
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
@endsection