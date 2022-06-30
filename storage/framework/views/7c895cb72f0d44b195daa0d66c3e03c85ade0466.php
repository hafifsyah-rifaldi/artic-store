

<?php $__env->startSection('title'); ?>
    ARTiC - Cart
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
    <div class="page-content page-cart">
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
                  <li class="breadcrumb-item active">Cart</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart">
                <thead>
                  <tr>
                    <td>Image</td>
                    <td>Name &amp; Seller</td>
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  <?php $totalPrice = 0 ?>
                  <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td style="width: 20%">
                        <?php if($cart->product->galleries): ?>
                            <img
                              src="<?php echo e(Storage::url($cart->product->galleries->first()->photos)); ?>"
                              alt=""
                              class="cart-image"
                            />
                        <?php endif; ?>
                      </td>
                      <td style="width: 35%">
                        <div class="product-title"><?php echo e($cart->product->name); ?></div>
                        <div class="product-subtitle">by <?php echo e($cart->product->user->store_name); ?></div>
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">Rp. <?php echo number_format($cart->product->price,0,',','.'); ?></div>
                        <div class="product-subtitle">IDR</div>
                      </td>
                      <td style="width: 20%">
                        <form action="<?php echo e(route('cart-delete', $cart->id )); ?>" method="POST">
                          <?php echo method_field('DELETE'); ?>
                          <?php echo csrf_field(); ?>
                          <button type="submit" class="btn btn-remove-cart">
                            Remove
                          </button>
                        </form>
                      </td>
                    </tr>
                    <?php $totalPrice += $cart->product->price ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-4">Shipping Details</h2>
            </div>
          </div>
          <form action="<?php echo e(route('checkout')); ?>" id="locations" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="total_price" value="<?php echo e($totalPrice); ?>">
            <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address_one">Address 1</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address_one"
                    name="address_one"
                    value=""
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address_two">Address 2</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address_two"
                    name="address_two"
                    value=""
                  />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="provinces_id">Province</label>
                  <select name="provinces_id" id="provinces_id" class="form-control" v-if="provinces" v-model="provinces_id">
                    <option v-for="province in provinces" :value="province.id">{{ province.name }}</option>
                  </select>
                  <select v-else class="form-control"></select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="regencies_id">City</label>
                 <select name="regencies_id" id="regencies_id" class="form-control" v-if="regencies" v-model="regencies_id">
                    <option v-for="regency in regencies" :value="regency.id">{{ regency.name }}</option>
                  </select>
                  <select v-else class="form-control"></select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="zip_code">Postal Code</label>
                  <input
                    type="text"
                    class="form-control"
                    id="zip_code"
                    name="zip_code"
                    value=""
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="country">Country</label>
                  <input
                    type="text"
                    class="form-control"
                    id="country"
                    name="country"
                    value="Indonesia"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phone_number">Mobile</label>
                  <input
                    type="text"
                    class="form-control"
                    id="phone_number"
                    name="phone_number"
                    value=""
                  />
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="150">
              <div class="col-12">
                <hr />
              </div>
              <div class="col-12">
                <h2 class="mb-1">Payment Informations</h2>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
              <div class="col-md-8">
                <div class="product-title text-success">Rp. <?php echo number_format($totalPrice ?? 0,0,',','.'); ?></div>
                <div class="product-subtitle">Total Price</div>
              </div>
              <div class="col-md-4">
                <button
                  type="submit"
                  class="btn btn-success mt-4 px-4 btn-block "
                  >Checkout Now
                </button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
<?php $__env->stopSection(); ?> 

<?php $__env->startPush('addon-script'); ?>
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      var locations = new Vue({
        el: "#locations",
        // data yang akan dijalankan saat website dijalankan
        mounted() {
          AOS.init();
          this.getProvincesData();
        },
        // untuk menyimpan data dari id nya sendiri
        data: {
          provinces: null,
          regencies: null,
          provinces_id: null,
          regencies_id: null
        },
        // mengambil data
        methods: {
          getProvincesData() {
            var self = this;
            axios.get('<?php echo e(route('api-provinces')); ?>')
              .then(function(response){
                self.provinces = response.data;
              })
          },
          getRegenciesData() {
            var self = this;
            axios.get('<?php echo e(url('api/regencies')); ?>/' + self.provinces_id)
              .then(function(response){
                self.regencies = response.data;
              })
          },
        },
        //ngeliat data jika ada perubahan data, maka akan melakukan sesuatu
        watch: {
          provinces_id: function(val, oldVal) {
            this.regencies_id = null;
            this.getRegenciesData();
          }
        }
      });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\artic-store\resources\views/pages/cart.blade.php ENDPATH**/ ?>