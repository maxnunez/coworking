@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'Comunidad'])



{{-- content --}}
<div class="row my-5" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 714px;">
    @forelse ($users as $item )
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 0%; top: 0px;">
        <div class="card">

            @if($item->avatar)
            <img src="http://backoffice.wefu.com.co/img/usuarios/{{ $item->avatar }}" class="rounded mx-auto mt-2"
                alt="image-perfil" height="80px" width="80px">
            @else
            <img src="http://backoffice.wefu.com.co/img/usuarios/defecto5.jpeg" class="rounded mx-auto mt-2" alt="image-perfil"
                height="80px" width="80px">
            @endif
        <p class="text-uppercase text-center text-white mt-3 mb-0">{{ $item->name_complete }}</p>
        <div class="card-body"   style=" overflow-y: scroll;height: 270px;">
            <p class="card-text">{!! $item->information !!}</p>
        </div>
    </div>
</div>

@empty
No hay Items ...
@endforelse


</div>
{{-- end content --


  {{-- end content --}}


@endsection
