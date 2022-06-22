

<?php $__env->startSection('title'); ?>
    ARTiC - Dashboard Transaction Detail
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">#STORE0839</h2>
    <p class="dashboard-subtitle">Transactions Details</p>
    </div>
    <div class="dashboard-content" id="transactionDetails">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-4">
                <img
                    src="/images/product-details-dashboard.png"
                    class="w-100 mb-3"
                    alt=""
                />
                </div>
                <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 col-md-6">
                    <div class="product-title">Customer Name</div>
                    <div class="product-subtitle">Mc Gill</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Product Name</div>
                    <div class="product-subtitle">Bird On Tree</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">
                        Date of Transaction
                    </div>
                    <div class="product-subtitle">
                        26 Maret, 2022
                    </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Status</div>
                    <div class="product-subtitle text-danger">
                        Pending
                    </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Total Amount</div>
                    <div class="product-subtitle">Rp. 200.000</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Mobile</div>
                    <div class="product-subtitle">
                        +628 2020 11111
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                <h5>Shipping Information</h5>
                </div>
                <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                    <div class="product-title">Address I</div>
                    <div class="product-subtitle">Damar</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Address II</div>
                    <div class="product-subtitle">
                        Blok B2 No. 34
                    </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Province</div>
                    <div class="product-subtitle">West Java</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">City</div>
                    <div class="product-subtitle">Bekasi</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Postal Code</div>
                    <div class="product-subtitle">17148</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Country</div>
                    <div class="product-subtitle">Indonesia</div>
                    </div>
                    <div class="col-12 col-md-3">
                    <div class="product-title">Status</div>
                    <select
                        name="status"
                        id="status"
                        class="form-control"
                        v-model="status"
                    >
                        <option value="UNPAID">Unpaid</option>
                        <option value="PENDING">Pending</option>
                        <option value="SHIPPING">Shipping</option>
                        <option value="SUCCESS">Success</option>
                    </select>
                    </div>
                    <template v-if="status == 'SHIPPING'">
                    <div class="col-md-3">
                        <div class="product-title">Input Resi</div>
                        <input
                        type="text"
                        class="form-control"
                        name="resi"
                        v-model="resi"
                        />
                    </div>
                    <div class="col-md-2">
                        <button
                        type="submit"
                        class="btn btn-success btn-block mt-4"
                        >
                        Update Resi
                        </button>
                    </div>
                    </template>
                </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-right">
                <button
                    type="submit"
                    class="btn btn-success btn-lg mt-4"
                >
                    Save Now
                </button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('addon-script'); ?>
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var transactionDetails = new Vue({
        el: "#transactionDetails",
        data: {
          status: "SHIPPING",
          resi: "JNE20839149021029301231",
        },
      });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\artic-store\resources\views/pages/dashboard-transactions-details.blade.php ENDPATH**/ ?>