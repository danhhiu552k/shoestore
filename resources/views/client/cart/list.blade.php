@extends('client.main')

@section('content')
    <form method="post">
    <div class="page-header text-center" style="background-image: url('/template/client/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Giỏ Hàng<span>Shoe Store</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        @php $total = 0; @endphp
                        @if(count($products)!=0)
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>&nbsp;</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($products as $key =>$product)
                                @php
                                    $price =$product->price_sale != 0 ? $product->price_sale:$product->price;
                                    $priceEnd=$price* $carts[$product->id];
                                    $total+=$priceEnd;
                                @endphp
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{$product->thumb}}" alt="product cross">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="#">{{$product->name}}</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">{{number_format($price,0,'','.')}}</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input name="num_product[{{$product->id}}]" type="number" class="form-control" value="{{$carts[$product->id]}}" required>
                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    <td class="total-col">{{number_format($priceEnd,0,'','.')}}</td>
                                    <td class="remove-col"><a href="/carts/delete/{{$product->id}}">Xóa</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table><!-- End .table table-wishlist -->
                        @else
                            <div class="text-center"><h2>Giỏ hàng trống</h2></div>
                        @endif
                        <div class="cart-bottom">
                            <div class="cart-discount">
                                <form action="#">
                                    <div class="input-group">
{{--                                        <input type="text" class="form-control" required placeholder="coupon code">--}}
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary-2" type="submit"><i
                                                    class="icon-long-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- End .input-group -->
                                </form>
                            </div><!-- End .cart-discount -->

                            <input value="UPDATE CART" type="submit"  formaction="/update-cart" class="btn btn-outline-dark-2">
                            @csrf
                        </div><!-- End .cart-bottom -->
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <tbody>

{{--                                    <tr class="summary-subtotal">--}}
{{--                                        <td>Subtotal:</td>--}}
{{--                                        <td>$160.00</td>--}}
{{--                                    </tr><!-- End .summary-subtotal -->--}}
{{--                                    <tr class="summary-shipping">--}}
{{--                                        <td>Shipping:</td>--}}
{{--                                        <td>&nbsp;</td>--}}
{{--                                    </tr>--}}

{{--                                    <tr class="summary-shipping-row">--}}
{{--                                        <td>--}}
{{--                                            <div class="custom-control custom-radio">--}}
{{--                                                <input type="radio" id="free-shipping" name="shipping"--}}
{{--                                                    class="custom-control-input">--}}
{{--                                                <label class="custom-control-label" for="free-shipping">Free--}}
{{--                                                    Shipping</label>--}}
{{--                                            </div><!-- End .custom-control -->--}}
{{--                                        </td>--}}
{{--                                        <td>$0.00</td>--}}
{{--                                    </tr><!-- End .summary-shipping-row -->--}}

{{--                                    <tr class="summary-shipping-row">--}}
{{--                                        <td>--}}
{{--                                            <div class="custom-control custom-radio">--}}
{{--                                                <input type="radio" id="standart-shipping" name="shipping"--}}
{{--                                                    class="custom-control-input">--}}
{{--                                                <label class="custom-control-label"--}}
{{--                                                    for="standart-shipping">Standart:</label>--}}
{{--                                            </div><!-- End .custom-control -->--}}
{{--                                        </td>--}}
{{--                                        <td>$10.00</td>--}}
{{--                                    </tr><!-- End .summary-shipping-row -->--}}

{{--                                    <tr class="summary-shipping-row">--}}
{{--                                        <td>--}}
{{--                                            <div class="custom-control custom-radio">--}}
{{--                                                <input type="radio" id="express-shipping" name="shipping"--}}
{{--                                                    class="custom-control-input">--}}
{{--                                                <label class="custom-control-label" for="express-shipping">Express:</label>--}}
{{--                                            </div><!-- End .custom-control -->--}}
{{--                                        </td>--}}
{{--                                        <td>$20.00</td>--}}
{{--                                    </tr><!-- End .summary-shipping-row -->--}}

{{--                                    <tr class="summary-shipping-estimate">--}}
{{--                                        <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>--}}
{{--                                        <td>&nbsp;</td>--}}
{{--                                    </tr><!-- End .summary-shipping-estimate -->--}}

                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>{{number_format($total,0,'','.')}}</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>

                            </table><!-- End .table table-summary -->
                            <div >
                                <span>Thông tin khách hàng :</span>
                                <br>
                                <br>
                                <div >
                                    <input type="text" name="name" placeholder="Tên khách hàng" >
                                </div>
                                <br>
                                <div>
                                    <input type="text" name="phone" placeholder="Số điện thoại" >
                                </div>
                                <br>
                                <div>
                                    <input type="text" name="address" placeholder="Địa chỉ giao hàng" >
                                </div>
                                <br>
                                <div>
                                    <input type="text" name="email" placeholder="Email liên hệ" >
                                </div>
                                <br>

                                <div>
                                    <textarea  name="content" ></textarea>
                                </div>
                                <br>
                                <button>Đặt hàng</button>
                            </div>

                        </div><!-- End .summary -->

                        <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE
                                SHOPPING</span><i class="icon-refresh"></i></a>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
    </form>
@endsection
