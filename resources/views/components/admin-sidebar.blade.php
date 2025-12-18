    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            @foreach ($menuItems as $item)<li class="nav-item">
              <a href="{{ $item['route'] }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                <i class="{{ $item['icon'] }}"></i>
                <p>{{ $item['name'] }}</p>
              </a>
            </li>
            @endforeach

            <li class="nav-header">Module and Features</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-puzzle-piece"></i>
                <p>Module & Features <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Modules</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Menu Manager</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /module-feature -->

            <li class="nav-header">User Management</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>User & Role<i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link" title="User Profile">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" title="User Profile">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Role & Permissions</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /user-management -->

            <li class="nav-header">Settings</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-cogs"></i>
                <p>Settings</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Logs & Audit <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Audit Logs</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Error Logs</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /settings -->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>