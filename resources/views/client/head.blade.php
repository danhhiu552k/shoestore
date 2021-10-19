
<div class="header-top">
    <div class="container">
        <div class="header-left">
            <div class="header-dropdown">
                <a href="#">VNĐ</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="#">VNĐ</a></li>
                        <li><a href="#">USD</a></li>
                    </ul>
                </div><!-- End .header-menu -->
            </div><!-- End .header-dropdown -->

            <div class="header-dropdown">
                <a href="#">Vi</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="#">Tiếng Việt</a></li>
                        <li><a href="#">English</a></li>
                    </ul>
                </div><!-- End .header-menu -->
            </div><!-- End .header-dropdown -->
        </div><!-- End .header-left -->

        <div class="header-right">
            <ul class="top-menu">
                <li>
                    <a href="#">Links</a>
                    <ul>
                        <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                        <li><a href="about">About Us</a></li>
                        <li><a href="/register"><i class="icon-user"></i>Đăng Kí</a></li>
                        <li><a href="/login"><i class="icon-user"></i>Đăng Nhập</a></li>
                        @if (Session::get('login'))
                            <li>
                                <div>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            {{ Session::get('firstname') }}
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="/logout">Đăng Xuất</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul><!-- End .top-menu -->
        </div><!-- End .header-right -->
    </div><!-- End .container -->
</div><!-- End .header-top -->
