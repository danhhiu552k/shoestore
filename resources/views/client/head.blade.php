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
                        @if (Session::get('login'))
                            <div class="dropdown">
                                <button
                                    class="nut_dropdown">{{ Session::get('firstname') . ' ' . Session::get('lastname') }}</button>
                                <div class="noidung_dropdown">
                                    <a href="/logout">Đăng Xuất</a>
                                </div>
                            </div>
                        @else
                            <li><a href="/login"><i class="icon-user"></i>Đăng Nhập</a></li>
                        @endif

                    </ul>
                </li>
            </ul><!-- End .top-menu -->
        </div><!-- End .header-right -->
    </div><!-- End .container -->
</div><!-- End .header-top -->

@section('footer')
    <style>
        /* Nút Dropdown*/
        .nut_dropdown {
            background-color: #ffffff;
            color: white;
            padding: 16px;
            color: rgb(17, 16, 16);
            font-size: 16px;
            border: none;
            color: rgb(0, 0, 0);
            text-transform: uppercase;
            font-size: 1.3rem;
            font-weight: 300;
        }

        /* Thiết lập vị trí cho thẻ div với class dropdown*/
        .dropdown {}

        /* Nội dung Dropdown */
        .noidung_dropdown {
            /*Ẩn nội dung các đường dẫn*/
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Thiết kế style cho các đường dẫn trong Dropdown */
        .noidung_dropdown a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* thay đổi màu background khi hover vào đường dẫn */
        .noidung_dropdown a:hover {
            background-color: #ddd;
        }

        /* hiển thị nội dung dropdown khi hover */
        .dropdown:hover .noidung_dropdown {
            display: block;
        }

    </style>
@endsection
