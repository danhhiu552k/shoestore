<?php

namespace App\Http\Controllers\Client;

use App\Http\Services\Product\ProductService;
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
            'products_hot' => $this->product->show('hot'),
            'banners' => $this->slider->show()
        ]);
    }
}
