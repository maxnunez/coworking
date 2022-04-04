@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'Comunidad'])


<div class="container">
    {{-- content --}}
    <div class="row my-5" data-masonry="{&quot;percentPosition&quot;: true }"
        style="position: relative; height: 714px;">
        @forelse ($users as $item )
        <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 0%; top: 0px;">
            <div class="card">
                <img src="{{ asset('img/partnerUser_images/'.$item->url_img) }}" class="rounded mx-auto mt-2"
                    alt="image-perfil" height="80px" width="80px">
                <p class="text-uppercase text-center text-white mt-3 mb-0 p-1" style="background-color:#2ad2c9;">
                    {{ $item->name_complete }}</p>
                @if( $item->user_id === Auth::user()->id)
                <form action="{{url('eliminar-comunidad/'.$item->id )}}" method="POST" class="mt-2">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger ">Eliminar Usuario de Comunidad</button>
                </form>
                @endif
                <div class="card-body" style=" overflow-y: scroll;height: 270px;">
                    <p class="card-text">{!! $item->information !!}</p>
                </div>
            </div>
        </div>

        @empty
        No hay Items ...
        @endforelse


    </div>
    {{-- end content --}}

</div>
{{-- end content --}}


@endsection
