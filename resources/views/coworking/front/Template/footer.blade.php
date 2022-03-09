 <!-- end content -->
  <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; right: 19px;"><i class="fa-solid fa-angle-up"></i></a>
  <!-- footer -->
  <div class="footer py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-4">
          <div class="logo py-3">
            <img src="{{ asset('front_page/img/fondo-oscuro.png') }}" alt="logo empresarial" height="90px">
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          {{-- <p class="pt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ex iste incidunt dolorem modi animi
            accusamus, saepe provident odio ipsam dolores quisquam consequatur maiores placeat veritatis sit illum earum
            optio.</p> --}}
        </div>
        <div class="col-sm-12 col-md-4 ">
          <div class="py-3 list-menu">
            <ul >
              <li>
                <a  href="{{ url('/') }}">
                  Inicio
                </a>
              </li>
              <li>
                <a  href="{{ route('ayuda') }}">
                    Ayuda
                </a>
              </li>
              <li>
                <a  href="{{ route('blog') }}">
                  Blog
                </a>
              </li>
              {{-- <li>
                <a href="#" class="btn btn-primary">Login</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-text">
  <p class="py-3">©2022 Global Team Todos los derechos reservados</p>
  </div>
  <!-- end footer -->
