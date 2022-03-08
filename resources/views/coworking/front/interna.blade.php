@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=> $item->title])
<div class="container">
<div class=" row my-5">
    <div class="col ">
        <div class="card mx-auto my-3 " style="width: 95%;">
              <div style="background-image: url('{{  asset('img/'.$file.'/'.$item->url_img)  }}'); height:400px"
              class="image-card" ></div>
          <div class="card-body">
              <p class="card-text ">{!! $item->content !!}</p>

              <div class="d-block mt-3">
                  <span class="badge badge-info text-capitalize text-white ">{{ $item->type }}</span>
              </div>
          </div>
        </div>
    </div>
</div>
</div>
{{-- end content --}}
@endsection
