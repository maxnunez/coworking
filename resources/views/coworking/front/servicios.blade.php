@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'servicios'])
<div class="container">

  <div class=" row my-5">
      <div class="col-sm-12 col-lg-4 asaid-noticias "></div>
    @include('coworking.front.Template.productsList', ['products'=>  $servicios,'tag'=>'servicios'])
  </div>
  {{-- end content --}}
</div>

@endsection
