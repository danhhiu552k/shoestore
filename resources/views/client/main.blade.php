<!DOCTYPE html>
<html lang="en">


<!-- molla/index-10.html  22 Nov 2019 09:58:04 GMT -->

<head>
    @include('client.header')
</head>

<body>
<div class="page-wrapper">

    @include('client.menu')

    <main class="main">

        @yield('content')

    </main><!-- End .main -->

    <footer class="footer footer-dark">
        <div class="cta bg-image bg-dark pt-4 pb-5 mb-0"
             style="background-image: url(/template/client/images/demo-3.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-6">
                        <div class="cta-heading text-center">
                            <h3 class="cta-title text-danger">Đăng ký nhận thông tin sản phẩm của chúng tôi</h3>
                            <!-- End .cta-title -->
                        </div><!-- End .text-center -->
                        <br>
                        <form action="#">
                            <div class="input-group input-group-round">
                                <input type="email" class="form-control form-control-white"
                                       placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn btn-white" type="submit"><span>Subscribe</span><i
                                            class="icon-long-arrow-right"></i></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                        <br>
                        <br>
                        <br>
                    </div><!-- End .col-sm-10 col-md-8 col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cta -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <img src="/template/client/images/logo.jpg" class="footer-logo" alt="Footer Logo"
                                 width="105" height="25">
                            <br>
                            <br>
                            <div class="social-icons">
                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                        class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                        class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                        class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" title="Youtube" target="_blank"><i
                                        class="icon-youtube"></i></a>
                                <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                        class="icon-pinterest"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        {{--                            <div class="widget">--}}
                        {{--                                <h4 class="widget-title">Menu Nhanh</h4><!-- End .widget-title -->--}}

                        {{--                                <ul class="widget-list">--}}
                        {{--                                    <li><a href="about.html">Danh Mục 1</a></li>--}}
                        {{--                                    <li><a href="#">Danh Mục 2</a></li>--}}
                        {{--                                    <li><a href="faq.html">Danh Mục 3</a></li>--}}
                        {{--                                </ul><!-- End .widget-list -->--}}
                        {{--                            </div><!-- End .widget -->--}}
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Dịch Vụ Chăm Sóc Khách Hàng</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Phương Thức Thanh Toán</a></li>
                                <li><a href="#">Trả hàng</a></li>
                                <li><a href="#">Giao Hàng</a></li>
                                <li><a href="#">Các điều khoản và điều kiện</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Tài Khoản Của Tôi</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="/login">Đăng Nhập</a></li>
                                <li><a href="cart.html">Giỏ Hàng</a></li>
                                <li><a href="#">Danh Sách Yêu Thích</a></li>
                                <li><a href="#">Kiểm tra đơn hàng</a></li>
                                <li><a href="#">Trợ giúp</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">Copyright © 2021 by Nhóm 4 - Cường - Danh - Linh - Quân. All Rights
                    Reserved.</p>
                <!-- End .footer-copyright -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

@include('client.footer')
@if (Session::has('create-account'))
    {{ Session::forget('create-account') }}
    <script>
        alert("Tạo tài khoản thành công");
    </script>
@endif
</body>

</html>
