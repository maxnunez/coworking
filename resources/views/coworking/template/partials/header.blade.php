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




            {{-- ***************** --}}
            {{-- boton de perfil --}}
            {{-- ***************** --}}
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0">
                                    <img width="42" class="rounded-circle" src="{{}}" alt="">
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
                                                            <img width="55" height="55" class="rounded-circle" src="{{  }}" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><strong style="font-size: 1.5rem"> {{Auth::user()->first_name }} - {{ Auth::user()->last_name }} </strong></div>
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                               {{Auth::user()->first_name}}
                               {{ Auth::user()->last_name }}
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
