@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'productos'])


 <div class="row my-5" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 714px;">
    @include('coworking.front.Template.productsList', ['products'=> $bienes,'tag'=>'productos'])
  </div>
  {{-- end content --}}


@endsection
