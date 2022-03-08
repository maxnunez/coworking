@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'servicios'])

<div class="container">

<div class="row my-5" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 714px;">
    @include('coworking.front.Template.productsList', ['products'=>  $servicios,'tag'=>'servicios'])
  </div>
  {{-- end content --}}
</div>

@endsection
