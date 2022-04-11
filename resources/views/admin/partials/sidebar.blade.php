<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Hotel Asyik</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ASYK</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Home</li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-chart-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Master</li>
            <li class="{{ request()->is('room') ? 'active' : '' }}">
                <a class="nav-link" href={{ route('room') }}><i class="fas fa-bed"></i>
                    <span>Room</span>
                </a>
            </li>
            <li
                class="
                    {{ request()->is('room_spec') ? 'active' : '' }}
                    {{ request()->is('room_spec/create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('room_spec') }}"><i class="fab fa-houzz"></i>
                    <span>Room Spec</span>
                </a>
            </li>
            <li class="{{ request()->is('hotel_facility') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('hotel_facility') }}"><i class="far fa-building"></i>
                    <span>Hotel Facility</span>
                </a>
            </li>
            <li class="{{ request()->is('reservation') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('reservation') }}"><i class="far fa-address-book"></i>
                    <span>Reservation</span>
                </a>
            </li>
            <li class="{{ request()->is('guest') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('guest') }}"><i class="far fa-address-book"></i>
                    <span>Guest</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
