<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}" class="nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('seeds.index') }}" class="nav-link {{ request()->routeIs('seeds.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-seedling"></i>
                        <p>Seeds</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
