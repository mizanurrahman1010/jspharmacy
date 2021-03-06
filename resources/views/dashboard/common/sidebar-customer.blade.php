<li class="nav-item">
    <a href="{{ route('pos.index') }}" class="nav-link {{ (request()->is('pos*')) ? 'active' : '' }}">
        <i class="fas fa-cash-register"></i>
        <p>Purchase</p>
    </a>
</li>

<li class="nav-item has-treeview  {{ (request()->is('order*')) ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ (request()->is('order*')) ? 'active' : '' }}">
        <i class="fas fa-cart-arrow-down"></i>
        <p>
            Orders
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('order.list','new') }}"
                class="nav-link {{ (request()->is('orderlist/new*')) ? 'active' : '' }}">
                <i class="fas fa-cart-arrow-down"></i>
                <p>New Orders </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('order.list','accepted') }}"
                class="nav-link {{ (request()->is('orderlist/accepted*')) ? 'active' : '' }}">
                <i class="fas fa-check"></i>
                <p>Present Orders</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('order.list','delivered') }}"
               class="nav-link {{ (request()->is('orderlist/delivered*')) ? 'active' : '' }}">
                <i class="fas fa-truck-loading"></i>
                <p>Delivered Orders</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('order.list','cancelled') }}"
                class="nav-link {{ (request()->is('orderlist/cancelled*')) ? 'active' : '' }}">
                <i class="fas fa-times"></i>
                <p>Orders Canceled</p>
            </a>
        </li>
    </ul>
</li>
