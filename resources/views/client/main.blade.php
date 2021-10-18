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
                                <h3 class="cta-title text-danger">Đăng ký nhận thông tin sản phẩm của chúng tôi</h3><!-- End .cta-title -->                            
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
                                <img src="/template/client/images/logo.jpg" class="footer-logo"
                                    alt="Footer Logo" width="105" height="25">
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
                            <div class="widget">
                                <h4 class="widget-title">Menu Nhanh</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="about.html">Danh Mục 1</a></li>
                                    <li><a href="#">Danh Mục 2</a></li>
                                    <li><a href="faq.html">Danh Mục 3</a></li>                                   
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
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
                                    <li><a href="#">Đăng Nhập</a></li>
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
                    <p class="footer-copyright">Copyright © 2021 by Nhóm 4 - Cường - Danh - Linh - Quân. All Rights Reserved.</p>
                    <!-- End .footer-copyright -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

      <!-- Sign in / Register Modal -->
      <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="register-email" name="register-email" required placeholder="E-mail">
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <input type="password" class="form-control" id="register-password" name="register-password" required placeholder="Mật khẩu">
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>Đăng Nhập</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Nhớ mật khẩu</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Quên mật khẩu?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">hoặc đăng nhập với</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Đăng nhập bằng Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Đăng nhập bằng Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="/register" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fistname" required placeholder="Họ">
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="lastname" required placeholder="Tên">
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" required placeholder="E-mail">
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" required placeholder="Mật khẩu">
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>Đăng Kí</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="checked" required>
                                                <label class="custom-control-label" for="register-policy">Tôi đồng ý với <a href="#">chính sách bảo mật</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">hoặc đăng nhập với</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Đăng nhập bằng Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Đăng nhập bằng Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    @include('client.footer')

</body>

</html>
