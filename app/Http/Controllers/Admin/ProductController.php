<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Menu\MenuService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $menu;
    protected $productService;

    public function __construct(ProductService $productService, MenuService $menu)
    {
        $this->productService = $productService;
        $this->menu = $menu;
    }

    public function create()
    {
        return view('admin.products.add', [
            'title' => 'Thêm sản phẩm',
            'menus' => $this->menu->getAll()
        ]);
    }

    public function store(ProductFormRequest $request)
    {
        $this->productService->insert($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.products.list', [
            'title' => 'Danh sách sản phẩm',
            'products' => $this->productService->getAll()
        ]);
    }

}
