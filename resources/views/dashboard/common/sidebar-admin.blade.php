<li class="nav-item">
    <a href="{{ route('pos.index') }}" class="nav-link {{ (request()->is('pos*')) ? 'active' : '' }}">
        <i class="fas fa-cash-register"></i>
        <p>POS</p>
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
                <p>Accepted Orders</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('order.list','processing') }}"
                class="nav-link {{ (request()->is('orderlist/processing*')) ? 'active' : '' }}">
                <i class="fas fa-tools"></i>
                <p>Orders Processing</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('order.list','ready') }}"
                class="nav-link {{ (request()->is('orderlist/ready*')) ? 'active' : '' }}">
                <i class="fas fa-check-double"></i>
                <p>Orders Ready</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('order.list','delivered') }}"
                class="nav-link {{ (request()->is('orderlist/delivered*')) ? 'active' : '' }}">
                <i class="fas fa-truck-loading"></i>
                <p>Orders Delivered</p>
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

<li class="nav-item">
    <a href="{{ route('category.index') }}" class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-alt "></i>
        <p>Category</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('units.index') }}" class="nav-link {{ (request()->is('units*')) ? 'active' : '' }}">
        <i class="fas fa-balance-scale"></i>
        <p>Units</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('products.index') }}" class="nav-link {{ (request()->is('products*')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-business-time"></i>
        <p>Products</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('employee.index') }}" class="nav-link {{ (request()->is('employee*')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Employee</p>
    </a>
</li>
