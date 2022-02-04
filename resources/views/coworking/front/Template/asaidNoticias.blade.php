
    <div class="col-sm-12 col-lg-4 asaid-noticias ">
      @forelse ($news as $new )
          <div class="card my-3 mx-auto" style="width: 20rem;">
                 <div style="background-image: url('{{ asset('img/news_images/'.$new->url_img) }}');" class="image-card"></div>
                <div class="card-body">
                    <h5 class="card-title text-capitalize">{{ $new->title }}</h5>
                    <p class="card-text">{{ $new->abstract }}</p>
                    <a href="{{ url('Items-Mas/'.$new->id.'/News') }}" class="btn btn-primary">Leer Mas</a>
                    <div class="d-block mt-3">
                      <span class="badge badge-info text-capitalize text-white ">{{ $tag }}</span>
                    </div>
                </div>
            </div>
      @empty
      
      No hay noticias ... 
      @endforelse

    </div>