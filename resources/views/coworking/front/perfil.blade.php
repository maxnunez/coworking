@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'perfil'])


<h2 class="d-block ">Mis Productos</h2>
  @include('coworking.front.Template.perfilTemplate',['items'=>$myProducts, 'file'=>'product_images', 'tag'=>'Productos'])
<h2 class="d-block">Mis Servicios</h2>
  @include('coworking.front.Template.perfilTemplate',['items'=>$myServices, 'file'=>'product_images', 'tag'=>'Servicio'])

<h2 class="d-block">Mis Cambios Pendientes</h2>

<h2 class="d-block">Mis Cambios</h2>

@endsection
