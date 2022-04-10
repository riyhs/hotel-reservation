<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Home</li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="blank.html"><i class="far fa-square"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Master</li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href={{ route('room') }}><i class="far fa-bookmark"></i>
                    <span>Room</span>
                </a>
            </li>
            <li
                class="
                    {{ request()->is('room_spec') ? 'active' : '' }}
                    {{ request()->is('room_spec/create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('room_spec') }}"><i class="far fa-address-book"></i>
                    <span>Room Spec</span>
                </a>
            </li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="blank.html"><i class="far fa-address-book"></i>
                    <span>Room Facility</span>
                </a>
            </li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="blank.html"><i class="far fa-bell"></i>
                    <span>Hotel Facility</span>
                </a>
            </li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="blank.html"><i class="far fa-address-book"></i>
                    <span>Reservation</span>
                </a>
            </li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="blank.html"><i class="far fa-address-book"></i>
                    <span>Guest</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
