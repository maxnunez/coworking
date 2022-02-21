@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'perfil'])

  <div class="card p-3 my-3">
    <blockquote class="blockquote mb-0 card-body">
      <img src="{{ Auth::user()->avatar() }}" class="rounded float-left" alt="image-perfil">
      <p class=" font-weight-normal">{{ Auth::user()->first_name }}  {{Auth::user()->last_name }}</p>
      <footer class="blockquote-footer">
        <div class="text-muted text-white bage-question" >
          {{ Auth::user()->address  }}
          <a href="mailto:{{ Auth::user()->email }}" class="btn btn-primary">{{ Auth::user()->email }}</a>

          @if( Auth::user()->numero_whatsapp)
          <a href="https://wa.me/{{ Auth::user()->numero_whatsapp }}" class="btn btn-primary">{{ Auth::user()->numero_whatsapp }}</a>
          @endif
        </div>
      </footer>
    </blockquote>
  </div>

<h2 class="d-block ">Mis Productos</h2>
  @include('coworking.front.Template.perfilTemplate',['items'=>@$myProducts, 'file'=>'product_images', 'tag'=>'Productos'])
<h2 class="d-block">Mis Servicios</h2>
  @include('coworking.front.Template.perfilTemplate',['items'=>@$myServices, 'file'=>'product_images', 'tag'=>'Servicio'])

<h2 class="d-block">Mis productos en cambios pendientes</h2>
  @include('coworking.front.Template.perfilMyChange',['items'=>@$pendings, 'file'=>'product_images', 'tag'=>'Pendiente a intercambio'])

<h2 class="d-block">Productos en cambio pendientes</h2>
@include('coworking.front.Template.perfilChange',['items'=>@$pendings, 'file'=>'product_images', 'tag'=>'Pendiente a intercambio'])

<h2 class="d-block">Mis Productos Cambiados</h2>
  @include('coworking.front.Template.perfilMyChange',['items'=>@$changes, 'file'=>'product_images', 'tag'=>'Cambiado'])

<h2 class="d-block">Productos cambiados </h2>
  @include('coworking.front.Template.perfilChange',['items'=>@$changes, 'file'=>'product_images', 'tag'=>'Cambiado'])
@endsection
