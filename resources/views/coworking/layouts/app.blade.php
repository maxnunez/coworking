<!DOCTYPE doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <!-- CSRF Token -->
                <meta content="{{ csrf_token() }}" name="csrf-token">
                    <title>
                        {{ config('app.name', 'Laravel') }}
                    </title>
                    <link href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
                        <!-- Scripts -->
                        {{--
                        <script defer="" src="{{ asset('js/app.js') }}">
                        </script>
                        --}}
                        <script crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" src="https://code.jquery.com/jquery-3.3.1.min.js">
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/metismenu">
                        </script>
                        <script crossorigin="anonymous" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js">
                        </script>
                        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js">
                        </script>
                        <script defer="" src="{{ asset('js/globalteam.js') }}">
                        </script>
                        <script defer="" src="{{ asset('js/demo.js') }}">
                        </script>
                        <script defer="" src="{{ asset('front_page/jquery.multi-select.js') }}">
                        </script>
                        <!-- Fonts -->
                        <link href="//fonts.gstatic.com" rel="dns-prefetch">
                            <link href="{{asset('css')}}/base.css?version=2" rel="stylesheet">
                                <link href="{{asset('css')}}/estilos.css" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
                                        <link href="{{ asset('front_page/multi-select.css') }}" rel="stylesheet">
                                            <!-- Styles -->
                                            {{--
                                            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                                                --}}
    {{--  CoWorking --}}
                                                <script src="{{ asset('js_coworking/brands.js') }}">
                                                </script>
                                                <script src="{{ asset('js_coworking/fontawesome.js') }}">
                                                </script>
                                                <script src="{{ asset('js_coworking/regular.js') }}">
                                                </script>
                                                <script src="{{ asset('js_coworking/solid.js') }}">
                                                </script>
                                                <script src="{{ asset('js_coworking/v4-shims.js') }}">
                                                </script>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <div class="alerta-app @if (session('status')) active @endif">
            <span>
                x
            </span>
            <p>
                {{ session('status') }}
            </p>
        </div>
        <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
            @guest
            @yield('content')
        @else
            @include('coworking.template.partials.header')
            <div class="app-main">
                @include('coworking.template.partials.menu')
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        @yield('content')
                    </div>
                </div>
            </div>
            @endguest
        </div>
        <script src="http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="text/javascript">
        </script>
        <script>
            $(document).ready( function () {

          $('.dataTables-example').DataTable({
              "language": {
                  "emptyTable":     "No existen datos disponibles en la tabla",
                  "info":           "Mostrando de _START_ a _END_ de _TOTAL_ registros",
                  "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                  "infoFiltered":   "(filtrado de _MAX_ registros)",
                  "infoPostFix":    "",
                  "thousands":      ",",
                  "lengthMenu":     "Mostrar _MENU_ registros",
                  "loadingRecords": "Cargando...",
                  "processing":     "Procesando...",
                  "search":         "Buscar:",
                  "zeroRecords":    "No existen coincidencias",
                  "paginate": {
                      "first":      "Primero",
                      "last":       "Último",
                      "next":       "Siguiente",
                      "previous":   "Anterior"
                  },
                  "aria": {
                      "sortAscending":  ": activate to sort column ascending",
                      "sortDescending": ": activate to sort column descending"
                  }
              }
          });
      });

        </script>
        {{--  --}}
        <script type="text/javascript">
        $(document).ready(function() {

           $('.ckeditor').ckeditor();

           $('#select-picker').multiSelect();
        });
        </script>
        @yield('js')
    </body>
</html>
