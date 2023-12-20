@extends('layouts.authTemplate')

@section('title', 'Reestablecer contraseña | Control de Alcoholes')
    
@section('content')

<div class="container">

  <div style="text-align: center" class="">
    <img style="width: 35%;" src="/img/seafi_logo_1.svg">
  </div>

  <div class="text-center">
  {{ __('¿Olvidó su contraseña? Ningún problema. Ingrese su correo electrónico para reestablecer su contraseña.') }}
  </div>

  <div class="login row justify-content-center">
    <div class="col-md-5">
            <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-outline mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="text-center">
                <x-primary-button class="btn btn-primary btn-block mb-4">
                    {{ __('Reestablecer') }}
                </x-primary-button>
            </div>
        </form>
        </div>

  </div>


</div>

@endsection
