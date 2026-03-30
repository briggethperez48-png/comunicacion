@extends('layouts.appA')
@section('title', 'Inicio')
@section('content')
    <section class="margen">
        <div class="mt-5 mb-5 ml-4 mr-4 shadow rounded">
            <div class="Enca text-center">
                <h1>
                    Ponentes <hr>
                </h1>


                <div class="ponentes">
                    <div class="ponente">
                        <button class="popClose" popovertarget="ponenteImg">
                            <img src="/project/storage/imagen/CONAMEDR.png" alt="">
                        </button>
                        <br>
                        <br>
                        <button popovertarget="ponenteImg">
                            <h3>Academia Nacional de Medicina de México</h3>
                        </button>
                        <div class="popOpen" popover id="ponenteImg">
                            <div class="contentPop">
                                <img src="{{ asset('img/ajolotesBarCutAr.png') }}" alt=""
                                class="img-fluid text-end" style="width: 30%; height:auto;">
                                <img src="{{ asset('img/ajolotesBarCutA.png') }}" alt=""
                                class="img-fluid text-end" style="width: 30%; height:auto;">
                            </div>
                            <br>
                            <button class="popOut" popovertarget="ponenteImg" popovertargetaction="hide">Cerrar</button>
                        </div>
                        <div class="info">
                            <h3 class="ocup">CONAMED</h3>
                            <h3 class="lugar">México</h3>
                        </div>
                    </div>
                    <div class="ponenteA">
                        <button class="popClose" popovertarget="ponenteImgU">
                            <img src="/project/storage/imagen/UNAM.png" alt="">
                        </button>
                        <br>
                        <br>
                        <button popovertarget="ponenteImgU">
                            <h3>Universidad Nacional Autónoma de México</h3>
                        </button>
                        <div class="popOpen" popover id="ponenteImgU">
                            <img src="/project/storage/imagen/DiapIIJ.png" alt="">
                            <br>
                            <button class="popOut" popovertarget="ponenteImgU" popovertargetaction="hide">Cerrar</button>
                        </div>
                        <div class="info">
                            <h3 class="ocup">UNAM</h3>
                            <h3 class="lugar">México</h3>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection