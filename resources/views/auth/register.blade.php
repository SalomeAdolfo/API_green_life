@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- name -->
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- apellido paterno -->
                        <div class="row mb-3">
                            <label for="primer_apellido" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Paterno')}}</label>
                            <div class="col-md-6">
                                <input id="primer_apellido" type="text" class="form-control @error('primer_apellido') is-invalid @enderror" name="primer_apellido" value="{{ old('primer_apellido') }}" required autocomplete="primer_apellido" autofocus>

                                @error('primer_apellido')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- apellido materno -->
                        <div class="row mb-3">
                            <label for="segundo_apellido" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Materno')}}</label>
                            <div class="col-md-6">
                                <input id="segundo_apellido" type="text" class="form-control @error('segundo_apellido') is-invalid @enderror" name="segundo_apellido" value="{{ old('segundo_apellido') }}" required autocomplete="segundo_apellido" autofocus>

                                @error('segundo_apellido')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Sexo -->
                        <div class="row mb-3">
                            <label for="sexo" class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>

                            <div class="col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="Masculino" name="sexo" value="Masculino">
                                    <label class="custom-control-label" for="sexo">Masculino</label>
                                </div>

                                <!-- Group of default radios - Femenino -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="Femenino" name="sexo" checked value="Femenino">
                                    <label class="custom-control-label" for="sexo">Femenino</label>
                                </div>
                            </div>
                        </div>


                        <!--perfil-->
                        <div class="row mb-3">
                            <label for="perfil" class="col-md-4 col-form-label text-md-end">{{ __('Perfil') }}</label>

                            <div class="col-md-6">
                            <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="Cliente" name="perfil" checked value="Cliente">
                                    <label class="custom-control-label" for="perfil">Cliente</label>
                                </div>

                                <!-- Group of default radios - Femenino -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="Vendedor" name="perfil" value="Vendedor">
                                    <label class="custom-control-label" for="perfil">Vendedor</label>
                                </div>
                            </div>

                        </div>
                        <!-- email -->

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- password -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- confirm password -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- enviar -->
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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