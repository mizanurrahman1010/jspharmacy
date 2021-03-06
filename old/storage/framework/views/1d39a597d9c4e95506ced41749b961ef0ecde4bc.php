<?php $__env->startSection('content'); ?>

    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>jspharmacy</b>BD</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?php echo e(__('Login')); ?></p>

            <?php echo $__env->make('auth.login-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master',['page'=>'login-page'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/auth/login.blade.php ENDPATH**/ ?>