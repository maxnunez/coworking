{{-- content --}}
<div class="row my-5" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 714px;">
    @forelse ($items as $item )
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 0%; top: 0px;">
        <div class="card">
            <div style="background-image: url('{{ asset('img/'.$file.'/'.@$item->producto->url_img) }}');"
                class="image-card">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ @$item->producto->title }}</h5>
                <p class="card-text">{{ @$item->producto->abstract }}</p>
                <div class="d-block mt-3">
                    <span class="badge badge-info text-capitalize text-white ">{{ $tag }}</span>
                    <span class="badge badge-info text-capitalize text-white ">{{ @$item->user->first_name}}
                        {{ @$item->user->last_name }}</span>
                    <span class="badge badge-info text-capitalize text-white ">{{ $item->user->email }}</span>
                    @if( $item->user->numero_whatsapp)
                    <a href="https://wa.me/{{ $item->user->numero_whatsapp }} target="_blank""
                        class="btn btn-primary">{{$item->user->numero_whatsapp }}</a>
                    @endif
                </div>

            </div>
        </div>
    </div>

    @empty
    No hay Items ...
    @endforelse

</div>
{{-- end content --}}
