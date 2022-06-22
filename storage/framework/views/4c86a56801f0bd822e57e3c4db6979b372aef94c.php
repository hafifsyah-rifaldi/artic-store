 <!-- Navigation Bar -->
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="<?php echo e(url('home')); ?>" class="navbar-brand">
          <img src="/images/logo.svg" alt="Logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="<?php echo e(url('home')); ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(url('categories')); ?>" class="nav-link">Categories</a>
            </li>
          </ul>
        </div>
      </div>
    </nav><?php /**PATH C:\laragon\www\artic-store\resources\views/includes/navbar-auth.blade.php ENDPATH**/ ?>