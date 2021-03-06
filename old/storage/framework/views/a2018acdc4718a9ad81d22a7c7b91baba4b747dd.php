<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.css')); ?>">

    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/summernote/summernote-bs4.css')); ?>">


    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('hero-section'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

    <!-- ======= Why Us Section ======= -->
    
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                <?php echo $__env->make('dashboard.pos.components.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>
    </section><!-- End Why Us Section -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('dashboard.pos.components.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('javascript'); ?>
    <!-- DataTables -->
    <script src="<?php echo e(asset('public/plugins/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.js')); ?>"></script>

    <!-- Summernote -->
    <script src="<?php echo e(asset('public/plugins/summernote/summernote-bs4.min.js')); ?>"></script>

    <!-- Select2 -->
    <script src="<?php echo e(asset('public/plugins/select2/js/select2.full.min.js')); ?>"></script>

    <!-- Axios -->
    <script src="<?php echo e(asset('public/plugins/axios/axios.min.js')); ?>"></script>


<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>
    <?php echo $__env->make('dashboard.pos.components.create_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/frontend/order.blade.php ENDPATH**/ ?>