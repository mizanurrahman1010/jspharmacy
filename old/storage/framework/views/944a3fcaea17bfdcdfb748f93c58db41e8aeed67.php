<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(config('app.name', 'Dashboard')); ?></title>


    


    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Ionicons -->
    
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo e(asset('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/jqvmap/jqvmap.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/css/adminlte.min.css')); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/daterangepicker/daterangepicker.css')); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/summernote/summernote-bs4.css')); ?>">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">


    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <?php echo $__env->yieldContent('css'); ?>

    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
            height: 60vh !important;
        }

        #usermap {
            height: 45vh !important;
            border: 10px solid #ffffff;
        }

    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed text-sm">
    <div class="wrapper">


        <!-- Navbar -->
        
        <?php echo $__env->make('dashboard.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php echo $__env->make('dashboard.common.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <?php echo $__env->yieldContent('header'); ?>
            <!-- /.content-header -->
            <!-- Main content -->
            <section id="main-content" class="content">
                <div class="container-fluid my-2">
                    <?php echo $__env->yieldContent('content'); ?>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                
            </div>
            <strong>Copyright &copy; <?php echo e(date('Y')); ?> <a target="_blank"
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

    <?php echo $__env->yieldContent('modal'); ?>

    <!-- jQuery -->
    <script src="<?php echo e(asset('public/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo e(asset('public/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo e(asset('public/plugins/chart.js/Chart.min.js')); ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo e(asset('public/plugins/sparklines/sparkline.js')); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo e(asset('public/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo e(asset('public/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo e(asset('public/plugins/moment/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo e(asset('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
    <!-- Summernote -->
    <script src="<?php echo e(asset('public/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo e(asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>

    

    <!-- Select2 -->
    <script src="<?php echo e(asset('public/plugins/select2/js/select2.full.min.js')); ?>"></script>

    <!-- Bootstrap4 Duallistbox -->
    <script src="<?php echo e(asset('public/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')); ?>"></script>

    <!-- jquery-validation -->
    <script src="<?php echo e(asset('public/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/plugins/jquery-validation/additional-methods.min.js')); ?>"></script>

    <!-- Axios -->
    <script src="<?php echo e(asset('public/plugins/axios/axios.min.js')); ?>"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script type="text/javascript" src="<?php echo e(asset('public/js/convertAmount.js')); ?>"></script>


    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('public/dist/js/adminlte.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('javascript'); ?>

    <?php echo $__env->yieldPushContent('script'); ?>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    

    

    <div class="modal fade" id="mapModel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="mapModalHeading">Please Selecet Your Location</h4>
                </div>
                <div class="modal-body">
                    <div id="map"></div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary float-right" id="saveLocation">Save
                            changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        let myLatlng = {
            lat: 25.744860,
            lng: 89.275589
        };

        let userType = '<?php echo e(Auth::user()->user_type); ?>';
        let geolocation = '<?php echo e(Auth::user()->geo_location); ?>';

        function isLatitudeOrLongitude(val, limit) {
            return isFinite(val) && Math.abs(val) <= limit;
        }

        if ((userType == 'customer') && (geolocation != "")) {
            let newLatLog = geolocation.split(',');
            if (isLatitudeOrLongitude(newLatLog[0], 90)) {
                myLatlng.lat = parseFloat(newLatLog[0]);
            }
            if (isLatitudeOrLongitude(newLatLog[1], 180)) {
                myLatlng.lng = parseFloat(newLatLog[1]);
            }
        }

        var marker;
        var map;

        function initMap() {

            var mapOptions = {
                zoom: 15,
                center: myLatlng
            }
            map = new google.maps.Map(document.getElementById("map"), mapOptions);

            if (geolocation == "") {

                marker = new google.maps.Marker({
                    position: myLatlng,
                    title: "Rangpur"
                });

                // Configure the click listener.
                map.addListener('click', function (mapsMouseEvent) {
                    marker.setMap(null);
                    marker = new google.maps.Marker({
                        position: mapsMouseEvent.latLng,
                        //title: "Rangpur"
                    });
                    marker.setMap(map);

                    myLatlng.lat = mapsMouseEvent.latLng.lat();
                    myLatlng.lng = mapsMouseEvent.latLng.lng();

                    console.log(mapsMouseEvent.latLng.lat(), mapsMouseEvent.latLng.lng());
                });
            } else {
                map = new google.maps.Map(document.getElementById("usermap"), mapOptions);

                marker = new google.maps.Marker({
                    position: myLatlng,
                    title: "<?php echo e(Auth::user()->name); ?>"
                });
            }
            marker.setMap(map);
        }

        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            if ((userType == 'customer') && (geolocation == "")) {

                $('#mapModel').modal({
                    keyboard: false,
                    backdrop: 'static'
                });

                $('#mapModel').on('shown.bs.modal', function (e) {
                    marker.setMap(null);
                    marker = new google.maps.Marker({
                        position: myLatlng,
                        //position: mapsMouseEvent.latLng,
                        //title: "Rangpur"
                    });
                    marker.setMap(map);
                })

                $("#saveLocation").on('tap click', function () {
                    let updateUrl = "<?php echo e(route('customer.location',Auth::user()->id)); ?>";

                    $.ajax({
                        data: {
                            lat: myLatlng.lat.toString(),
                            lng: myLatlng.lng.toString()
                        },
                        url: updateUrl,
                        type: "POST",
                        dataType: 'json',
                        success: function (data, textStatus, xhr) {

                            if (xhr.status == 200) {
                                if (data.code == 1) {
                                    window.location.href = "<?php echo e(route('pos.index')); ?>";
                                }
                            }
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            if (xhr.status != 200) {
                                let responses = JSON.parse(xhr.responseText);
                                if (responses.errors != undefined) {}
                            }
                        },
                        complete: function (xhr, textStatus) {
                            if (xhr.status != 200) {
                                let responses = JSON.parse(xhr.responseText);
                            }
                        }
                    });
                });
            }
        });

    </script>



    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUZPmXEvS8mCvImCzCxIclu_2trxGCHfg
&callback=initMap">
    </script>


</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/layouts/dashboard.blade.php ENDPATH**/ ?>