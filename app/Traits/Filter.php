<?php


namespace App\Traits;


use App\Http\Services\Menu\MenuService;
use App\Models\Product;

trait Filter
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function filtersort($sort, $id, $slug)
    {
        if ($id != '' && $slug != '') {
            $menu = $this->menuService->getId($id, $slug);
            switch ($sort) {
                case "asc":
                    $products = $menu->products()
                        ->select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity')
                        ->selectRaw(" CASE WHEN price_sale is null THEN price ELSE price_sale END AS sort")
                        ->where('active', 1)->orderBy('sort')->paginate(12);
                    return $products;
                case "desc":
                    $products = $menu->products()
                        ->select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity')
                        ->selectRaw(" CASE WHEN price_sale is null THEN price ELSE price_sale END AS sort")
                        ->where('active', 1)->orderByDesc('sort')->paginate(12);
                    return $products;
                case "random":
                    $products = $menu->products()
                        ->select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity')
                        ->where('active', 1)->inRandomOrder()->paginate(12);
                    return $products;
                default:
                    return null;
            }
        } else {
            switch ($sort) {
                case "asc":
                    $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity')
                        ->selectRaw(" CASE WHEN price_sale is null THEN price ELSE price_sale END AS sort")
                        ->where('active', 1)->orderBy('sort')->paginate(12);
                    return $products;
                case "desc":
                    $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity')
                        ->selectRaw(" CASE WHEN price_sale is null THEN price ELSE price_sale END AS sort")
                        ->where('active', 1)->orderByDesc('sort')->paginate(12);
                    return $products;
                case "random":
                    $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity')
                        ->where('active', 1)->inRandomOrder()->paginate(12);
                    return $products;
                default:
                    return null;
            }
        }

    }
}
