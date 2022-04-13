<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html">
                <h2>Hotel Asyk</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ url('/') }}">Home</a></li>

                    <li class="nav-item {{ request()->is('accomodation') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ url('/accomodation') }}">Accomodation</a></li>

                    @if (Route::has('login'))
                        @auth('guest')
                            <li class="nav-item {{ request()->is('booking') ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ url('/booking') }}">Booking History</a></li>

                            <li class="nav-item"><a href="{{ url('/logout') }}" class="nav-link">Log Out</a>
                            </li>

                            <li class="nav-item">
                                <img class="rounded-circle profile_menu " src="img/pexels-stefan-stefancik-91227.jpg"
                                    alt="Photo by Stefan Stefancik from Pexels" style="margin-top: 15px">
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>
