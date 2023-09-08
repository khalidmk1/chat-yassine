{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('master.empty_page')

@section('content')
<x-auth-session-status class="mb-4" :status="session('status')" />

<div class="main-wrapper">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
            <div class="col-md-4 pe-md-0">
              
                <img class="auth-side-wrapper" src="{{asset("assets/images/login.png")}}" alt="login">
            
            </div>
            <div class="col-md-8 ps-md-0">
              <div class="auth-form-wrapper px-4 py-5">
                <a href="#" class="noble-ui-logo logo-light d-block mb-2">Noble<span>UI</span></a>
                <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                <form class="forms-sample" method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="mb-3">
                    <label for="userEmail" class="form-label">Email address</label>
                    <input type="email" type="email" name="email" :value="old('email')" required class="form-control" id="userEmail" placeholder="Email">
                  </div>
                  <div class="mb-3">
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" class="form-control"  name="password"
                    id="userPassword" autocomplete="current-password" placeholder="Password" required >
                  </div>
                  <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="authCheck" name="remember">
                    <label class="form-check-label" for="authCheck">
                      Remember me
                    </label>
                  </div>
                  <div>
                    <button  type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                  </div>
                  <a href="{{Route('register')}}" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                </form>
              </div>
            </div>
            
          </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
