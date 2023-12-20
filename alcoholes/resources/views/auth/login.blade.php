@extends('layouts.authTemplate')

@section('title', 'Iniciar Sesión | Control de Alcoholes')
    
@section('header')

@section('main')

@section('content')

<div class="container">

  <div style="text-align: center" class="">
    <img style="width: 35%;" src="/img/seafi_logo_1.svg">
  </div>

  <div class="login row justify-content-center">
    <div class="col-md-6">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
          <x-input-label for="email" :value="__('Correo electrónico')" />
          <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
         </div>
      
        <!-- Password input -->
        <div class="form-outline mb-4">
          <x-input-label for="password" :value="__('Contraseña')" />

          <x-text-input id="password" class="form-control"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />

          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
      
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <label for="remember_me" class="form-check">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
          </div>
          
          <div class="col-6">
            @if (Route::has('password.request'))
              <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                  {{ __('¿Olvidaste tu contraseña?') }}
              </a>
            @endif
          </div>

        </div>
      
        <!-- Submit button -->
            <div class="text-center">
              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn btn-primary btn-block mb-4">Registro</a>
             @endif

            
            <x-primary-button class="btn btn-primary btn-block mb-4">
              {{ __('Iniciar Sesión') }}
            </x-primary-button>
            </div>
        <!-- Register buttons -->
        <div class="text-center">
      
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
      
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
      
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
    </div>
  </div>


</div>

@endsection

@endsection