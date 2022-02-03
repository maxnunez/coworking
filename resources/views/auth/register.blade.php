 @extends('layouts.app')

@section('content')

@php
    if (empty($user)) {
        header("location:/register-code");
    }
@endphp



<div class="app-container">
    <div style="height: 100vh;">
        <div class="no-gutters row" style="height: 100vh;">
            <div class="d-none d-lg-block col-lg-4">
                <div class="slider-light">
                    <div class="slick-slider">
                        <div>
                            <div style="height: 100vh;" class="position-relative d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
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
            <div class="d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8" style="height: 100vh;">

                <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                    <div 
                        style="
                            display: flex;
                            flex-direction: row;
                            justify-content: center;
                            align-items: center;
                        "
                    >
                        <div 
                            style="
                                width: 50px;
                                height: 50px;
                                border-radius: 50%;
                                overflow: hidden;
                                margin-right: 25px;
                                box-shadow: 1px 1px 4px rgba(0,0,0,0.5);
                            "
                        >
                            <img src="{{$user->avatar()}}" style="width: 50px;">
                        </div>
                        <div>
                            <span>Referido por: </span>
                            <strong>{{$user->name}}</strong>
                        </div>
                    </div>


                    <div>
                        <form method="POST"  action="{{ route('register.referido', $user->id) }}">                          
                            {{ method_field('PUT') }}
                            <div class="form-row">
                                @csrf
                                <div class="col-md-8" style="margin: 0 auto;">
                                    <div class="divider row"></div>

                                    <div class="position-relative form-group">
                                        <label for="name" class="">Nombre *</label>
                                        <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="email" class="">Correo *</label>
                                        <input id="email" type="email" placeholder="Correo electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="password" class="">Contraseña *</label>
                                        <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="password" class="">Confirmar contraseña *</label>
                                        <input id="password" type="password" placeholder="Contraseña" class="form-control" name="password_confirmation" required autocomplete="current-password">
                                    </div>
                                </div>


                                <div class="col-md-8" style="margin: 0 auto;">
                                    <h6 class="mt-3" style="text-align: center;">
                                        Al usted registrarse acepta nuestros <a href="#" class="text-primary">Términos y Condiciones</a>
                                    </h6>

                                    <div class="divider row"></div>

                                    <button type="submit" style="width: 100%;" class="btn btn-primary btn-lg">Registrarse</button>

                                    <h6 class="mt-3" style="text-align: center;">
                                        ¿Ya tienes una cuenta? <a href="{{route('login')}}" class="text-primary">Iniciar sesión</a>
                                    </h6>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection

