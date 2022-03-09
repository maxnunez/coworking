  <!-- header -->
  <header class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class=" navbar-brand" href="{{url('/') }}"><img src="{{ asset('front_page/img/fondo-oscuro.png') }}"
                  alt="logo empresarial" class="navbar-logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ml-auto " id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                  <a class="nav-link active" href="{{ url('/') }}">Inicio</a>
                  <a class="nav-link " href="{{ url('/Comunidad') }}">Comunidad</a>
                  <a class="nav-link" href="{{ route('productos') }}">Productos</a>
                  <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                  <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                  <a class="nav-link" href="{{ route('ayuda') }}">Ayuda</a>
                  @if(@Auth::user())
                  <div class="btn-group dropleft">
                      <button type="button" class="btn btn-primary  " data-toggle="dropdown"
                          aria-expanded="false">{{Auth::user()->first_name }} {{ Auth::user()->last_name }}</button>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('/Perfil-User/'.Auth::user()->id)}}">Perfil</a>
                          @php $exists = myComunidad(Auth::user()->id) @endphp
                          @if(count($exists) != 1 )
                          <a class="dropdown-item" href="{{route('addfrontcomunidad') }}">Unete a la comunidad</a>
                          @endif
                          <a class="dropdown-item" href="{{route('addFrontProducto') }}">Crear Servicio o Producto</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logaut</a>
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
      <div id="carouselExampleCaptions" class="carousel slide  container-fluid" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner carousel-inner--top  banner-wefu">
              <div class="carousel-item active" style="background-image: url('{{ asset('front_page/img/1.jpg') }}')">
                  <div class="carousel-caption d-block  d-md-block">
                      <h5>Una comunidad más receptiva, más humana y colaborativa.</h5>
                  </div>
              </div>
              <div class="carousel-item" style="background-image: url('{{ asset('front_page/img/2.png') }}')">
                  <div class="carousel-caption d-block d-md-block">
                      <h5>Una comunidad para compartir.
                          Canjea bienes y servicios, en cualquier lugar y en cualquier momento.</h5>
                  </div>
              </div>
              <div class="carousel-item" style="background-image: url('{{ asset('front_page/img/4.jpg') }}')">
                  <div class="carousel-caption d-block d-md-block">
                      <h5>Comienza a Intercambiar. Comienza  a compartir. Empieza a marcar la diferencia.</h5>
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
