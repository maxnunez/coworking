<div class="row">
    @forelse ($items as $item)
    <div class="col">
        <div class="card my-3 mx-auto" style="width: 20rem;">
            <div style="background-image: url('{{ asset('img/product_images/'.$item->url_img) }}');" class="image-card">
            </div>
            <div class="card-body">
                <h5 class="card-title text-capitalize">{{ $item->title }}</h5>
                <p class="card-text">{{ $item->abstract }}</p>
                <a href="{{  url('Producto-Mas/'.$item->id.'/'.$item->type) }}" class="btn btn-primary">Leer Mas</a>
                  @if($item->user_id === Auth::user()->id)
                <form action="{{url('eliminar-producto/'.$item->id)}}" method="POST" class="mt-2">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger ">Eliminar producto</button>
                </form>
                  @endif
                <div class="d-block mt-3">
                    <span class="badge badge-info text-capitalize text-white ">{{ $tag }}</span>
                </div>

            </div>
        </div>
    </div>
    @empty
    no hay mas elementos ....
    @endforelse

</div>
