<!DOCTYPE html>
<html lang="en">


<!-- molla/index-10.html  22 Nov 2019 09:58:04 GMT -->

<head>
    @include('client.header')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<div class="page-wrapper">

    @include('client.menu')

    <main class="main">

        @yield('content')

    </main><!-- End .main -->

    <footer class="footer">
        <div class="footer-middle border-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <img src="/template/client/images/coutinho.gif" class="footer-logo" alt="Footer Logo"
                                 width="105" height="25">
                            <div class="social-icons">
                                <a href="#" class="social-icon facebook" target="_blank" title="Facebook"><i
                                        class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon twitter" target="_blank" title="Twitter"><i
                                        class="icon-twitter"></i></a>
                                <a href="#" class="social-icon instagrama" target="_blank" title="Instagram"><i
                                        class="icon-instagram"></i></a>
                                <a href="#" class="social-icon youtube" target="_blank" title="Youtube"><i
                                        class="icon-youtube"></i></a>
                                <a href="#" class="social-icon pinterest" target="_blank" title="Pinterest"><i
                                        class="icon-pinterest"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Li??n k???t</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="\san-pham.html">T???t c??? s???n ph???m</a></li>
                                <li><a href="\about.html">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Li??n h???</a></li>
                                @if (Session::get('login'))
                                    <li><a href="/logout.html">????ng Xu???t</a></li>
                                @else
                                    <li><a href="/login.html">????ng Nh???p</a></li>
                                @endif
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">D???ch V??? Ch??m S??c Kh??ch H??ng</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Ph????ng Th???c Thanh To??n</a></li>
                                <li><a href="#">Tr??? h??ng</a></li>
                                <li><a href="#">Giao H??ng</a></li>
                                <li><a href="#">C??c ??i???u kho???n v?? ??i???u ki???n</a></li>
                                <li><a href="#">Ch??nh s??ch b???o m???t</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">T??i Kho???n C???a T??i</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                @if (Session::get('login'))
                                    <li><a href="/logout.html">????ng Xu???t</a></li>
                                @else
                                    <li><a href="/login.html">????ng Nh???p</a></li>
                                @endif

                                <li><a href="/cart.html">Gi??? H??ng</a></li>
                                <li><a href="#">Danh S??ch Y??u Th??ch</a></li>
                                <li><a href="#">Ki???m tra ????n h??ng</a></li>
                                <li><a href="#">Tr??? gi??p</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">Copyright ?? 2021 Nh??m 4 - CNPM</p>
                <!-- End .footer-copyright -->
                <figure class="footer-payments">
                    <img src="template/client/images/payments-summary.png" alt="Payment methods">
                </figure><!-- End .footer-payments -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->

</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

@include('client.footer')

@if(Session::has('cart_add_success'))
    <script>
        swal({
            title: "{{Session::get('cart_add_success')}}",
            icon: "success",
            button: false,
        });

    </script>

@endif

@if(Session::has('cart_add_error'))
    <script>
        swal({
            title: "{{Session::get('cart_add_error')}}",
            icon: "error",
            button: false,
        });

    </script>

@endif


@if(Session::has('order_success'))
    <script>
        swal({
            title: "{{Session::get('order_success')}}",
            icon: "success",
            button: false,
        });

    </script>

@endif

@if(Session::has('order_error'))
    <script>
        swal({
            title: "{{Session::get('order_error')}}",
            icon: "error",
            button: false,
        });

    </script>

@endif

<style>
    .social-icons .facebook {
        background: #3b5998;
    }

    .swal-modal {
        height: 280px !important;
    }

    .social-icons .twitter {
        background: #3cf;
    }

    .social-icons .instagrama {
        background: #f09433 !important;
        background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%) !important;
        background: -webkit-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%) !important;
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f09433', endColorstr='#bc1888', GradientType=1) !important;
    }

    .social-icons .youtube {
        background: #f30f0f;
    }

    .social-icons .pinterest {
        background: #cb2027;
    }

    .icon-facebook-f {
        color: #ffffff;
    }

    .icon-twitter {
        color: #ffffff;
    }

    .icon-instagram {
        color: #ffffff;
    }

    .icon-youtube {
        color: #ffffff;
    }

    .icon-pinterest {
        color: #ffffff;
    }

    .social-icon {

        box-sizing: border-box;
        -moz-border-radius: 138px;
        -webkit-border-radius: 138px;
        border-radius: 138px;
        text-align: center;
        display: inline-block;
        line-height: 1px;
        padding-top: 11px;
        transition: all 0.5s;
    }

    .social-icon:hover {
        transform: rotate(360deg) scale(1.3);
    }
</style>

</body>

</html>
