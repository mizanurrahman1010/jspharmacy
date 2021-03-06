<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Home')); ?></title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(asset('public/frontend/assets/img/favicon.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('public/frontend/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/fontawesome-free/css/all.min.css')); ?>">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('public/frontend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/assets/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/assets/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/assets/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('public/frontend/assets/css/style.css')); ?>" rel="stylesheet">


    <style>
        /*.modal-backdrop {*/
        /*    z-index: !important;*/
        /*}*/
        /*.modal-dialog {*/
        /*    margin: 2px auto;*/
        /*    z-index: 10001 !important;*/
        /*}*/

    </style>


    <?php echo $__env->yieldContent('css'); ?>

    <!-- =======================================================
    * Template Name: Moderna - v2.0.1
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container">
            <div class="logo float-left">

                <a href="index.html"><img src="<?php echo e(asset('public/frontend/assets/img/logo.png')); ?>" alt="LOGO"
                        class="img-fluid"></a>

            </div>
            <div class="logo float-left">

                <h1 class="text-light"><a href="<?php echo e(route('site.home')); ?>"><span>JS PHARMACY</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->

            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="<?php echo e(route('site.home')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('site.about')); ?>">About Us</a></li>
                    <li><a href="<?php echo e(route('site.order')); ?>">Place Order</a></li>

                    <?php if(auth()->guard()->check()): ?>
                    <li>
                        <a href="<?php echo e(route('pos.index')); ?>">POS</a>
                    </li>
                    <?php endif; ?>

                    <?php if(auth()->guard()->guest()): ?>
                    <li>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                    <?php endif; ?>
                    
                    
                    
                    
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <?php echo $__env->yieldContent('hero-section'); ?>


    <main id="main">
        <?php echo $__env->yieldContent('main-content'); ?>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="http://jspharmacybd.com/">Quick
                                    Delivery</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="http://jspharmacybd.com/">Trusted</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Dhap, Medical More <br>
                            Mahanagar, Rangpur<br>
                            Bangladesh <br><br>
                            <strong>Phone:</strong> +880 171 7675 282<br>
                            <strong>Email:</strong> info@jspharmacybd.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About JS Pharmacy</h3>
                        <p>Online Model Medicine Shop (Home Delivery), Rangpur City.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/groups/599888917235654/" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span><?php echo e(config('app.name')); ?></span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                Designed by <a href="https://jspharmacybd.com/">JS Pharmacy</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('public/frontend/assets/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/vendor/php-email-form/validate.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/vendor/venobox/venobox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/vendor/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/vendor/aos/aos.js')); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('public/frontend/assets/js/main.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('public/js/convertAmount.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('javascript'); ?>

    <?php echo $__env->yieldPushContent('script'); ?>


    
    
    
    
    
    
    
    
    
    

    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    

    
    
    
    

    <?php echo $__env->yieldContent('modal'); ?>

    <div class="modal fade" id="userLoginModal" aria-hidden="true" style="z-index: 16000">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">User Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $__env->make('auth.login-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/layouts/frontend/app.blade.php ENDPATH**/ ?>