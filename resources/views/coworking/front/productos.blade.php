@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'productos'])


  <div class=" row my-5">
      <div class="col-sm-12 col-lg-4 asaid-noticias "></div>
    @include('coworking.front.Template.productsList', ['products'=> $bienes,'tag'=>'productos'])
  </div>
  {{-- end content --}}


@endsection
