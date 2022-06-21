@extends('layouts.app')

@section('title')
    ARTiC - Categories
@endsection

@section('content')
<!-- Page Categories -->
    <div class="page-content page-home">

      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Categories</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 offset-md-2 col-md-4 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-artpainting.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Art Painting</p>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-handcraft.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Handcraft</p>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-illustration.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Illustration</p>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-creativeservices.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Creative Services</p>
              </a>
            </div>
        </div>
      </section>

      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Products</h5>
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
                    style="
                      background-image: url('/images/products-digitalillustration.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Digital Illustration</div>
                <div class="products-price">Rp. 120.000</div>
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
                    style="
                      background-image: url('/images/products-illustrationsingle.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Illustration Single</div>
                <div class="products-price">Rp. 100.000</div>
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
                    style="
                      background-image: url('/images/products-cartoonillustration.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Cartoon Illustration</div>
                <div class="products-price">Rp. 120.000</div>
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
                    style="
                      background-image: url('/images/products-foodart.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Food Art</div>
                <div class="products-price">Rp. 75.000</div>
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
                    style="
                      background-image: url('/images/products-birdontree.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Bird on Tree</div>
                <div class="products-price">Rp. 200.000</div>
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
                    style="
                      background-image: url('/images/products-petaleddflower.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Petaledd Flower</div>
                <div class="products-price">Rp. 90.000</div>
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
                    style="
                      background-image: url('/images/products-macramewall.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Macrame Wall Decoration</div>
                <div class="products-price">Rp. 105.000</div>
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
                    style="
                      background-image: url('/images/products-floraltextile.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Floral Textile</div>
                <div class="products-price">Rp. 60.000</div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection