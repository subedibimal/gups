<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{get_school_info('site_name')}} | @yield('title') </title>
    @include('includes.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{url('admin/dashboard')}}" class="nav-link">Home</a>
            </li>
            <a class="nav-item" href="{{ route('logout') }}" style="float:right;padding-left: 1050px"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </ul>
    </nav>
    <!-- /.navbar -->

   @include('includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @include('includes.message')
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
           @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- Main Footer -->
    <footer class="main-footer">
        <div style="float:right;">
        <strong>Copyright &copy; 2014-2020 <a href="http://www.paceinfosys.com.np">Pace Infosys</a>.</strong>
        All rights reserved.
        </div>

    </footer>
</div>
<!-- ./wrapper -->

@include('includes.script')
{!!toastr()->render()!!}
</body>
</html>
