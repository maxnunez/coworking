@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'perfil'])


<h2 class="d-block ">Mis Productos</h2>
  @include('coworking.front.Template.perfilTemplate',['items'=>$myProducts, 'file'=>'product_images', 'tag'=>'Productos'])
<h2 class="d-block">Mis Servicios</h2>
  @include('coworking.front.Template.perfilTemplate',['items'=>$myServices, 'file'=>'product_images', 'tag'=>'Servicio'])

<h2 class="d-block">Mis productos en cambios pendientes</h2>
  @include('coworking.front.Template.perfilMyChange',['items'=>$pendings, 'file'=>'product_images', 'tag'=>'Pendiente a intercambio'])

<h2 class="d-block">Productos en cambio pendientes</h2>
@include('coworking.front.Template.perfilChange',['items'=>$pendings, 'file'=>'product_images', 'tag'=>'Pendiente a intercambio'])

<h2 class="d-block">Mis Productos Cambiados</h2>
  @include('coworking.front.Template.perfilMyChange',['items'=>$changes, 'file'=>'product_images', 'tag'=>'Cambiado'])

<h2 class="d-block">Productos cambiados </h2>
  @include('coworking.front.Template.perfilChange',['items'=>$changes, 'file'=>'product_images', 'tag'=>'Cambiado'])
@endsection
