<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>

    <div class="scrollbar-sidebar cotainer-menu-laterar" style="overflow: auto;">
        <div class="app-sidebar__inner">

            <ul class="vertical-nav-menu">

                <li class="app-sidebar__heading">Menu</li>
                <li>
                    <a href="{{route('home')}}">
                        <i class="metismenu-icon lnr-screen icon-gradient bg-premium-dark"></i>
                        Inicio
                    </a>
                </li>

                <li>
                    <a href="{{route('cursos.indexuser')}}">
                        <i class="metismenu-icon lnr-graduation-hat icon-gradient bg-premium-dark"></i>
                        Centro de aprendizaje
                    </a>
                </li>
                <li>
                    <a href="https://globalteam.company/global-store/" target="_blank">
                        <i class="metismenu-icon fa pe-7s-shopbag icon-gradient bg-premium-dark"></i>
                        Global Store
                    </a>
                </li>
                <li>
                    <a href="{{route('coworking')}}" >
                        <i class="metismenu-icon fa pe-7s-users icon-gradient bg-premium-dark"></i>
                        Coworking
                    </a>
                </li>
                <li>
                    <a href="{{route('home.redsolidaria')}}" >
                        <i class="metismenu-icon fa pe-7s-users icon-gradient bg-premium-dark"></i>
                        Red de intercamcio
                    </a>
                </li>
                <li>
                    <a href="{{route('intercambios')}}">
                        <i class="metismenu-icon pe-7s-science pe-spin"></i>
                        Red Intercambios - Nuevo
                    </a>
                </li>
                <li>
                    <a href="{{route('insignias.user')}}">
                        <i class="metismenu-icon pe-7s-medal icon-gradient bg-premium-dark"></i>
                        Mis insignias
                    </a>
                </li>
                <li>
                    <a href="{{route('referidos')}}">
                        <i class="metismenu-icon lnr-user icon-gradient bg-premium-dark"></i>
                        Mis Referidos
                    </a>
                </li>
                <li>
                    <a href="{{route('cobros')}}">
                        <i class="metismenu-icon pe-7s-piggy icon-gradient bg-premium-dark"></i>
                        Mis cobros
                    </a>
                </li>
                <li>
                    <a href="{{ route('empresa.misempresas') }}">
                        <i class="metismenu-icon pe-7s-id icon-gradient bg-premium-dark"></i>
                        Mis Empresas
                    </a>
                </li>
                <li>
                    <a href="{{ route('perfil') }}">
                        <i class="metismenu-icon pe-7s-id icon-gradient bg-premium-dark"></i>
                        Mi Perfil
                    </a>
                </li>

                {{-- opciones admin --}}

                 @if(Auth::user()->rol != 'Administrador')
                    <li>
                        <a href="https://pqrs.globalteam.company/peticion/create" target="_blank">
                            <i class="metismenu-icon fa pe-7s-headphones icon-gradient bg-premium-dark"></i>
                            Soporte
                        </a>
                    </li>
                @endif

                @if(Auth::user()->rol == 'Administrador')
                    <li class="app-sidebar__heading">Funciones de administrador</li>
                    <li>
                        <a href="{{route('users')}}">
                            <i class="metismenu-icon lnr-user icon-gradient bg-premium-dark"></i>
                            Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="{{route('insignias')}}">
                            <i class="metismenu-icon pe-7s-medal icon-gradient bg-premium-dark"></i>
                            Insignias
                        </a>
                    </li>
                 @endif

                 @if(Auth::user()->rol == 'Administrador' || Auth::user()->rol == 'Coworking')
                    <li class="app-sidebar__heading">Funciones de Coworking</li>
                    <li>
                        <a href="{{route('categorias-coworking')}}">
                            <i class="metismenu-icon lnr-user icon-gradient bg-premium-dark"></i>
                            Categorias PS
                        </a>
                    </li>

                    <li>
                        <a href="{{route('empresa')}}">
                            <i class="metismenu-icon pe-7s-id icon-gradient bg-premium-dark"></i>
                            Empresas
                        </a>
                    </li>
                 @endif

                 {{-- <li class="app-sidebar__heading">Centro de Aprendizaje</li>

                 <li>
                    <a href="{{route('cursos')}}">
                        <i class="metismenu-icon lnr-graduation-hat icon-gradient bg-premium-dark"></i>

                        Cursos
                    </a>
                </li> --}}


                {{-- <li class="app-sidebar__heading">Aplicaciones</li>
                <li>
                    <a href="{{route('empresa')}}">
                        <i class="metismenu-icon fa fa-users icon-gradient bg-primary"></i>
                       Coworking
                   </a>
                </li> --}}

                 @if(Auth::user()->rol == 'Administrador' || Auth::user()->rol == 'CAN')
                    <li class="app-sidebar__heading">Funciones de CAN</li>
                    <li>
                        <a href="{{route('recursos.categorias')}}">
                            <i class="metismenu-icon lnr-user icon-gradient bg-premium-dark"></i>
                            Categorías recursos
                        </a>
                    </li>
                    <li>
                        <a href="{{route('recursos')}}">
                            <i class="metismenu-icon lnr-user icon-gradient bg-premium-dark"></i>
                            recursos
                        </a>
                    </li>
                    <li class="app-sidebar__heading">Red de intercambio solidario</li>
                    <li>
                        <a href="{{route('categorias.redsolidaria')}}">
                            <i class="metismenu-icon lnr-user icon-gradient bg-premium-dark"></i>
                            Categorías
                        </a>
                    </li>
                 @endif


                 {{-- funciones de contabilidad --}}
                 @if(Auth::user()->rol == 'Administrador' || Auth::user()->rol == 'Contabilidad')
                    <li class="app-sidebar__heading">Funciones de Contabilidad</li>
                    <li>
                        <a href="{{route('cobros.index')}}">
                            <i class="metismenu-icon pe-7s-piggy icon-gradient bg-premium-dark"></i>
                            Solicitudes de cobros
                        </a>
                    </li>
                    <li>
                        <a href="{{route('membresias.index')}}">
                            <i class="metismenu-icon pe-7s-wallet icon-gradient bg-premium-dark"></i>
                            Pagos de membresias
                        </a>
                    </li>
                 @endif
            </ul>
        </div>
    </div>
</div>
