<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductImageService;
use App\Http\Services\Product\ProductService;

class ProductController extends Controller
{
    protected $product;
    protected $productImage;

    public function __construct(ProductService $product, ProductImageService $productImage)
    {
        $this->product = $product;
        $this->productImage = $productImage;
    }

    public function index($id, $slug)
    {
        $product = $this->product->detail($id);
        $productsMore = $this->product->more($id);
        $productImage = $this->productImage->detail($id);

        return view('client.product.detail',
            [
                'title' => $product->name,
                'product' => $product,
                'menus' => $this->product->getMenu(),
                'productImage' => $productImage,
                'products' => $productsMore
            ]);
    }
}
