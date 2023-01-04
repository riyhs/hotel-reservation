<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <link href="css/app.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
            background-image: url('https://images.unsplash.com/photo-1621293954908-907159247fc8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }

        .register {
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            background-color: #00000055;
        }

        .form-signin {
            width: 100%;
            max-width: 360px;
            padding: 32px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .form-signin button {
            border: 0 0 0 !important;
            border-color: #fff !important;
            border-radius: 0 !important;
            background-color: #f3c300;
            color: #fff;
        }

        .form-signin button:hover {
            border: 0 0 0 !important;
            border-color: #fff !important;
            background-color: #dbb314;
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="register">

        <main class="form-signin card">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <h1 class="h3 mb-4 mt-2 fw-normal">Register Account</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputUsername" placeholder="johndoe"
                        name="username">
                    <label for="floatingInputUsername">Username</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputName" placeholder="John Doe" name="name">
                    <label for="floatingInputName">Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                        name="email">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                        name="password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">Register</button>

                <a href="{{ route('login') }}">Already have one?</a>
            </form>
        </main>
    </div>

</body>

</html>
