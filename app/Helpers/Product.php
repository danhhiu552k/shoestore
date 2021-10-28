<?php


namespace App\Helpers;


class Product
{
    public static function active($active = 0)
    {
        return $active == 0 ? '<span class="btn btn-danger btn-xs ">NO</span>'
            : '<span class="btn btn-success btn-xs">YES</span>';
    }

    public static function list($products)
    {
        $html = '';

        foreach ($products as $key => $product) {

            $html .= '
                    <tr>
                        <td id="id" class="text-center">' . $product->id . '</td>
                        <td style="width: 150px;">' . $product->name . '</td>
                        <td>' . number_format($product->price) . '</td>
                        <td><a href="' . $product->thumb . '"  target="_blank"><img src="' . $product->thumb . '" width="100px"></a></td>
                        <td class="text-center">' . self::active($product->active) . '</td>
                        <td>' . $product->updated_at . '</td>
                        <td class="text-center">
                            <a class="btn btn-primary btn-sm" href="/admin/products/edit/' . $product->id . '">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm"
                                onclick="removeRow(' . $product->id . ', \'/admin/products/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                ';
        }
        return $html;
    }


    public static function show_product($products)
    {
        $html = '';

        foreach ($products as $item) {
            $html .= '<div class="product product-3 text-center">
                            <figure class="product-media">
                            <div>
                               ' . self::checksale($item->price, $item->price_sale, $item->hot) . '
                              </div
                                <a href="' . $item->thumb . '">
                                    <img src="' . $item->thumb . '" alt="' . $item->name . '" class="product-image">
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
                                <h3 class="product-title"><a href="product.html">' . $item->name . '</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                ' . self::checkprice($item->price, $item->price_sale) . '
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
                            </div>
                        </div>';
        }

        return $html;
    }

    public static function discount_calculation($price, $price_sale)
    {
        $result = ($price - $price_sale) / $price;
        return round($result * 100);
    }

    public static function checksale($price, $price_sale, $hot)
    {
        $html = '';
        if ($hot == 1) {
            $html .= '<span class="product-label label-sale">Hot</span>';
        }
        if ($price_sale != 0) {
            $html = ' <span class="product-label label-primary">Sale</span>';
            $html .= '<span class="product-label label-hot">' . self::discount_calculation($price, $price_sale) . '% off</span>';
        }
        if ($price == 0 && $price_sale == 0) {
            $html .= '<span class="product-label label-out">Sản phẩm sắp có</span>';
        }
        return $html;
    }

    public static function checkprice($price, $price_sale)
    {
        if ($price_sale != 0) {
            return '<span class="new-price">Now ' . number_format($price_sale) . '</span>
                                    <span class="old-price">' . number_format($price) . '</span>';
        } else {
            return number_format($price);
        }
    }
}
