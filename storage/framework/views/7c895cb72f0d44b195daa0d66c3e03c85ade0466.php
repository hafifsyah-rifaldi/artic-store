

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
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressOne">Address 1</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressOne"
                  name="addressOne"
                  value="Damar"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressTwo">Address 2</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressTwo"
                  name="addressTwo"
                  value="No. 101"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province</label>
                <select name="province" id="province" class="form-control">
                  <option value="West Java">West Java</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
                  <option value="Bekasi">Bekasi</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="postalCode">Postal Code</label>
                <input
                  type="text"
                  class="form-control"
                  id="postalCode"
                  name="postalCode"
                  value="17148"
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
                <label for="Mobile">Mobile</label>
                <input
                  type="text"
                  class="form-control"
                  id="Mobile"
                  name="Mobile"
                  value="+628 2020 11111"
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
            <div class="col-4 col-md-2">
              <div class="product-title">Rp. 40.500</div>
              <div class="product-subtitle">Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">Rp. 30.000</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">Rp. 55.000</div>
              <div class="product-subtitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success">Rp. 530.500</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a
                href="/success.html"
                class="btn btn-success mt-4 px-4 btn-block"
                >Checkout Now
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\artic-store\resources\views/pages/cart.blade.php ENDPATH**/ ?>