

<?php $__env->startSection('title'); ?>
    ARTiC - Product Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div class="page-content page-details">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Product Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <!-- Untuk section gallery photo -->
      <section class="store-gallery mb-3" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <!-- transisi vue.js -->
              <transition name="slide-fade" mode="out-in">
                <!-- memanggil script photo dengan index array -->
                <img
                  :src="photos[activePhoto].url"
                  :key="photos[activePhoto].id"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <!-- v-for looping vue-js -->
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <!-- action untuk klik -->
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto }"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1><?php echo e($product->name); ?></h1>
                <div class="owner">By <?php echo e($product->user->store_name); ?></div>
                <div class="price">Rp. <?php echo number_format($product->price,0,',','.'); ?></div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <?php if(auth()->guard()->check()): ?>
                  <form action="#" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <button
                    type="submit"
                    class="btn btn-success px-4 text-white btn-block mb-3"
                  >
                    Add to Cart
                  </button>
                  </form>
                <?php else: ?>
                  <a
                    href="<?php echo e(route('login')); ?>"
                    class="btn btn-success px-4 text-white btn-block mb-3"
                  >
                    Login to Add
                  </a>
                <?php endif; ?>
               
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <?php echo $product->description; ?>

              </div>
            </div>
          </div>
        </section>

        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb-3">
                <h5>Customer Review (3)</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media">
                    <img
                      src="/images/icons-testimonial-1.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Moere Elve</h5>
                      I was so excited to get my wall hanging. It is so perfect,
                      in design and size. I love it
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icons-testimonial-2.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Amanda C</h5>
                      This piece is gorgeous. The quality is excellent, it looks
                      exactly as described, and I actually like it even more
                      than I thought I would. Adds a beautiful dimension to our
                      room.
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icons-testimonial-3.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Eleanor L</h5>
                      Beautiful hand made macrame piece for our great room wall.
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('addon-script'); ?>
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        // script animasi yang akan dijalankan saat muncul
        mounted() {
          AOS.init();
        },
        // setiap gambar akan punya id
        data: {
          activePhoto: 0,
          photos: [
            <?php $__currentLoopData = $product->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              {
                id: <?php echo e($gallery->id); ?>,
                url: "<?php echo e(Storage::url($gallery->photos)); ?>",
              },
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          ],
        },
        // memanggil data array foto yang active
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\artic-store\resources\views/pages/detail.blade.php ENDPATH**/ ?>