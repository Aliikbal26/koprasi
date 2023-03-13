<div class="main-sidebar sidebar-style-2">
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
    <a href="index.html">Koprasi</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">Kop</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
        <li class="menu-header">Produk</li>
        <li class="nav-item dropdown {{ request()->is(['products*', 'products-out*']) ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Produk</span></a>
            <ul class="dropdown-menu">
                <li class="{{ request()->is('products*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('products.index') }}">Produk Masuk</a></li>
                <li class="{{ request()->is('products-out*') ? 'active' : '' }}"><a class="nav-link" href="index.html">Produk Keluar</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown {{ request()->is(['histori-masuk', 'histori-keluar']) ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Histori</span></a>
            <ul class="dropdown-menu">
                <li class="{{ request()->is('histori-masuk') ? 'active' : '' }}"><a class="nav-link" href="{{ route('histori-masuk') }}">Produk Masuk</a></li>
                <li class="{{ request()->is('histori-keluar') ? 'active' : '' }}"><a class="nav-link" href="{{ route('histori-keluar') }}">Produk Keluar</a></li>
            </ul>
        </li>
    </ul>
</aside>
</div>