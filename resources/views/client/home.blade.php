@extends('client.main')
@section('content')
    <div class="container">
        @include('client.slider')
    </div><!-- End .container -->



    <div class="icon-boxes-container icon-boxes-separator bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-primary">
                            <i class="icon-rocket"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                            <p>Orders $50 or more</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-primary">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                            <p>Within 30 days</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-primary">
                            <i class="icon-info-circle"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                            <p>when you sign up</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-primary">
                            <i class="icon-life-ring"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                            <p>24/7 amazing services</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .icon-boxes-container -->

    <div class="banner-group">
        <div class="container">
            @include('client.banner')
        </div><!-- End .container -->
    </div><!-- End .banner-group -->

    <div class="bg-light pt-5 pb-10 mb-3">
        <div class="container">
            <div class="heading heading-center mb-3">
                <h2 class="title-lg">New Arrivals</h2><!-- End .title -->

                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-women-link" data-toggle="tab" href="#new-women-tab" role="tab" aria-controls="new-women-tab" aria-selected="false">Women's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-men-link" data-toggle="tab" href="#new-men-tab" role="tab" aria-controls="new-men-tab" aria-selected="false">Men's</a>
                    </li>
                </ul>
            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane tab-pane-shadow p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                    <div class="owl-carousel owl-simple carousel-equal-height" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 0,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":4,
                                "nav": true
                            }
                        }
                    }'>
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <span class="product-label label-primary">Sale</span>
                                <span class="product-label label-sale">30% off</span>
                                <a href="product.html">
                                    <img src="/template/client/images/product/home7-product2.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Men’s</a>,
                                    <a href="#">Boots</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">The North Face Back-To-Berkeley Remtlz Mesh</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Now $50.00</span>
                                    <span class="old-price">$84.00</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #5f554b;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    <a href="quick" class="btn-product btn-quickview"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->

                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="/template/client/images/product/home7-product6.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Men’s</a>,
                                    <a href="#">Sneakers</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Nike Air Zoom Wildhorse 4</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $77.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                                
                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 0 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    <a href="quick" class="btn-product btn-quickview"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->

                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <span class="product-label label-primary">New</span>
                                <a href="product.html">
                                    <img src="/template/client/images/product/home7-product1-1.jpg" alt="Product image" class="product-image">
                                    <img src="/template/client/images/product/home7-product2.jpg" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Women’s</a>,
                                    <a href="#">Sandals</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Eric Michael Joan</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $35.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #b58853;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    <a href="quick" class="btn-product btn-quickview"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->

                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <span class="product-label label-primary">Sale</span>
                                <span class="product-label label-sale">30% off</span>
                                <a href="product.html">
                                    <img src="/template/client/images/product/home7-product2.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Men’s</a>,
                                    <a href="#">Boots</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">The North Face Back-To-Berkeley Remtlz Mesh</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Now $50.00</span>
                                    <span class="old-price">$84.00</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #5f554b;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    <a href="quick" class="btn-product btn-quickview"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->

                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="/template/client/images/product/home7-product6.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Men’s</a>,
                                    <a href="#">Sneakers</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Nike Air Zoom Wildhorse 4</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $77.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                                
                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 0 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    <a href="quick" class="btn-product btn-quickview"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->

                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <span class="product-label label-primary">New</span>
                                <a href="product.html">
                                    <img src="/template/client/images/product/home7-product1-1.jpg" alt="Product image" class="product-image">
                                    <img src="/template/client/images/product/home7-product6.jpg" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Women’s</a>,
                                    <a href="#">Sandals</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Eric Michael Joan</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $35.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #b58853;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    <a href="quick" class="btn-product btn-quickview"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->              
            </div><!-- End .tab-content -->
        </div><!-- End .container -->
    </div><!-- End .bg-light -->



    <div class="mb-4"></div><!-- End .mb-4 -->

    <div class="mb-5"></div><!-- End .mb5 -->

@endsection
