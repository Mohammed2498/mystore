<x-front-layout title="Home">


    <main class="main">
        <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase owl-loaded owl-drag"
            data-owl-options="{
            'loop': false
        }">

            <!-- End .home-slide -->


            <!-- End .home-slide -->
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1472px;">
                    <div class="owl-item active" style="width: 736px;">
                        <div class="home-slide home-slide1 banner">
                            <img class="slide-bg" src="assets/images/demoes/demo4/slider/slide-1.jpg" width="1903"
                                height="499" alt="slider image">
                            <div class="container d-flex align-items-center">
                                <div class="banner-layer appear-animate animated fadeInUpShorter appear-animation-visible"
                                    data-animation-name="fadeInUpShorter" style="animation-duration: 1000ms;">
                                    <h4 class="text-transform-none m-b-3">Find the Boundaries. Push Through!</h4>
                                    <h2 class="text-transform-none mb-0">Summer Sale</h2>
                                    <h3 class="m-b-3">70% Off</h3>
                                    <h5 class="d-inline-block mb-0">
                                        <span>Starting At</span>
                                        <b class="coupon-sale-text text-white bg-secondary align-middle"><sup>$</sup><em
                                                class="align-text-top">199</em><sup>99</sup></b>
                                    </h5>
                                    <a href="category.html" class="btn btn-dark btn-lg">Shop Now!</a>
                                </div>
                                <!-- End .banner-layer -->
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 736px;">
                        <div class="home-slide home-slide2 banner banner-md-vw">
                            <img class="slide-bg" style="background-color: #ccc;" width="1903" height="499"
                                src="assets/images/demoes/demo4/slider/slide-2.jpg" alt="slider image">
                            <div class="container d-flex align-items-center">
                                <div class="banner-layer d-flex justify-content-center appear-animate"
                                    data-animation-name="fadeInUpShorter">
                                    <div class="mx-auto">
                                        <h4 class="m-b-1">Extra</h4>
                                        <h3 class="m-b-2">20% off</h3>
                                        <h3 class="mb-2 heading-border">Accessories</h3>
                                        <h2 class="text-transform-none m-b-4">Summer Sale</h2>
                                        <a href="category.html" class="btn btn-block btn-dark">Shop All Sale</a>
                                    </div>
                                </div>
                                <!-- End .banner-layer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav"><button type="button" title="nav" role="presentation" class="owl-prev disabled"><i
                        class="icon-left-open-big"></i></button><button type="button" title="nav"
                    role="presentation" class="owl-next"><i class="icon-right-open-big"></i></button></div>
            <div class="owl-dots disabled"></div>
        </div>
        <!-- End .home-slider -->


        <!-- End .container -->

        <section class="featured-products-section">
            <div class="container">
                <h2 class="section-title heading-border ls-20 border-0">Featured Products</h2>
                <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center owl-loaded owl-drag"
                    data-owl-options="{
                    'dots': false,
                    'nav': true
                }">
                    @foreach ($products as $product)
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1210px;">
                                <div class="owl-item active" style="width: 222px; margin-right: 20px;">
                                    <div class="product-default appear-animate animated fadeInRightShorter appear-animation-visible"
                                        data-animation-name="fadeInRightShorter" style="animation-duration: 1000ms;">
                                        <figure>
                                            <a href="{{ route('product_daetails', $product->id) }}">
                                                <img src="{{ asset('storage/' . $product->image) }}" width="280"
                                                    height="280" alt="product">
                                                <img src="{{ asset('storage/' . $product->image) }}" width="280"
                                                    height="280" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-hot">HOT</div>
                                                <div class="product-label label-sale">-20%</div>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-list">
                                                <a href="category.html"
                                                    class="product-category">{{ $product->category->name }}</a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="product.html">{{ $product->title }}</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <del class="old-price">{{ $product->price }}</del>
                                                <span class="product-price">{{ $product->sale_price }}</span>
                                            </div>
                                            <!-- End .price-box -->
                                            <div class="product-action">
                                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="product.html" class="btn-icon btn-add-cart"><i
                                                        class="fa fa-arrow-right"></i><span>SELECT
                                                        OPTIONS</span></a>
                                                <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                    title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                            </div>
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                    @endforeach
                </div>
                <!-- End .featured-proucts -->
            </div>
        </section>

        <section class="new-products-section">
            <div class="container">
                <h2 class="section-title heading-border ls-20 border-0">New Arrivals</h2>

                <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center mb-2 owl-loaded owl-drag"
                    data-owl-options="{
                    'dots': false,
                    'nav': true,
                    'responsive': {
                        '992': {
                            'items': 4
                        },
                        '1200': {
                            'items': 5
                        }
                    }
                }">






                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1452px;">
                            <div class="owl-item active" style="width: 222px; margin-right: 20px;">
                                <div class="product-default appear-animate animated fadeInRightShorter appear-animation-visible"
                                    data-animation-name="fadeInRightShorter" style="animation-duration: 1000ms;">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-6.jpg" width="220"
                                                height="220" alt="product">
                                            <img src="assets/images/products/product-6-2.jpg" width="220"
                                                height="220" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="product.html">Men Black Gentle Belt</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <del class="old-price">$59.00</del>
                                            <span class="product-price">$49.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 222px; margin-right: 20px;">
                                <div class="product-default appear-animate animated fadeInRightShorter appear-animation-visible"
                                    data-animation-name="fadeInRightShorter" style="animation-duration: 1000ms;">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-7.jpg" width="220"
                                                height="220" alt="product">
                                            <img src="assets/images/products/product-7-2.jpg" width="220"
                                                height="220" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="product.html">Brown-Black Men Casual Glasses</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <del class="old-price">$59.00</del>
                                            <span class="product-price">$49.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 222px; margin-right: 20px;">
                                <div class="product-default appear-animate animated fadeInRightShorter appear-animation-visible"
                                    data-animation-name="fadeInRightShorter" style="animation-duration: 1000ms;">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-8.jpg" width="220"
                                                height="220" alt="product">
                                            <img src="assets/images/products/product-8-2.jpg" width="220"
                                                height="220" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-20%</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="product.html">Brown-Black Men Casual Glasses</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <del class="old-price">$59.00</del>
                                            <span class="product-price">$49.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <div class="owl-item" style="width: 222px; margin-right: 20px;">
                                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-9.jpg" width="220"
                                                height="220" alt="product">
                                            <img src="assets/images/products/product-9-2.jpg" width="220"
                                                height="220" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-30%</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="product.html">Black Men Casual Glasses</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <del class="old-price">$59.00</del>
                                            <span class="product-price">$49.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="product.html" class="btn-icon btn-add-cart"><i
                                                    class="fa fa-arrow-right"></i><span>SELECT
                                                    OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <div class="owl-item" style="width: 222px; margin-right: 20px;">
                                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-10.jpg" width="220"
                                                height="220" alt="product">
                                            <img src="assets/images/products/product-10-2.jpg" width="220"
                                                height="220" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="product.html">Basketball Sports Blue Shoes</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <del class="old-price">$59.00</del>
                                            <span class="product-price">$49.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <div class="owl-item" style="width: 222px; margin-right: 20px;">
                                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-11.jpg" width="220"
                                                height="220" alt="product">
                                            <img src="assets/images/products/product-11-2.jpg" width="220"
                                                height="220" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-20%</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="product.html">Men Sports Travel Bag</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <del class="old-price">$59.00</del>
                                            <span class="product-price">$49.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="product.html" class="btn-icon btn-add-cart"><i
                                                    class="fa fa-arrow-right"></i><span>SELECT
                                                    OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" title="nav" role="presentation"
                            class="owl-prev disabled"><i class="icon-angle-left"></i></button><button type="button"
                            title="nav" role="presentation" class="owl-next"><i
                                class="icon-angle-right"></i></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
                <!-- End .featured-proucts -->

                <div class="banner banner-big-sale appear-animate animated fadeInUpShorter appear-animation-visible"
                    data-animation-delay="200" data-animation-name="fadeInUpShorter"
                    style="background: url(&quot;assets/images/demoes/demo4/banners/banner-4.jpg&quot;) center center / cover rgb(42, 149, 203); animation-duration: 1000ms;">
                    <div class="banner-content row align-items-center mx-0">
                        <div class="col-md-9 col-sm-8">
                            <h2 class="text-white text-uppercase text-center text-sm-left ls-n-20 mb-md-0 px-4">
                                <b class="d-inline-block mr-3 mb-1 mb-md-0">Big Sale</b> All new fashion brands items
                                up to 70% off
                                <small class="text-transform-none align-middle">Online Purchases Only</small>
                            </h2>
                        </div>
                        <div class="col-md-3 col-sm-4 text-center text-sm-right">
                            <a class="btn btn-light btn-white btn-lg" href="category.html">View Sale</a>
                        </div>
                    </div>
                </div>

                <h2 class="section-title categories-section-title heading-border border-0 ls-0 appear-animate animated fadeInUpShorter appear-animation-visible"
                    data-animation-delay="100" data-animation-name="fadeInUpShorter"
                    style="animation-duration: 1000ms;">Browse Our Categories
                </h2>

                <div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer owl-loaded owl-drag">











                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1452px;">
                            <div class="owl-item active" style="width: 222px; margin-right: 20px;">
                                <div class="product-category appear-animate animated fadeInUpShorter appear-animation-visible"
                                    data-animation-name="fadeInUpShorter" style="animation-duration: 1000ms;">
                                    <a href="category.html">
                                        <figure>
                                            <img src="assets/images/demoes/demo4/products/categories/category-1.jpg"
                                                alt="category" width="280" height="240">
                                        </figure>
                                        <div class="category-content">
                                            <h3>Dress</h3>
                                            <span><mark class="count">3</mark> products</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 222px; margin-right: 20px;">
                                <div class="product-category appear-animate animated fadeInUpShorter appear-animation-visible"
                                    data-animation-name="fadeInUpShorter" style="animation-duration: 1000ms;">
                                    <a href="category.html">
                                        <figure>
                                            <img src="assets/images/demoes/demo4/products/categories/category-2.jpg"
                                                alt="category" width="220" height="220">
                                        </figure>
                                        <div class="category-content">
                                            <h3>Watches</h3>
                                            <span><mark class="count">3</mark> products</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 222px; margin-right: 20px;">
                                <div class="product-category appear-animate animated fadeInUpShorter appear-animation-visible"
                                    data-animation-name="fadeInUpShorter" style="animation-duration: 1000ms;">
                                    <a href="category.html">
                                        <figure>
                                            <img src="assets/images/demoes/demo4/products/categories/category-3.jpg"
                                                alt="category" width="220" height="220">
                                        </figure>
                                        <div class="category-content">
                                            <h3>Machine</h3>
                                            <span><mark class="count">3</mark> products</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 222px; margin-right: 20px;">
                                <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                                    <a href="category.html">
                                        <figure>
                                            <img src="assets/images/demoes/demo4/products/categories/category-4.jpg"
                                                alt="category" width="220" height="220">
                                        </figure>
                                        <div class="category-content">
                                            <h3>Sofa</h3>
                                            <span><mark class="count">3</mark> products</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 222px; margin-right: 20px;">
                                <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                                    <a href="category.html">
                                        <figure>
                                            <img src="assets/images/demoes/demo4/products/categories/category-6.jpg"
                                                alt="category" width="220" height="220">
                                        </figure>
                                        <div class="category-content">
                                            <h3>Headphone</h3>
                                            <span><mark class="count">3</mark> products</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 222px; margin-right: 20px;">
                                <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                                    <a href="category.html">
                                        <figure>
                                            <img src="assets/images/demoes/demo4/products/categories/category-5.jpg"
                                                alt="category" width="220" height="220">
                                        </figure>
                                        <div class="category-content">
                                            <h3>Sports</h3>
                                            <span><mark class="count">3</mark> products</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" title="nav" role="presentation"
                            class="owl-prev disabled"><i class="icon-angle-left"></i></button><button type="button"
                            title="nav" role="presentation" class="owl-next"><i
                                class="icon-angle-right"></i></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </section>
        <!-- End .feature-boxes-container -->
    </main>

</x-front-layout>
