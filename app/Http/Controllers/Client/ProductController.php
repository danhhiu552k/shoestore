<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductService;

class ProductController extends Controller
{
    protected $product;

    public function __construct(ProductService $product)
    {
        $this->product = $product;
    }

    public function index($id, $slug)
    {
        $product = $this->product->detail($id);
        $productsMore = $this->product->more($id);

        return view('client.product.detail',
            [
                'title' => $product->name,
                'product' => $product,
                'menus' => $this->product->getMenu(),
                'products' => $productsMore
            ]);
    }
}
