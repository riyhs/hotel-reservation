<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .bg-image {
            max-height: 75vh;
            min-height: 75vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-image: url('https://images.unsplash.com/photo-1504289784232-667c4d9b766b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80');
        }

        .mask-hero {
            max-height: 75vh;
            min-height: 75vh;
            background-repeat: no-repeat;
            background-size: auto 70vw;
            background-position: left;
            background-image: url({{ asset('img/mask_hero.png') }})
        }

    </style>
</head>

<body class="antialiased">
    {{-- NAVBAR --}}
    <div class="container-fluid pt-3 pb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary ms-4">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-primary ms-4 me-2">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </div>
    {{-- END NAVBAR --}}

    {{-- HERO --}}
    <div class="container-fluid">
        <div class="bg-image mr-4 ml-4 rounded rounded-3 shadow-1-strong">
            <div class="mask-hero rounded rounded-3">
                <div class="container pt-5">
                    <h1 style="font-weight: 800; font-size: 54px;" class="mt-4">Enjoy Your <br>Dream Vacation
                    </h1>
                    <p style="max-width: 30vw;" class="mt-4">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Quasi officia
                        deleniti nisi??</p>
                </div>
            </div>
        </div>
        <div class="card mx-auto relative" style="max-width: 60vw; top:-65px">
            <div class="card-body">
                <div class="container">
                    <div class="row my-2">
                        <div class="col my-auto">
                            <label for="exampleFormControlInput1" class="form-label">Mlebu</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="col my-auto">
                            <label for="exampleFormControlInput1" class="form-label">Metu</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="col text-center my-auto">
                            <button type="button" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END HERO --}}

    {{-- FEATURE --}}
    <div class="container pb-3 mb-5 pt-2">
        <div class="row">
            <div class="col text-center">
                <div class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" style="max-height: 70px" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div class="row">
                    <p class="text-center">ththth</p>
                </div>
            </div>

            <div class="col text-center">
                <div class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" style="max-height: 70px" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div class="row">
                    <p class="text-center">ththth</p>
                </div>
            </div>

            <div class="col text-center">
                <div class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" style="max-height: 70px" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div class="row">
                    <p class="text-center">ththth</p>
                </div>
            </div>

            <div class="col text-center">
                <div class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" style="max-height: 70px" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div class="row">
                    <p class="text-center">ththth</p>
                </div>
            </div>

        </div>
    </div>
    {{-- END FEATURE --}}

    {{-- Room Type --}}
    <div class="container">
        <h3 style="font-weight: 600; font-size: 42px;" class="mb-5 text-center">Choice your heaven like</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        class="card-img-top" alt="..." style="max-height: 250px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1550581190-9c1c48d21d6c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1109&q=80"
                        class="card-img-top" alt="..." style="max-height: 250px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1537726235470-8504e3beef77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        class="card-img-top" alt="..." style="max-height: 250px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to additional content. Tish content little bit dowo stik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Room Type --}}

    <div class="container">
        <h3 style="font-weight: 600; font-size: 42px;" class="mt-5 mb-5 text-center">Nirvvana is heaven</h3>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
