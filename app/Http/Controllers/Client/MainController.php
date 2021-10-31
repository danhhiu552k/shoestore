<?php

namespace App\Http\Controllers\Client;

use App\Http\Services\Product\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Sliders\SliderService;

class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;

    public function __construct(SliderService $slider, MenuService $menu, ProductService $product)
    {
        $this->slider = $slider;
        $this->menu = $menu;
        $this->product = $product;
    }

    public function index()
    {

        return view('client.home', [
            'title' => 'Cửa hàng bán giày Nhóm4',
            'sliders' => $this->slider->show(),
            'products' => $this->product->show('price_sale'),
            'products_new' => $this->product->show('new'),
            'products_hot' => $this->product->show('hot'),
            'banners' => $this->slider->show()
        ]);
    }

    public function search(Request $request)
    {

        $key_product = $request->products;
        $products = Product::where('active', 1)->where('name', 'LIKE', '%' . $key_product . '%')->paginate(12);
        return view('client.product.list',
            [
                'title' => 'Tìm kiếm sản phẩm',
                'products' => $products
            ]);
    }
}
