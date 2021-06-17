@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-auto">
            <div class="col-md-7 text-center shadow m-auto p-3 mb-5 bg-white rounded mx-1">
                <!--logo-->
                <div class="row align-items-center justify-content-center pb-3">
                    <div class="mt-3 text-center">
                        <img class="img-responsive" src="{{asset('images/logoTalkFood.png')}}" width="150" height="150">
                    </div>
                </div>
                <div class="text-center">
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <!--correo-->
                        <div class="row align-items-center justify-content-center">
                            
                            <div class="col-md-7 pb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo electronico" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!--contraseña-->
                        <div class="row align-items-center justify-content-center">
                            
                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col mx-auto">
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                                <div class="col pt-3 pb-3">
                                    <button type="submit" class="btn btn-dark">
                                        {{ __('Iniciar Sesión') }}
                                    </button>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-4 offset-md-4">

                                        <div class="checkbox">

                                            <label>

                                                <a href="{{ route('forget.password.get') }}">¿Olvidaste tu contraseña?</a>

                                            </label>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <!--botón register-->
                <div class="form-group row mb-0">
                    <div class="col-md-12 text-center">
                        <a href="{{ route('register') }}" class="btn btn-success" role="button">Crear Nueva Cuenta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection