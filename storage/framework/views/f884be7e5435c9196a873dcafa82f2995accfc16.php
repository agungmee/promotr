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
            <a href=" <?php echo e(url('/home')); ?> " class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
          </li>

          <li class="menu-header">Promo</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-image"></i> <span>Visibility Led Club</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="layout-default.html">LEDClub 2020</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-percent"></i> <span>Keris</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="layout-default.html">Keris 2020</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-qrcode"></i> <span>Semarak</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="layout-default.html">Semarak Merdeka</a></li>
              <li><a class="nav-link" href="layout-default.html">Semarak Akhir Tahun</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-money-bill-alt"></i> <span>Serbu</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="layout-default.html">Serbu 2020</a></li>
            </ul>
          </li>

          <li class="menu-header">Data</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i> <span>Customers</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href=" <?php echo e(route('list-customers')); ?> ">List Customers</a></li>
              <li><a class="nav-link" href=" <?php echo e(route('doc-index')); ?> ">Dokumentasi Customers</a></li>
            </ul>
          </li>

          <li class="menu-header">Pages</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>User</span></a>
            <ul class="dropdown-menu">
              <li><a href="auth-forgot-password.html">Forgot Password</a></li>
              <li><a href="auth-login.html">Login</a></li>
              <li><a class="beep beep-sidebar" href="auth-login-2.html">Login 2</a></li>
              <li><a href="auth-register.html">Register</a></li>
              <li><a href="auth-reset-password.html">Reset Password</a></li>
            </ul>
          </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div>
    </aside>
</div><?php /**PATH /opt/lampp/htdocs/promotr2/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>