<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductImageService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Product\ProductServiceClient;

class ProductController extends Controller
{
    protected $product;
    protected $productImage;

    public function __construct(ProductServiceClient $product, ProductImageService $productImage)
    {
        $this->product = $product;
        $this->productImage = $productImage;
    }

    public function index($id, $slug)
    {
        $product = $this->product->detail($id);
        $productsMore = $this->product->more($id, $product->menu_id);
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
