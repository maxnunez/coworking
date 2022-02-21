  <!-- header -->
  <header class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class=" navbar-brand" href="index.html"><img src="{{ asset('front_page/img/fondo-oscuro.svg') }}"
                  alt="logo empresarial" class="navbar-logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ml-auto " id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                  <a class="nav-link active" href="{{ url('/') }}">Inicio</a>
                  <a class="nav-link" href="{{ route('productos') }}">Productos</a>
                  <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                  <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                  <a class="nav-link" href="{{ route('ayuda') }}">Ayuda</a>
                  <a class="nav-link" href="{{ route('noticias') }}">Noticias</a>
                  @if(@Auth::user())
                  <div class="btn-group dropleft">
                      <button type="button" class="btn btn-primary  " data-toggle="dropdown" aria-expanded="false">{{Auth::user()->first_name }}  {{ Auth::user()->last_name }}</button>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('/Perfil-User/'.Auth::user()->id)}}">Perfil</a>
                          <a class="dropdown-item" href="{{route('addFrontProducto') }}">Crear Servicio o Producto</a>
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logaut</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </div>
                  </div>
                  @endif
              </div>
          </div>
      </nav>
  </header>
  <!-- end header -->
  <!-- slider -->
  <div class="slider-content">
      <div id="carouselExampleCaptions" class="carousel slide container-md  container-fluid" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner banner-wefu">
              <div class="carousel-item active">
                  <img src="{{ asset('front_page/img/1.jpg') }}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="{{ asset('front_page/img/2.jpg') }}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="{{ asset('front_page/img/4.jpg') }}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                  </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </button>
      </div>
  </div>
  <!-- end slider -->
