

<?php $__env->startSection('title'); ?>
    ARTiC - Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Admin Dashboard</h2>
    <p class="dashboard-subtitle">This is ARTiC Administrator Panel</p>
    </div>

    <div class="dashboard-content">
    <div class="row">
        <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-body">
            <div class="dashboard-card-title">Customer</div>
            <div class="dashboard-card-subtitle"> <?php echo e($customer); ?> </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-body">
            <div class="dashboard-card-title">Revenue</div>
            <div class="dashboard-card-subtitle">Rp. <?php echo e($revenue); ?> </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-body">
            <div class="dashboard-card-title">Transaction</div>
            <div class="dashboard-card-subtitle"><?php echo e($transaction); ?> </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 mt-2">
        <h5 class="mb-3">Recent Transactions</h5>
        <a
            href="/dashboard-transactions-details.html"
            class="card card-list d-block"
        >
            <div class="card-body">
            <div class="row">
                <div class="col-md-1">
                <img
                    src="/images/dashboard-icon-product-1.png"
                    alt=""
                />
                </div>
                <div class="col-md-4">Bird On Tree</div>
                <div class="col-md-3">Mc Gill</div>
                <div class="col-md-3">25 Maret, 2022</div>
                <div class="col-md-1 d-none d-md-block">
                <img
                    src="/images/dashboard-arrow-right.svg"
                    alt=""
                />
                </div>
            </div>
            </div>
        </a>
        <a
            href="/dashboard-transactions-details.html"
            class="card card-list d-block"
        >
            <div class="card-body">
            <div class="row">
                <div class="col-md-1">
                <img
                    src="/images/dashboard-icon-product-2.png"
                    alt=""
                />
                </div>
                <div class="col-md-4">Cartoon Illustration</div>
                <div class="col-md-3">Salsa Tifani</div>
                <div class="col-md-3">26 Maret, 2022</div>
                <div class="col-md-1 d-none d-md-block">
                <img
                    src="/images/dashboard-arrow-right.svg"
                    alt=""
                />
                </div>
            </div>
            </div>
        </a>
        <a
            href="/dashboard-transactions-details.html"
            class="card card-list d-block"
        >
            <div class="card-body">
            <div class="row">
                <div class="col-md-1">
                <img
                    src="/images/dashboard-icon-product-3.png"
                    alt=""
                />
                </div>
                <div class="col-md-4">Digital Illustration</div>
                <div class="col-md-3">Salsa Tifani</div>
                <div class="col-md-3">26 Maret, 2022</div>
                <div class="col-md-1 d-none d-md-block">
                <img
                    src="/images/dashboard-arrow-right.svg"
                    alt=""
                />
                </div>
            </div>
            </div>
        </a>
        </div>
    </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\artic-store\resources\views/pages/admin/dashboard.blade.php ENDPATH**/ ?>