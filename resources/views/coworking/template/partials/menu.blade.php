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
                <li>
                    <a href="{{url('admin/productos-servicios')}}">
                        <i class="metismenu-icon lnr-store icon-gradient bg-premium-dark"></i>
                        Productos y Servicios
                    </a>
                    <a href="{{url('admin/categorias')}}">
                        <i class="metismenu-icon lnr-tag icon-gradient bg-premium-dark"></i>
                        Categorias
                    </a>
                    <a href="{{url('admin/preguntas-respuetas')}}">
                        <i class="metismenu-icon lnr-question-circle icon-gradient bg-premium-dark"></i>
                        Pregunstas y Respuetas
                    </a>
                    <a href="{{url('admin/post-blogs')}}">
                        <i class="metismenu-icon lnr-book icon-gradient bg-premium-dark"></i>
                        Post Blogs
                    </a>
                     <a href="{{url('admin/noticias')}}">
                        <i class="metismenu-icon lnr-pencil icon-gradient bg-premium-dark"></i>
                        Noticias
                    </a>
                </li>
                 {{-- funciones de contabilidad --}}
                 @if(Auth::user()->rol == 'Administrador' || Auth::user()->rol == 'Contabilidad')
                 @endif
            </ul>
        </div>
    </div>
</div>
