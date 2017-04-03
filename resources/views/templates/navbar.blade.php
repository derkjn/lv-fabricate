<div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu" style="display: block;">
        <li class="nav-header">
            <div class="dropdown profile-element"> <span>
                             </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xl ">{{ $user->name }} <strong
                                            class="font-bold"></strong>
                             </span> </a>
                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                    <li class="divider"></li>
                    <li><a href="{{ url("logout") }}">Logout</a></li>
                </ul>
            </div>
            <div class="logo-element">
                <img src="{{ asset("images/logo-inverse.png") }}" alt="a-frame exchange"
                     class="img-responsive admin-logo">
            </div>
        </li>
        <li class="">
            <a href="/admin"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
        </li>
        <li class="@if( Request::is('admin/printers*') ) active @endif">
            <a href="index.html"><i class="fa fa-print"></i> <span class="nav-label">Printers</span> <span
                        class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li class="@if( Request::is('admin/printers') ) active @endif">
                    <a href="{{ url("admin/printers") }}">All printers</a>
                </li>
                <li class="@if( Request::is('admin/printers/new') ) active @endif">
                    <a href="{{ url("admin/printers/new") }}">Add printer</a>
                </li>
            </ul>
        </li>
        <li class="@if( Request::is('admin/scanners*') ) active @endif">
            <a href="index.html"><i class="fa fa fa-fax"></i> <span class="nav-label">Scanners</span> <span
                        class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li class="@if( Request::is('admin/scanners') ) active @endif">
                    <a href="{{ url("admin/scanners") }}">All scanners</a>
                </li>
                <li class="@if( Request::is('admin/scanners/new') ) active @endif">
                    <a href="{{ url("admin/scanners/new") }}">Add scanners</a>
                </li>
            </ul>
        </li>
        <li class="@if( Request::is('admin/carvers*') ) active @endif">
            <a href="index.html"><i class="fa fa fa-cubes"></i> <span class="nav-label">Carvers</span> <span
                        class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li class="@if( Request::is('admin/carvers') ) active @endif">
                    <a href="{{ url("admin/carvers") }}">All carvers</a>
                </li>
                <li class="@if( Request::is('admin/carvers/new') ) active @endif">
                    <a href="{{ url("admin/carvers/new") }}">Add carvers</a>
                </li>
            </ul>
        </li>
        <li class="@if( Request::is('admin/brands*') ) active @endif">
            <a href="index.html"><i class="fa fa-clock-o"></i> <span class="nav-label">Brands</span> <span
                        class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li class="@if( Request::is('admin/brands') ) active @endif">
                    <a href="{{ url("admin/brands") }}">All brands</a>
                </li>
                <li class="@if( Request::is('admin/brands/new') ) active @endif">
                    <a href="{{ url("admin/brands/new") }}">Add brand</a>
                </li>
            </ul>
        </li>
        <li class="@if( Request::is('admin/stores*') ) active @endif">
            <a href="index.html"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Stores</span> <span
                        class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li class="@if( Request::is('admin/stores') ) active @endif">
                    <a href="{{ url("admin/stores") }}">All stores</a>
                </li>
                <li class="@if( Request::is('admin/stores/new') ) active @endif">
                    <a href="{{ url("admin/stores/new") }}">Add store</a>
                </li>
            </ul>
        </li>
    </ul>
</div>