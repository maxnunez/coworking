
      @forelse ( $products as $product )
      <div class="card my-3" style="width: 20rem;">
          <div style="background-image: url('{{  asset('img/product_images/'.$product->url_img)  }}');"
              class="image-card"></div>
          <div class="card-body">
              <h5 class="card-title text-capitalize">{{ $product->title }}</h5>
              <p class="card-text ">{{ $product->abstract }}</p>
              <a href="{{  url('Producto-Mas/'.$product->id.'/'.$product->type) }}" class="btn btn-primary">Leer Mas</a>
              @if(@Auth::user()->id != $product->user_id && Auth::check() )
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Intecambiar
              </button>
              @php $myproducts = myProducts(Auth::user()->id) @endphp
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title text-dark" id="exampleModalLabel">Crear Cambio/Trueque</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              {!! Form::open([
                              'url' => '/changeProduct/'.$product->id,
                              'class' => 'form-horizontal mx-auto',
                              'redirect'=> url('/'),
                              'autocomplete'=>'off'
                              ]) !!}
                              @foreach($myproducts as $item)
                              <label>
                                  <input type="radio" name="product_id" class="card-input-element d-none" id="demo1" value="{{ $item->id }}" >
                                  <div
                                      class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                      {{  $item->title }}  <span>{{ $item->type }}</span>
                                  </div>
                              </label>
                              @endforeach
                              <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Guardar Intercambios</button>
                          </div>
                          {!! Form::close() !!}
                      </div>
                  </div>
              </div>
              @endif
              <div class="d-block mt-3">
                  <span class="badge badge-info text-capitalize text-white ">{{ $tag }}</span>
              </div>
          </div>
      </div>
      @empty
      No hay Productos ....
      @endforelse
