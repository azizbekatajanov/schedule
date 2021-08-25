<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('styles/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/adminlte/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/adminlte/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/main.css')}}">
    <title>Document</title>
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
    </style>
</head>
<body>
    <main>
        <div class="container-fluid">
            <header class="p-3 bg-dark text-white">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                        </a>

                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li><a href="{{route('homepage')}}" class="nav-link px-2 text-white">Home</a></li>
                        </ul>

                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                        </form>

                        @guest()
                        <div class="text-end">
                            <a href="{{route('signin.index')}}" type="button" class="btn btn-warning">Войти</a>
                        </div>
                        @endguest
                        @auth()
                            <div class="dropdown text-end">
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="mdo" width="32" height="32" class="rounded-circle">
                                </a href="#">
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                    <li><a class="dropdown-item" href="{{route('dashboard')}}">Админ панель</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{route('logout')}}">Выйти</a></li>
                                </ul>
                            </div>
                        @endauth
                    </div>
                </div>
            </header>
        </div>

        @yield('content')
    </main>

    <!-- Bootstrap 5 -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <script src="{{asset('js/select2.full.min.js')}}"></script>

    <script src="{{asset('js/adminlte.min.js')}}"></script>


    <script>
        $(function () {
            $('.select2').select2()
        });
    </script>
</body>
</html>
