<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
    <div class="search-element">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
      <button class="btn" type="submit"><i class="fas fa-search"></i></button>
      <div class="search-backdrop"></div>
      <div class="search-result">
        <div class="search-header">
          Histories
        </div>
        <div class="search-item">
          <a href="#">How to hack NASA using CSS</a>
          <a href="#" class="search-close"><i class="fas fa-times"></i></a>
        </div>
        <div class="search-item">
          <a href="#">Kodinger.com</a>
          <a href="#" class="search-close"><i class="fas fa-times"></i></a>
        </div>
        <div class="search-item">
          <a href="#">#Stisla</a>
          <a href="#" class="search-close"><i class="fas fa-times"></i></a>
        </div>
        <div class="search-header">
          Result
        </div>
        <div class="search-item">
          <a href="#">
            <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
            oPhone S9 Limited Edition
          </a>
        </div>
        <div class="search-item">
          <a href="#">
            <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
            Drone X2 New Gen-7
          </a>
        </div>
        <div class="search-item">
          <a href="#">
            <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
            Headphone Blitz
          </a>
        </div>
        <div class="search-header">
          Projects
        </div>
        <div class="search-item">
          <a href="#">
            <div class="search-icon bg-danger text-white mr-3">
              <i class="fas fa-code"></i>
            </div>
            Stisla Admin Template
          </a>
        </div>
        <div class="search-item">
          <a href="#">
            <div class="search-icon bg-primary text-white mr-3">
              <i class="fas fa-laptop"></i>
            </div>
            Create a new Homepage Design
          </a>
        </div>
      </div>
    </div>
  </form>
  <!-- Right Side Of Navbar -->
  <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item">
            
        </li>
    <?php else: ?>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <?php echo e(Auth::user()->name); ?>

            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </li>
    <?php endif; ?>
</ul>
</nav><?php /**PATH /opt/lampp/htdocs/promotr2/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>