@extends('layouts.appA')
@section('title', 'Ponentes')
@section('content')
    <section class="margen">
        <div class="mt-5 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-center">
            <div class="Enca text-center">
                <h1>
                    Ponentes <hr>
                </h1>


                <div class="ponentes">
                    <div class="ponente">
                        <button class="popClose" popovertarget="ponenteImg">
                            <img src="{{asset('img/CONAMEDR.png')}}" alt="">
                        </button>
                        <br>
                        <br>
                        <button popovertarget="ponenteImg">
                            <h3>Academia Nacional de Medicina de México</h3>
                        </button>
                        <div class="popOpen" popover id="ponenteImg">
                            <div class="diaPon">
                                <img src="{{asset('img/DiapCONAMED.png')}}" alt="">
                            </div>

                            <div class="contentPop rounded-3">
                                    <div class="innerImg">
                                            <img src="{{asset('img/basePop.png')}}" alt="" 
                                            style="width: 50%; height:auto;" class="rounded-circle">
                                    </div>
                                <div class="innerPop">
                                     <div class="nomCurso text-center">
                                        <h1>Seminario: Manos que cuidan, manos que salvan</h1>
                                        <h2>Manos que cuidan, manos que salvan: la seguridad del paciente comienza contigo</h2>
                                    </div>
                                    <div class="nomPonente"
                                        style="height:12%; width: auto;">
                                        <h1>Nombre completo</h1>
                                        <h2>Título o atribución</h2>
                                    </div>
                                    <br>
                                    <div class="innerDesc" style="text-align: justify;">
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. At et officia quam reprehenderit ipsum error nulla vel veritatis similique maxime aspernatur nam eaque, quos tempore fugiat nostrum ab, minima hic.
                                        </p>
                                    </div>
                                </div>
                            
                            </div>
                            <br>
                            <button class="popOut" popovertarget="ponenteImg" popovertargetaction="hide">Cerrar</button>
                        </div>
                        <div class="info">
                            <h3 class="ocup">CONAMED</h3>
                            <h3 class="lugar">México</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection