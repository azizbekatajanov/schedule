<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('styles/adminlte/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('styles/adminlte/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('dashboard')}}" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a href="{{route('homepage')}}" class="nav-link">
                    <i class="nav-icon fas fa-home fa-2x"></i>
                </a>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('/storage/images/'.Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info pl-4">
                    <h3 class="text-white">{{\Illuminate\Support\Facades\Auth::user()->fullname}}</h3>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{route('schedules.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-clock text-info"></i>
                            <p>Расписание</p>
                        </a>
                    </li>

                    <li class="nav-header">ДАННЫЕ</li>
                    <li class="nav-item">
                        <a href="{{route('lessons.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-book text-info"></i>
                            <p>Предметы</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('teachers.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard-teacher text-info"></i>
                            <p>Преподаватели</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('rooms.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-building text-info"></i>
                            <p>Комнаты</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('groups.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-users text-info"></i>
                            <p>Группы</p>
                        </a>
                    </li>
                    <li class="nav-header">Переход</li>
                    <li class="nav-item">
                        <a href="{{route('homepage')}}" class="nav-link">
                            <i class="nav-icon fas fa-home text-info"></i>
                            <p>Домашняя страница</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        @yield('content')

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>

</body>
</html>
