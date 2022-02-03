@extends('coworking.layouts.app')

@section('content')


	<div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-user icon-gradient bg-warm-flame"></i>
                    {{-- <img src="{{Auth::user()->avatar()}}"> --}}
                </div>
                <div>¡{{Auth::user()->name}}  Bienvenido!</div>
            </div>
        </div>
    </div>
    
    <div class="p-large">
        <div class="content">
            <div class="desarrollo">
                <img src="{{asset('img')}}/home.jpg">
            </div>
        </div>
    </div>


@endsection
