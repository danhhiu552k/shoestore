<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menu;

    public function __construct(MenuService $menu)
    {
        $this->menu = $menu;
    }

    public function index(Request $request, $id, $slug)
    {
        $menu = $this->menu->getId($id, $slug);

        $products = $this->menu->getProduct($menu);

        return view('client.product.list', [
            'title' => 'Danh sách sản phẩm',
            'menu' => $menu,
            'products' => $products
        ]);
    }


}
