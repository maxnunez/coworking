@extends('layouts.app')

@section('content')


<div class="app-container">
    <div style="height: 107vh;">
        <div class="no-gutters row" style="height: 107vh;">
            <div class="d-none d-lg-block col-lg-4">
                <div class="slider-light">
                    <div class="slick-slider">
                        <div>
                            <div style="height: 107vh;" class="position-relative d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                            <div class="slide-img-bg" style="background-image: url('{{asset('img')}}/bg-1.jpg');"></div>
                                <div class="slider-content">
                                    <h3>GLOBAL TEAM</h3>
                                    <p>Holding Business</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8" style="height: 107vh;">

                <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                    <div style="text-align: center;">
                        <img src="{{asset('img')}}/logo-global-09.png" width="220" alt="LOGO GLOBAL TEAM">
                    </div>
                    
                    <h4 class="mb-0" style="text-align: center;">
                        <span class="d-block">Registrarse</span>
                    </h4>
                <div>
                    <form method="GET"  action="{{ route('register-code.continue') }}">
                        <div class="form-row">
                            @csrf
                            <div class="col-md-8" style="margin: 0 auto;">
                                <div class="position-relative form-group">
                                    <label for="code" class="">Codigo de regerido *</label>
                                    <input id="code" type="text" placeholder="####-#" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

                                    @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8" style="margin: 0 auto;">
                                <button type="submit" style="width: 100%;" class="btn btn-primary btn-lg">Continuar >></button>
                            </div>

                            <div class="col-md-8" style="margin: 0 auto; text-align: center;">
                                <div class="divider row"></div>    
                            
                                    <h6 class="mt-3">¿Ya tienes una cuenta? <a href="{{ route('inicio') }}" class="text-primary">Ingresar</a></h6>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('¿Olvidaste tu contraseña?') }}</a>
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

