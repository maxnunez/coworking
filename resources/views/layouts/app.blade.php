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
                    <!-- Scripts -->
                    {{--
                    <script defer="" src="{{ asset('js/app.js') }}">
                    </script>
                    --}}
                    <script crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" src="https://code.jquery.com/jquery-3.3.1.min.js">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/metismenu">
                    </script>
                    <script crossorigin="anonymous" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js">
                    </script>
                    <script defer="" src="{{ asset('js/globalteam.js') }}">
                    </script>
                    <script defer="" src="{{ asset('js/demo.js') }}">
                    </script>
                    <script defer="" src="{{ asset('front_page/editor.js') }}">
                    </script>
                    <!-- Fonts -->
                    <link href="//fonts.gstatic.com" rel="dns-prefetch">
                        <link href="{{asset('css')}}/base.css?version=2" rel="stylesheet">
                            <link href="{{asset('css')}}/estilos.css" rel="stylesheet">
                                <link href="{{asset('front_page/editor.css')}}" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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
            @include('template.partials.header')
            <div class="app-main">
                @include('template.partials.menu')
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        @yield('content')
                    </div>
                </div>
            </div>
            @endguest
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#txtEditor").Editor();
            });
        </script>
    </body>
</html>
