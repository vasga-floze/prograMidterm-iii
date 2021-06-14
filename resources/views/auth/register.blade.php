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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row align-items-center justify-content-center">
                            <!--correo-->
                            <div class="col-md-7 pb-3">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 pb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 pb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 pb-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña" required autocomplete="new-password">
                            </div>
                        </div>
                        <hr>
                        <!--botón register-->
                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Crear Cuenta') }}
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
