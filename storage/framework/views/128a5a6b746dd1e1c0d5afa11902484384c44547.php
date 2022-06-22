

<?php $__env->startSection('title'); ?>
    ARTiC - Dashboard Transaction
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Transactions</h2>
    <p class="dashboard-subtitle">
        Big result start from the small one
    </p>
    </div>

    <div class="dashboard-content">
    <div class="row">
        <div class="col-12 mt-2">
        <ul
            class="nav nav-pills mb-3"
            id="pills-tab"
            role="tablist"
        >
            <li class="nav-item" role="presentation">
            <a
                class="nav-link active"
                id="pills-home-tab"
                data-toggle="pill"
                href="#pills-home"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                >Sell Product</a
            >
            </li>
            <li class="nav-item" role="presentation">
            <a
                class="nav-link"
                id="pills-profile-tab"
                data-toggle="pill"
                href="#pills-profile"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
                >Buy Product</a
            >
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
            >
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
            <div
            class="tab-pane fade"
            id="pills-profile"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
            >
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
                    <div class="col-md-3">28 Maret, 2022</div>
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
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\artic-store\resources\views/pages/dashboard-transactions.blade.php ENDPATH**/ ?>