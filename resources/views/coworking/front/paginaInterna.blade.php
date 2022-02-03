@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=> $product->title])

<div class=" row my-5">
    @include('coworking.front.Template.asaidNoticias', ['news'=> $news, 'tag'=>'noticias'])

    <div class="col-sm-12 col-lg-8  ">
        <div class="card mx-auto my-3 " style="width: 95%;">
              <div style="background-image: url('{{  asset('img/product_images/'.$product->url_img)  }}'); height:400px"
              class="image-card" ></div>
          <div class="card-body">
              <p class="card-text ">{!! $product->content !!}</p>

              <div class="d-block mt-3">
                  <span class="badge badge-info text-capitalize text-white ">{{ $product->type }}</span>
              </div>
          </div>
        </div>
        @include('coworking.front.Template.interpage', ['items'=> $products ,'tag'=> $product->type])
    </div>
</div>
{{-- end content --}}
@endsection
