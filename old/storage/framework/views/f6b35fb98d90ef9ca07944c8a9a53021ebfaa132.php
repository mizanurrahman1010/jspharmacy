<?php $__env->startSection('hero-section'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animated fadeInDown">Welcome to <span><?php echo e(config('app.name')); ?></span></h2>
                <p class="animated fadeInUp">Online Model Medicine Shop (Home Delivery), Rangpur City.</p>
                <a href="" class="btn-get-started animated fadeInUp">সুস্থ জীবন </a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animated fadeInDown">Welcome to JS Pharmacy</h2>
                <p class="animated fadeInUp">Online Model Medicine Shop (Home Delivery), Rangpur City.</p>
                <a href="" class="btn-get-started animated fadeInUp">সুস্থ জীবন </a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animated fadeInDown">Welcome to JS Pharmacy</h2>
                <p class="animated fadeInUp">Online Model Medicine Shop (Home Delivery), Rangpur City.</p>
                <a href="" class="btn-get-started animated fadeInUp">সুস্থ জীবন </a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section><!-- End Hero -->
<?php $__env->stopSection(); ?>



<?php $__env->startSection('main-content'); ?>

<!-- ======= Features Section ======= -->
<section class="features">
    <div class="container">

        <div class="section-title">
            <h2>Features</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-md-5">
                <img src="assets/img/features-1.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-4">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                </ul>
            </div>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
                <img src="assets/img/features-2.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1">
                <h3>Corporis temporibus maiores provident</h3>
                <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-md-5">
                <img src="assets/img/features-3.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5">
                <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut
                    quia voluptatem hic voluptas dolor doloremque.</p>
                <ul>
                    <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                </ul>
            </div>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
                <img src="assets/img/features-4.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1">
                <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div>
        </div>

    </div>
</section><!-- End Features Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/frontend/home.blade.php ENDPATH**/ ?>