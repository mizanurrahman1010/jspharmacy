<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Dashboard') }}</title>


    {{--<base href="{{url('/')}}">--}}


    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('public/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    {{--    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">--}}
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{asset('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('public/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('public/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('public/plugins/summernote/summernote-bs4.css')}}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('public/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">


    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @yield('css')

</head>

<body class="hold-transition sidebar-mini layout-fixed text-sm">
    <div class="wrapper">


        <!-- Navbar -->
        {{-- @yield('navbar') --}}
        @include('dashboard.common.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('dashboard.common.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            @yield('header')
            <!-- /.content-header -->
            <!-- Main content -->
            <section id="main-content" class="content">
                <div class="container-fluid my-2">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                {{--            <b>Version</b> 3.0.2--}}
            </div>
            <strong>Copyright &copy; {{date('Y')}} <a target="_blank"
                    href="http://www.jspharmacybd.com">jsPharmacy</a>.</strong>
            All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @yield('modal')

    <!-- jQuery -->
    <script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('public/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('public/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('public/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('public/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('public/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('public/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('public/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('public/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('public/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

    {{-- <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}

    <!-- Select2 -->
    <script src="{{asset('public/plugins/select2/js/select2.full.min.js')}}"></script>

    <!-- Bootstrap4 Duallistbox -->
    <script src="{{asset('public/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>

    <!-- jquery-validation -->
    <script src="{{asset('public/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('public/plugins/jquery-validation/additional-methods.min.js')}}"></script>

    <!-- Axios -->
    <script src="{{asset('public/plugins/axios/axios.min.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script type="text/javascript" src="{{asset('public/js/convertAmount.js')}}"></script>


    <script type="text/javascript" src="{{asset('public/plugins/blockUI/jquery.blockUI.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{asset('public/dist/js/adminlte.js')}}"></script>

    @stack('javascript')

    @stack('script')

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="public/dist/js/pages/dashboard.js"></script> --}}

    {{--
<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script> --}}

</body>

</html>
