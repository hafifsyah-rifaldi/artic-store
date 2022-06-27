

<?php $__env->startSection('title'); ?>
    ARTiC - Shop for Arts & Creative Goods
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Content navigation 3 slide bootstrap -->
    <div class="page-content page-home">
        <section class="store-carousel">
            <div class="container">
                <div class="row">
                <div class="col-lg-12" data-aos="zoom-in">
                    <div
                    id="storeCarousel"
                    class="carousel slide"
                    data-rides="carousel"
                    >
                    <ol class="carousel-indicators">
                        <li
                        class="active"
                        data-target="#storeCarousel"
                        data-slide-to="0"
                        ></li>
                        <li data-target="#storeCarousel" data-slide-to="1"></li>
                        <li data-target="#storeCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img
                            src="/images/banner1.jpg"
                            alt="Carousel Image"
                            class="d-block w-100"
                        />
                        </div>
                        <div class="carousel-item">
                        <img
                            src="/images/banner2.jpg"
                            alt="Carousel Image"
                            class="d-block w-100"
                        />
                        </div>
                        <div class="carousel-item">
                        <img
                            src="/images/banner3.jpg"
                            alt="Carousel Image"
                            class="d-block w-100"
                        />
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>Explore Categories</h5>
                    </div>
                </div>
                <div class="row">
                    <?php $incrementCategory = 0 ?>
                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div
                            class="col-6 col-md-3 col-lg-2"
                            data-aos="fade-up"
                            data-aos-delay="<?php echo e($incrementCategory+= 100); ?>"
                        >
                            <a href="<?php echo e(route('categories-detail', $category->slug)); ?>" class="component-categories d-block">
                                <div class="categories-image">
                                    <img
                                    src="<?php echo e(Storage::url($category->photo)); ?>"
                                    alt=""
                                    class="w-100"
                                    />
                                </div>
                                <p class="categories-text">
                                    <?php echo e($category->name); ?>

                                </p>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-12 text-center py-5" 
                            data-aos="fade-up"
                            data-aos-delay="100">
                            No Categories Found
                        </div>
                    <?php endif; ?>
                </div>
            </div>    
        </section>

        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>New Products</h5>
                    </div>
                </div>

                <div class="row">
                    <div
                        class="col-6 col-md-4 col-lg-3"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div
                                    class="products-image"
                                    style="background-image: url('/images/products-digitalillustration.jpg');"
                                >
                                </div>
                            </div>
                            <div class="products-text">
                                Digital Illustration
                            </div>
                            <div class="products-price">
                                Rp. 120.000
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-6 col-md-4 col-lg-3"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div
                                    class="products-image"
                                    style="background-image: url('/images/products-illustrationsingle.jpg');"
                                >
                                </div>
                            </div>
                            <div class="products-text">
                                Illustration Single
                            </div>
                            <div class="products-price">
                                Rp. 100.000
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-6 col-md-4 col-lg-3"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div
                                    class="products-image"
                                    style="background-image: url('/images/products-cartoonillustration.jpg');"
                                >
                                </div>
                            </div>
                            <div class="products-text">
                                Cartoon Illustration
                            </div>
                            <div class="products-price">
                                Rp. 120.000
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-6 col-md-4 col-lg-3"
                        data-aos="fade-up"
                        data-aos-delay="400"
                    >
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div
                                    class="products-image"
                                    style="background-image: url('/images/products-foodart.jpg');"
                                >
                                </div>
                            </div>
                            <div class="products-text">
                                Food Art
                            </div>
                            <div class="products-price">
                                Rp. 75.000
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-6 col-md-4 col-lg-3"
                        data-aos="fade-up"
                        data-aos-delay="500"
                    >
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div
                                    class="products-image"
                                    style="background-image: url('/images/products-birdontree.jpg');"
                                >
                                </div>
                            </div>
                            <div class="products-text">
                                Bird on Tree
                            </div>
                            <div class="products-price">
                                Rp. 200.000
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-6 col-md-4 col-lg-3"
                        data-aos="fade-up"
                        data-aos-delay="600"
                    >
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div
                                    class="products-image"
                                    style="background-image: url('/images/products-petaleddflower.jpg');"
                                >
                                </div>
                            </div>
                            <div class="products-text">
                                Petaledd Flower
                            </div>
                            <div class="products-price">
                                Rp. 90.000
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-6 col-md-4 col-lg-3"
                        data-aos="fade-up"
                        data-aos-delay="700"
                    >
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div
                                    class="products-image"
                                    style="background-image: url('/images/products-macramewall.jpg');"
                                >
                                </div>
                            </div>
                            <div class="products-text">
                                Macrame Wall Decoration
                            </div>
                            <div class="products-price">
                                Rp. 105.000
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-6 col-md-4 col-lg-3"
                        data-aos="fade-up"
                        data-aos-delay="800"
                    >
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div
                                    class="products-image"
                                    style="background-image: url('/images/products-floraltextile.jpg');"
                                >
                                </div>
                            </div>
                            <div class="products-text">
                                Floral Textile
                            </div>
                            <div class="products-price">
                                Rp. 60.000
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\artic-store\resources\views/pages/home.blade.php ENDPATH**/ ?>