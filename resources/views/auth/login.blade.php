@extends('layouts.appA')

@section('content')
<div class="margen">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="Tarjeta card">
                <div class="Inicio card-header"><h2>
                        Inicio de sesión
                    </h2>
                </div>

                <div class="BodyCard card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="Cuestion row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="Cuestion row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row col-md-8 mb-3 mx-auto">
                            
                            <!-- Checkbox -->
                            <div class="col text-start">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="Remember form-check-label" for="remember">
                                        Guardar contraseña
                                    </label>
                                </div>
                            </div>

                            <!-- Forgot password -->
                            <div class="col text-end">
                                @if (Route::has('password.request'))
                                    <a class="Forgot btn btn-link" href="{{ url('/content/lostPassword') }}">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                @endif
                            </div>

                            <!-- Botón login -->
                            <div class="col-md-8 btn-b">
                                <button type="submit" class="btn btn-success w-100">
                                    Login
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
