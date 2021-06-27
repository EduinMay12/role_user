<body>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('./solid/dist/images/feature-icon-02.svg') }}" class="navbar-brand-img" alt="logo">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="../uploads/avatars/{{ auth()->user()->avatar }}">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Panel de Configuración') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-circle-08"></i>
                        <span>{{ __('Configuraciones de Perfil') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Actividad') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Ayuda de Soporte Tecnico') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-button-power"></i>
                        <span>{{ __('Salir') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('./solid/dist/images/feature-icon-02.svg') }}" class="navbar-brand-img" alt="...">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Configuración de administrador</h6>
            <!-- Navigation -->
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Perfil de Usuario') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Perfil de usuario') }}
                                </a>
                            </li>
                            @can('haveaccess','users.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.index') }}">
                                    {{ __('Lista de usuarios') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>

                    @can('haveaccess','role.index')
                    <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Roles') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('role.index')}}">
                                    {{ __('Lista de roles') }}
                                </a>
                            </li>
                            @can('haveaccess','role.create')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('role.create')}}">
                                    {{ __('Crear rol') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                    @endcan

                    @can('haveaccess','category.index')
                    <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Categorias') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('category.index')}}">
                                    {{ __('Lista de categoria') }}
                                </a>
                            </li>
                            @can('haveaccess','category.create')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('category.create')}}">
                                    {{ __('Crear categoria') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                    @endcan

                    @can('haveaccess','permission.index')
                    <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Permisos') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('permission.index')}}">
                                    {{ __('Lista de permisos') }}
                                </a>
                            </li>
                            @can('haveaccess','permission.create')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('permission.create')}}">
                                    {{ __('Crear permiso') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                    @endcan

                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
