<!DOCTYPE html>
<html>

    <head>
        @include('partial.head')
        <title>@yield('title')</title>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            @include('partial.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('partial.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- /.content-wrapper -->
            @include('partial.footer')
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        @include('partial.footer-script')

    </body>

</html>
