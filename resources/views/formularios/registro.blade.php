@extends('layouts.appA')
@section('title', 'Registro')
@section('content')
    <section class="margen">
        <div class="p-1 mt-5 mb-5 ml-4 mr-4 shadow rounded justify-content-center text-left">
            <section class="content mt-5">
                <div clas="">
                    <h2>
                        Registro al Curso
                    </h2>
                </div>
                <div class="form">
                    <form action="{{url('/formulario')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('formularios.form', ['modo'=>'Crear'])
                    </form>
                </div>
            </section>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <script>
                let estadoGuardado = "{{ old('EstadoProcedencia', $emplead1->EstadoProcedencia ?? '') }}";
                let paisGuardado = "{{ old('Pais', $emplead1->Pais ?? '') }}";
            </script>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                $(document).ready(function(){
                    $('.dynamic').change(function(){
                        if($(this).val()!= ''){
                            var select = $(this).attr("id");
                            var value = $(this).val();
                            var dependent = $(this).data('dependent');
                            var _token = $('input[name="_token"]').val();
                            $.ajax({
                                url:"{{route('registroController.fetch')}}",
                                method:"POST",
                                data:{select:select, 
                                        value:value, 
                                        _token:_token, 
                                        dependent:dependent
                                    },
                                success:function(result){
                                    $('#'+dependent).html(result);
                                }
                            })
                        }
                    });
                });
            </script>
        </div>
    </section>
@endsection