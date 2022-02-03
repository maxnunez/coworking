<div class="app-header header-shadow">
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
    <div class="app-header__content">
        <div class="app-header-right">


            {{-- *************** --}}
            {{-- notificaciones --}}
            {{-- *************** --}}
            <div class="header-dots">

                <div class="btn-group b-dropdown dropdown" id="__BVID__16">
                    <!---->
                    <button 
                        aria-haspopup="true" 
                        aria-expanded="false" 
                        type="button" 
                        class="btn-link dropdown-toggle-no-caret p-0 mr-2" 
                        id="show_notificaciones"
                        style="border: none !important; text-decoration: none !important; background-color: transparent;" 
                    >
                        <div class="icon-wrapper icon-wrapper-alt rounded-circle">
                            <div class="icon-wrapper-bg bg-danger"></div>
                            <i class="lnr-bullhorn text-danger"></i>
                            <div class="badge badge-dot badge-dot-sm badge-danger"></div>
                        </div>
                    </button>

                    <div
                        id="container-notificaciones" 
                        ruta=""
                        role="menu" 
                        tabindex="-1" 
                        class="dropdown-menu dropdown-menu-right dropdown-menu-xl" 
                        aria-labelledby="__BVID__16__BV_toggle_" 
                        style=""
                    >
                        <div class="dropdown-menu-header mb-0">
                            <div class="dropdown-menu-header-inner bg-deep-blue">
                                <div class="menu-header-image opacity-1 dd-header-bg-2"></div>
                                <div class="menu-header-content text-dark">
                                    <h5 class="menu-header-title">Notificaciones</h5>
                                    <h6 class="menu-header-subtitle">Tus ultimas 12 notificaciones son las siguientes</h6>
                                </div>
                            </div>
                        </div>
                        <div class="nav-justified">
                            <div class="tabs card-header-tab-animation" id="__BVID__17">
                                <div class="tab-content" id="__BVID__17__BV_tab_container_">
                                <div 
                                    role="tabpanel" 
                                    aria-hidden="false" 
                                    aria-expanded="true" 
                                    class="tab-pane p-3 card-body show fade active" 
                                    id="__BVID__21" 
                                    aria-labelledby="__BVID__21___BV_tab_button__" 
                                    style="outline: none;" 
                                    tabindex="0"
                                >
                                    <div class="scroll-gradient">
                                        <div class="scroll-area-sm" style="overflow: hidden;">
                                            <style>
                                                .ps-container.scrollbar-container.ps--theme_default.ps--active-y::-webkit-scrollbar {
                                                    width: 5px;
                                                }

                                                /* Track */
                                                .ps-container.scrollbar-container.ps--theme_default.ps--active-y::-webkit-scrollbar-track {
                                                    background: #f1f1f1;
                                                }

                                                /* Handle */
                                                .ps-container.scrollbar-container.ps--theme_default.ps--active-y::-webkit-scrollbar-thumb {
                                                    background: #888;
                                                }

                                                /* Handle on hover */
                                                .ps-container.scrollbar-container.ps--theme_default.ps--active-y::-webkit-scrollbar-thumb:hover {
                                                    background: #555;
                                                }
                                            </style>
                                            <section class="ps-container scrollbar-container ps--theme_default ps--active-y" style="overflow: auto;">
                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item-divider nav-item mt-0"></li>
                            <li class="nav-item-btn text-center nav-item">
                                <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">Ver todas</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            {{-- ***************** --}}
            {{-- boton de perfil --}}
            {{-- ***************** --}}            
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0">
                                    <img width="42" class="rounded-circle" src="{{asset('img')}}/usuarios/{{Auth::user()->avatar}}" alt="">
                                    {{-- <p style="display: inline-block; margin: 0; vertical-align: middle;">{{Auth::user()->name}}</p> --}}
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                    {{-- banner perfil --}}
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-7" style="background-image:"";"></div>
                                            <div class="menu-header-content text-left">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="55" height="55" class="rounded-circle" src="{{asset('img')}}/usuarios/{{Auth::user()->avatar}}" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><strong style="font-size: 1.5rem"> {{Auth::user()->name}}</strong></div>
                                                            <div class="widget-subheading opacity-8">
                                                                {{Auth::user()->rol}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-row" style="justify-content: space-around;">
                                        <li class="nav-item-btn text-center nav-item">
                                            <a class="btn-wide btn btn-primary btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Cerrar sesión
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>

                                        <li class="nav-item-btn text-center nav-item">
                                            <a class="btn-wide btn btn-primary btn-sm" href="">
                                                Mi perfil
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                               {{Auth::user()->name}}
                            </div>
                            <div class="widget-subheading">
                               {{Auth::user()->rol}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
