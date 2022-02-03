@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'servicios'])
<div class="container">

  <div class=" row my-5">
    @include('coworking.front.Template.asaidNoticias', ['news'=> $news, 'tag'=>'noticias'])
    @include('coworking.front.Template.productsList', ['products'=>  $servicios,'tag'=>'servicios'])
  </div>
  {{-- end content --}}
</div>

@endsection