<ul class="navbar-nav bg-white sidebar sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('app') }}/assets/logo.png" alt="" width="80%">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: var(--primary);">Solusi Pajak Online</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin/dashboard" style="color: var(--primary);">
            <i class="fas fa-fw fa-tachometer-alt" style="color: var(--primary);"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin/articles" style="color: var(--primary);">
            <i class="fas fa-fw fa-house-user" style="color: var(--primary);"></i>
            <span>Articles</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin/categories" style="color: var(--primary);">
            <i class="fas fa-fw fa-tags" style="color: var(--primary);"></i>
            <span>Categories</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
