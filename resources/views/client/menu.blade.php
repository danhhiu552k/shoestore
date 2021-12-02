<header class="header header-8">
    @include('client.head')
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="\" class="logo">
                    <img src="/template/client/images/logo/logo.png" class="mylogo" alt="Molla Logo"
                         width="105" height="25">
                </a>
            </div><!-- End .header-left -->

            <div class="header-right">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="active">
                            <a href="/" class="">Trang chủ</a>
                        </li>
                        <li>
                            <a href="\san-pham.html" class="">Sản phẩm</a>
                            <ul>{!! \App\Helpers\Menu::menus($menus) !!}</ul>
                        </li>

                        <li><a href="\about.html">About Us</a></li>

                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->

                <div class="header-search">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="/search" method="get">
                        <div class="header-search-wrapper">
                            <label for="q" class="sr-only">Tìm kiếm</label>
                            <input type="search" class="form-control" name="products" placeholder="Tên sản phẩm"
                                   required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->


                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" data-display="static">
                        <a href="/cart.html" style="font-size: 30px;" class="icon-shopping-cart"></a>
                        <span
                            class="cart-count">{{!is_null(\Session::get('carts'))? count(\Session::get('carts')):0}}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        @php $sumPriceCart =0;
                        @endphp
                        <div class="dropdown-cart-products">
                            @if(isset($products_cart))
                                {!! \App\Helpers\Cart::cart_composer($products_cart) !!}
                            @endif
                        </div><!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>Tổng</span>

                            <span
                                class="cart-total-price"> @if(isset($products_cart)) {!! \App\Helpers\Cart::total_carts($products_cart) !!} @endif</span>
                        </div><!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="/cart.html" class="btn btn-primary">Giỏ hàng</a>
                            <a href="/check" class="btn btn-outline-primary-2"><span>Thanh toán</span><i
                                    class="icon-long-arrow-right"></i></a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

</header><!-- End .header -->


