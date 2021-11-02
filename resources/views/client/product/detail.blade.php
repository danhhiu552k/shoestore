@extends('client.main')

@section('content')
    <!--MainContent-->
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="\">Home</a></li>
                <li class="breadcrumb-item">
                    <a href="#">
                        @foreach($menus as $item)
                            @if($item->id==$product->menu_id)
                                {{$item->name}}
                            @endif
                        @endforeach
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery">
                            <figure class="product-main-image">
                                <span class="product-label label-sale">Sale</span>
                                <img id="product-zoom" src="/template/client/images/product/home7-product6.jpg"
                                     data-zoom-image="/template/client/images/product/home7-product6.jpg"
                                     alt="product image">

                                <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                    <i class="icon-arrows"></i>
                                </a>
                            </figure><!-- End .product-main-image -->

                            <div id="product-zoom-gallery" class="product-image-gallery max-col-6">
                                <a class="product-gallery-item" href="#"
                                   data-image="/template/client/images/product/home7-product6.jpg"
                                   data-zoom-image="/template/client/images/product/home7-product6.jpg">
                                    <img src="/template/client/images/product/home7-product6.jpg"
                                         alt="product side">
                                </a>

                                <a class="product-gallery-item" href="#"
                                   data-image="/template/client/images/product/home7-product1-1.jpg"
                                   data-zoom-image="/template/client/images/product/home7-product1-1.jpg">
                                    <img src="/template/client/images/product/home7-product1-1.jpg"
                                         alt="product cross">
                                </a>

                                <a class="product-gallery-item" href="#"
                                   data-image="/template/client/images/product/home7-product6.jpg"
                                   data-zoom-image="/template/client/images/product/home7-product6.jpg">
                                    <img src="/template/client/images/product/home7-product6.jpg"
                                         alt="product side">
                                </a>

                                <a class="product-gallery-item" href="#"
                                   data-image="/template/client/images/product/home7-product1-1.jpg"
                                   data-zoom-image="/template/client/images/product/home7-product1-1.jpg">
                                    <img src="/template/client/images/product/home7-product1-1.jpg"
                                         alt="product cross">
                                </a>

                                <a class="product-gallery-item active" href="#"
                                   data-image="/template/client/images/product/home7-product6.jpg"
                                   data-zoom-image="/template/client/images/product/home7-product6.jpg">
                                    <img src="/template/client/images/product/home7-product6.jpg"
                                         alt="product side">
                                </a>

                                <a class="product-gallery-item" href="#"
                                   data-image="/template/client/images/product/home7-product1-1.jpg"
                                   data-zoom-image="/template/client/images/product/home7-product1-1.jpg">
                                    <img src="/template/client/images/product/home7-product1-1.jpg"
                                         alt="product cross">
                                </a>

                            </div><!-- End .product-image-gallery -->
                        </div><!-- End .product-gallery -->
                    </div>

                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title">{{$product->name}}</h1><!-- End .product-title -->

                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->

                                <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews
                                    )</a>

                            </div><!-- End .rating-container -->
                            <div class="product-content">
                                {!!  $product->description!!}
                            </div><!-- End .product-content -->
                            <div class="product-price">
                                {!!  \App\Helpers\Product::checkprice($product->price,$product->price_sale,$product->quantity)!!}
                            </div><!-- End .product-price -->

                            <div class="details-filter-row details-row-size">
                                <label for="size">Kích cỡ:</label>
                                <div class="select-custom">
                                    <select name="size" id="size" class="form-control">
                                        <option value="#" selected="selected">Chọn kích cỡ</option>
                                        <option value="s">40</option>
                                        <option value="m">41</option>
                                        <option value="l">42</option>
                                        <option value="xl">43</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .details-filter-row -->

                            <div class="details-filter-row details-row-size">
                                <label for="qty">Số lượng:</label>
                                <div class="product-details-quantity">
                                    <input type="number" id="qty" class="form-control" value="1" min="1" max="10"
                                           step="1"
                                           data-decimals="0" required>
                                </div><!-- End .product-details-quantity -->
                            </div><!-- End .details-filter-row -->

                            <div class="product-details-action">
                                <a href="#" class="btn-product btn-cart"><span>Thêm vào giỏ hàng</span></a>

                                <div class="details-action-wrapper">
                                    <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Thêm vào danh sách
                                            yêu thích</span></a>
                                </div><!-- End .details-action-wrapper -->
                            </div><!-- End .product-details-action -->

                            <div class="product-details-footer">
                                <div class="product-cat">
                                    <span>Danh Mục:</span>

                                    @foreach($menus as $item)
                                        @if($item->id==$product->menu_id)
                                            <a href="/danh-muc/{{$item->id}}-{{$item->slug}}.html">{{$item->name}}</a>
                                        @endif
                                    @endforeach
                                </div><!-- End .product-cat -->

                                <div class="social-icons social-icons-sm">
                                    <span class="social-label">Share:</span>
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                            class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                            class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                            class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                            class="icon-pinterest"></i></a>
                                </div>
                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .product-details-top -->

                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab"
                               role="tab" aria-controls="product-desc-tab" aria-selected="true">Mô tả chi tiết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-shipping-link" data-toggle="tab"
                               href="#product-shipping-tab"
                               role="tab" aria-controls="product-shipping-tab" aria-selected="false">Giao Hàng & Trả
                                Lại</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab"
                               role="tab" aria-controls="product-review-tab" aria-selected="false">Đánh Giá (2)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel"
                             aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                                <h3>Mô tả chỉ tiết</h3>
                                <div>

                                    {!!  $product->content !!}

                                </div>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->

                        <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel"
                             aria-labelledby="product-shipping-link">
                            <div class="product-desc-content">
                                <h3>Giao hàng và trả lại</h3>
                                <div>
                                    Nội dung
                                </div>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel"
                             aria-labelledby="product-review-link">
                            <div class="reviews">
                                <h3>Đánh giá (2)</h3>
                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">Samanta J.</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">6 days ago</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>Good, perfect size</h4>

                                            <div class="review-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum
                                                    dolores
                                                    assumenda asperiores facilis porro reprehenderit animi culpa atque
                                                    blanditiis commodi perspiciatis doloremque, possimus, explicabo,
                                                    autem
                                                    fugit
                                                    beatae quae voluptas!</p>
                                            </div><!-- End .review-content -->

                                            <div class="review-action">
                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                            </div><!-- End .review-action -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->

                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">John Doe</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">5 days ago</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>Very good</h4>

                                            <div class="review-content">
                                                <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum
                                                    blanditiis
                                                    laudantium iste amet. Cum non voluptate eos enim, ab cumque nam,
                                                    modi,
                                                    quas
                                                    iure illum repellendus, blanditiis perspiciatis beatae!</p>
                                            </div><!-- End .review-content -->

                                            <div class="review-action">
                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                            </div><!-- End .review-action -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->
                            </div><!-- End .reviews -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab -->

                <h2 class="title text-center mb-4">Các sản phẩm liên quan</h2><!-- End .title text-center -->

                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                     data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":1
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
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.html">
                                <img src="/template/client/images/product/home7-product1-1.jpg" alt="Product image"
                                     class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                   title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                   title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Women</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Brown paperbag waist <br>pencil skirt</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $60.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-out">Out of Stock</span>
                            <a href="product.html">
                                <img src="/template/client/images/product/home7-product2.jpg" alt="Product image"
                                     class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                   title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                   title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Jackets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Khaki utility boiler jumpsuit</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="out-price">$120.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <a href="product.html">
                                <img src="/template/client/images/product/home7-product6.jpg" alt="Product image"
                                     class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                   title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                   title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Light brown studded Wide fit wedges</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $110.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 1 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    @endsection

    @section('footer')
        <!-- Sticky Bar -->
            <div class="sticky-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="/template/client/images/product/home7-product6.jpg" alt="Product image">
                                </a>
                            </figure><!-- End .product-media -->
                            <h4 class="product-title"><a href="product.html">Name</a></h4>
                            <!-- End .product-title -->
                        </div><!-- End .col-6 -->

                        <div class="col-6 justify-content-end">
                            <div class="product-price">
                                $84.00
                            </div><!-- End .product-price -->
                            <div class="product-details-quantity">
                                <input type="number" value="1" min="1" max="10"
                                       step="1" data-decimals="0">
                            </div><!-- End .product-details-quantity -->

                            <div class="product-details-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                <a href="#" class="btn-product btn-wishlist"
                                   title="Wishlist"><span>Add to Wishlist</span></a>
                            </div><!-- End .product-details-action -->
                        </div><!-- End .col-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .sticky-bar -->
            <script src="/template/client/js/bootstrap.bundle.min.js"></script>
            <script src="/template/client/js/jquery.elevateZoom.min.js"></script>
@endsection


