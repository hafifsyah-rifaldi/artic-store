<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <?php echo $__env->yieldPushContent('prepend-style'); ?>
        <!-- Animasi Website https://michalsnik.github.io/aos/ -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link href="/style/main.css" rel="stylesheet" />
        <link rel="shortcut icon" href="/images/shortcut-icon-logo.png" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
    <?php echo $__env->yieldPushContent('addon-style'); ?>
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/admin.png" alt="" class="my-4" style="max-width: 150px" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="<?php echo e(route('admin-dashboard')); ?>"
              class="list-group-item list-group-item-action <?php echo e((request()->is('admin')) ? 'active' : ''); ?>"
            >
              Dashboard
            </a>
            <a
              href="<?php echo e(route('product.index')); ?>"
              class="list-group-item list-group-item-action  <?php echo e((request()->is('admin/product')) ? 'active' : ''); ?>"
            >
              Products
            </a>
            <a
              href="<?php echo e(route('product-gallery.index')); ?>"
              class="list-group-item list-group-item-action  <?php echo e((request()->is('admin/product-gallery*')) ? 'active' : ''); ?>"
            >
              Galleries
            </a>
             <a
              href="<?php echo e(route('category.index')); ?>"
              class="list-group-item list-group-item-action <?php echo e((request()->is('admin/category*')) ? 'active' : ''); ?>"
            >
              Categories
            </a>
             <a
              href="<?php echo e(route('transaction.index')); ?>"
              class="list-group-item list-group-item-action <?php echo e((request()->is('admin/transaction*')) ? 'active' : ''); ?>"
            >
              Transactions
            </a>
             <a
              href="<?php echo e(route('user.index')); ?>"
              class="list-group-item list-group-item-action  <?php echo e((request()->is('admin/user*')) ? 'active' : ''); ?>"
            >
              Users
            </a>
            <a
              href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
              class="list-group-item list-group-item-action"
            >
              Sign Out
            </a>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <!-- Navbar -->
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      
                      Hi, <?php echo e(Auth::user()->name); ?>

                    </a>
                    <div class="dropdown-menu">
                      <a href="<?php echo e(route('logout')); ?>" 
                      class="dropdown-item" 
                      onclick="event.preventDefault(); 
                      document.getElementById('logout-form').submit();">
                        Logout
                      </a>
                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none">
                            <?php echo csrf_field(); ?>
                      </form>
                    </div>
                  </li>
                </ul>

                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> Hi, <?php echo e(Auth::user()->name); ?> </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block"> Cart </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          
          <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <?php echo $__env->yieldPushContent('prepend-script'); ?>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <?php echo $__env->yieldPushContent('addon-script'); ?>
  </body>
</html>
<?php /**PATH C:\laragon\www\artic-store\resources\views/layouts/admin.blade.php ENDPATH**/ ?>