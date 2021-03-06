<li class="nav-item">
    <a href="<?php echo e(route('pos.index')); ?>" class="nav-link <?php echo e((request()->is('pos*')) ? 'active' : ''); ?>">
        <i class="fas fa-cash-register"></i>
        <p>Purchase</p>
    </a>
</li>

<li class="nav-item has-treeview  <?php echo e((request()->is('order*')) ? 'menu-open' : ''); ?>">
    <a href="#" class="nav-link <?php echo e((request()->is('order*')) ? 'active' : ''); ?>">
        <i class="fas fa-cart-arrow-down"></i>
        <p>
            Orders
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="<?php echo e(route('order.list','new')); ?>"
                class="nav-link <?php echo e((request()->is('orderlist/new*')) ? 'active' : ''); ?>">
                <i class="fas fa-cart-arrow-down"></i>
                <p>New Orders </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo e(route('order.list','accepted')); ?>"
                class="nav-link <?php echo e((request()->is('orderlist/accepted*')) ? 'active' : ''); ?>">
                <i class="fas fa-check"></i>
                <p>Accepted Orders</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo e(route('order.list','cancelled')); ?>"
                class="nav-link <?php echo e((request()->is('orderlist/cancelled*')) ? 'active' : ''); ?>">
                <i class="fas fa-times"></i>
                <p>Orders Canceled</p>
            </a>
        </li>
    </ul>
</li>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/dashboard/common/sidebar-customer.blade.php ENDPATH**/ ?>