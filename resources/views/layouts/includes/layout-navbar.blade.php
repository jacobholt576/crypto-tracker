<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-navbar-theme container-p-x" id="layout-navbar">

    <!-- Brand -->
    <a href="{{ route('home') }}" class="navbar-brand">Crypto Currency Portfolio</a>

    @empty($hide_layout_sidenav_toggle)
    <!-- Sidenav toggle -->
    <div class="layout-sidenav-toggle navbar-nav align-items-lg-center mr-auto mr-lg-4">
        <a class="nav-item nav-link px-0 ml-2" href="javascript:void(0)">
            <i class="ion ion-md-menu text-large align-middle"></i>
        </a>
    </div>
    @endempty

    <!-- Navbar toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav ml-auto navbar-right">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>

</nav>
