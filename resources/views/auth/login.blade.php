@extends('layouts.app')

@section('content')
<div class="app-container">
    <div class="h-100">
        <div class="h-100 no-gutters row">
            <div class="d-none d-lg-block col-lg-4">
                <div class="slider-light">
                    <div class="slick-slider">
                        <div>
                            <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                <div class="slide-img-bg" style="background-image: url('{{asset('img')}}/bg-1.jpg');">
                                </div>
                                <div class="slider-content">
                                    <h3>
                                        GLOBAL TEAM
                                    </h3>
                                    <p>
                                        Holding Business
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                    <div style="text-align: center;">
                        <img alt="LOGO GLOBAL TEAM" src="{{asset('img')}}/logo-global-09.png" width="220">
                        </img>
                    </div>
                    <h4 class="mb-0" style="text-align: center;">
                        <span class="d-block">
                            Bienvenido
                        </span>
                        <span>
                            Inicie sesión en su cuenta.
                        </span>
                    </h4>
                    <div>
                        <form action="{{ route('login') }}" method="POST">
                            <div class="form-row">
                                @csrf
                                <div class="col-md-8" style="margin: 0 auto;">
                                    <div class="position-relative form-group">
                                        <label class="" for="email">
                                            Correo
                                        </label>
                                        <input autocomplete="email" autofocus="" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo electrónico" required="" type="email" value="{{ old('email') }}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                            @enderror
                                        </input>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label class="" for="password">
                                            Contraseña
                                        </label>
                                        <input autocomplete="current-password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña" required="" type="password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                            @enderror
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-8" style="margin: 0 auto;">
                                    <button class="btn btn-primary btn-lg" style="width: 100%;" type="submit">
                                        Ingresar
                                    </button>
                                </div>
                                <div class="col-md-8" style="margin: 0 auto; text-align: center;">
                                    <div class="divider row">
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
