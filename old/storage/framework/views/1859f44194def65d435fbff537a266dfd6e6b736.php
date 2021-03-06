<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a>
        </li>
        
        
        
    </ul>

    <!-- SEARCH FORM -->
    
    
    
    
    
    
    
    
    
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i>
            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>


        </li>
    </ul>
</nav>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/dashboard/common/navbar.blade.php ENDPATH**/ ?>