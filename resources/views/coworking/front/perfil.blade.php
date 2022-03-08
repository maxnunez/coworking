@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'perfil'])
<div class="container">
  <div class="card p-3 my-3">
    <blockquote class="blockquote mb-0 card-body">
      @if(Auth::user()->avatar)
      <img src="http://backoffice.wefu.com.co/img/usuarios/{{ Auth::user()->avatar }}" class="rounded " alt="image-perfil" height="80px">
      @else
      <img src="http://backoffice.wefu.com.co/img/usuarios/defecto5.jpeg" class="rounded " alt="image-perfil" height="80px">
      @endif
      <p class="d-block font-weight-normal">{{ Auth::user()->first_name }}  {{Auth::user()->last_name }}</p>
      <p class="d-block font-weight">{{ Auth::user()->address  }}</p>
      <footer class="blockquote-footer">
        <div class="text-muted text-white bage-question" >
          <a href="mailto:{{ Auth::user()->email }}" class="btn btn-primary">{{ Auth::user()->email }}</a>
          @if( Auth::user()->numero_whatsapp)
          <a href="https://wa.me/{{ Auth::user()->numero_whatsapp }}" class="btn btn-primary" target="_blank">{{ Auth::user()->numero_whatsapp }}</a>
          @endif
        </div>
      </footer>
    </blockquote>
  </div>

<h2 class="d-block ">Mis Productos</h2>
  @include('coworking.front.Template.perfilTemplate',['items'=>@$myProducts, 'file'=>'product_images', 'tag'=>'Productos'])
<h2 class="d-block">Mis Servicios</h2>
  @include('coworking.front.Template.perfilTemplate',['items'=>@$myServices, 'file'=>'product_images', 'tag'=>'Servicio'])

<h2 class="d-block">Productos en cambios pendientes</h2>
  @include('coworking.front.Template.perfilMyChange',['items'=>@$pendings, 'file'=>'product_images', 'tag'=>'Pendiente a intercambio'])

<h2 class="d-block">Mis productos en cambio pendientes</h2>
@include('coworking.front.Template.perfilChange',['items'=>@$pendings, 'file'=>'product_images', 'tag'=>'Pendiente a intercambio'])

<h2 class="d-block">Productos Cambiados</h2>
  @include('coworking.front.Template.perfilMyChange',['items'=>@$changes, 'file'=>'product_images', 'tag'=>'Cambiado'])

<h2 class="d-block">Mis Productos cambiados </h2>
  @include('coworking.front.Template.perfilChange',['items'=>@$changes, 'file'=>'product_images', 'tag'=>'Cambiado'])
  </div>
@endsection
