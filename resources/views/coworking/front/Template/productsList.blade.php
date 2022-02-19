  <div class="col-sm-12 col-lg-8 conten-products ">
      @forelse ( $products as $product )
      <div class="card my-3" style="width: 20rem;">
          <div style="background-image: url('{{  asset('img/product_images/'.$product->url_img)  }}');"
              class="image-card"></div>
          <div class="card-body">
              <h5 class="card-title text-capitalize">{{ $product->title }}</h5>
              <p class="card-text ">{{ $product->abstract }}</p>
              <a href="{{  url('Producto-Mas/'.$product->id.'/'.$product->type) }}" class="btn btn-primary">Leer Mas</a>
              @if(Auth::user()->id != $product->user_id)
              <a href="" class="btn btn-primary">Intecambiar</a>
              @endif
              <div class="d-block mt-3">
                  <span class="badge badge-info text-capitalize text-white ">{{ $tag }}</span>
              </div>
          </div>
      </div>
      @empty
      No hay Productos ....
      @endforelse

  </div>
