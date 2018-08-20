<div id="layout-sidenav" class="{{ isset($layout_sidenav_horizontal) ? 'layout-sidenav-horizontal sidenav-horizontal container-p-x flex-grow-0' : 'layout-sidenav sidenav-vertical' }} sidenav bg-sidenav-theme">

    <!-- Inner -->
    <ul class="sidenav-inner{{ empty($layout_sidenav_horizontal) ? ' py-1' : '' }}">

        <li class="sidenav-item{{ Request::is('/') ? ' active' : '' }}">
            <a href="{{ route('home') }}" class="sidenav-link"><i class="sidenav-icon ion ion-ios-contact"></i><div>Home</div></a>
        </li>

        <li class="sidenav-item{{ Request::is('market') ? ' active' : '' }}">
            <a href="{{ route('market') }}" class="sidenav-link"><i class="sidenav-icon ion ion-md-desktop"></i><div>Market</div></a>
        </li>

        <li class="sidenav-item{{ Request::is('market') ? ' active' : '' }}">
            <a href="#" class="sidenav-link"><i class="sidenav-icon ion ion-md-desktop"></i><div>Dashboard</div></a>
        </li>

    </ul>
</div>
