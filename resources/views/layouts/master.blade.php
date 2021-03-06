<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!-- <body class="hold-transition login-page"> -->
<body class="hold-transition {{$page ?? 'login-page'}}">
@yield('content')

<!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/dist/js/adminlte.min.js')}}"></script>

<script type="text/javascript">
    $(function () {

        let isSameAddress = $("#sameAddress").is(":checked");

        $("#perm_add_house").on('change', function () {
            permanentToPresent();
        });
        $("#pres_add_house").on('change', function () {
            presentToPermanent();
        });

        $("#perm_add_road").on('change', function () {
            permanentToPresent();
        });
        $("#pres_add_road").on('change', function () {
            presentToPermanent();
        });

        $("#perm_add_ward").on('change', function () {
            permanentToPresent();
        });
        $("#pres_add_ward").on('change', function () {
            presentToPermanent();
        });

        $("#perm_add_para").on('change', function () {
            permanentToPresent();
        });
        $("#pres_add_para").on('change', function () {
            presentToPermanent();
        });

        $("#perm_add_district_city").on('change', function () {
            permanentToPresent();
        });
        $("#pres_add_district_city").on('change', function () {
            presentToPermanent();
        });

        function permanentToPresent() {
            if (isSameAddress) {
                $("#pres_add_house").val($("#perm_add_house").val());
                $("#pres_add_road").val($("#perm_add_road").val());
                $("#pres_add_ward").val($("#perm_add_ward").val());
                $("#pres_add_para").val($("#perm_add_para").val());
                $("#pres_add_district_city").val($("#perm_add_district_city").val());
            }
        }

        function presentToPermanent() {
            if (isSameAddress) {
                $("#perm_add_house").val($("#pres_add_house").val());
                $("#perm_add_road").val($("#pres_add_road").val());
                $("#perm_add_ward").val($("#pres_add_ward").val());
                $("#perm_add_para").val($("#pres_add_para").val());
                $("#perm_add_district_city").val($("#pres_add_district_city").val());
            }
        }


        $("#sameAddress").on('click', function () {
            isSameAddress = $(this).is(":checked");
            // $("#presentAddressGroup").toggle();
            if (isSameAddress) {
                permanentToPresent();
            }
        });

    });
</script>

</body>
</html>
