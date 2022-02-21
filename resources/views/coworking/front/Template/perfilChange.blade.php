{{-- content --}}
<div class="row my-5" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 714px;">
    @forelse ($items as $item )
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 0%; top: 0px;">
        <div class="card">
            <div style="background-image: url('{{ asset('img/'.$file.'/'.$item->productoChange->url_img) }}');"
                class="image-card">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $item->productoChange->title }}</h5>
                <p class="card-text">{{ $item->productoChange->abstract }}</p>
                <div class="d-block mt-3">
                    <span class="badge badge-info text-capitalize text-white ">{{ $tag }}</span>
                </div>

                @if($item->status === 'pending')
                    @if( Auth::user()->id == $item->productoChange->user_id)
                    {!! Form::open([
                    'url' => '/changeActive/'.$item->id,
                    'class' => 'form-horizontal mx-auto',
                    'files'=>true,
                    'redirect'=> url('/'),
                    'autocomplete'=>'off'
                    ]) !!}
                    <button type="submit" class="btn btn-primary">Realizar Cambio</button>
                    {!! Form::close() !!}
                    @endif
                @endif
            </div>
        </div>
    </div>

    @empty
    No hay Items ...
    @endforelse

</div>
{{-- end content --}}
