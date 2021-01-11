<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">PromoTR</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">PT</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href=" {{url('/home')}} " class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
          </li>

          <li class="menu-header">Promo</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-percent"></i></i> <span>Monitoring Promo</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href=" {{url('philips-promo')}} ">Promo Philips</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i></i> <span>Data Promo</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href=" {{ url('philips-promo/data') }} ">Data Philips</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-check-double"></i></i> <span>Validasi Promo</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="  ">Validasi Philips</a></li>
            </ul>
          </li>

          <li class="menu-header">Data</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i> <span>Customers</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href=" {{ route('list-customers') }} ">List Customers</a></li>
            </ul>
          </li>

          <li class="menu-header">User & Role</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>User</span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Manage Role</a></li>
            </ul>
          </li>
        </ul>
    </aside>
</div>