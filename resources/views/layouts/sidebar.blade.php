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
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-percent"></i></i> <span>Monitoring 2021</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href=" {{ route('philips2021') }} ">LEDClub 2021</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i></i> <span>Data Promo 2021</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href=" {{ route('dataledclub2021') }} ">LEDClub 2021</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-check-double"></i></i> <span>Validasi 2021</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href=" {{ route('dataledclub2021') }} ">LEDClub 2021</a></li>
            </ul>
          </li>

          <li class="menu-header">Data</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i> <span>Customers</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href=" {{ route('list-customers') }} ">List Customers</a></li>
              <li><a class="nav-link" href=" {{ route('doc-index') }} ">Upload Dokumen</a></li>
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
    </aside>
</div>