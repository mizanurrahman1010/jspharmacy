<aside class="main-sidebar elevation-4 sidebar-light-pink">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('home')); ?>" class="brand-link navbar-light">
        <img src="<?php echo e(asset('public/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">JS Pharmacy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(asset('public/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e((Auth::user())?Auth::user()->name:""); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e((request()->is('home*')) ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <?php if(Auth::user()->checkUserType()=='admin'): ?>
                <?php echo $__env->make('dashboard.common.sidebar-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                <?php echo $__env->make('dashboard.common.sidebar-customer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>


                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/dashboard/common/sidebar.blade.php ENDPATH**/ ?>