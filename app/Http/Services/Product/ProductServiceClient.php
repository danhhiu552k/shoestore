<?php


namespace App\Http\Services\Product;


use App\Models\Menu;
use App\Models\Product;

class ProductServiceClient
{

    #Show sản phẩm ra main page
    public function show($value)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = date("m");
        $products = '';
        if ($value == 'hot') {
            $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity', 'hot')
                ->where('active', 1)->inRandomOrder()->where($value, 1)->take(7)->get();
        } elseif ($value == 'price_sale') {
            $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity', 'hot')
                ->where('active', 1)->inRandomOrder()->whereNotNull($value)->take(7)->get();
        } elseif ($value == 'new') {
            $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity', 'hot')
                ->where('active', 1)->inRandomOrder()->whereMonth('created_at', $date)->take(7)->get();
        }
        return $products;
    }

    #Details sản phẩm
//
//    public function detail($id, $slug)
//    {
//        $product = Product::select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity', 'content', 'description')
//            ->where('id', $id)->get();
//        return $product;
//    }

    public function getMenu()
    {
        return Menu::where('active', 1)->get();
    }

    public function detail($id)
    {
        return Product::select('id', 'name', 'price', 'price_sale', 'quantity', 'description', 'content', 'thumb', 'menu_id')
            ->where('id', $id)
            ->where('active', 1)
            ->with('menu')
            ->firstOrFail();
    }

    public function more($id, $menu_id)
    {
        $menus = Menu::select('id', 'parent_id')->where('active', 1)->get();
        $menu_parent = Menu::select('parent_id')->where('id', $menu_id)->get();
        $menus_id = Product::select('menu_id')->where('id', $id)->get();
        $m='';
        $p='';
        foreach ($menus_id as $item) {
            $m = $item->menu_id;
        }
        foreach ($menu_parent as $item) {
            $p = $item->parent_id;
        }

        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('menu_id',$this->isChild($menus, $m, $p))
            ->inRandomOrder()
            ->where('id', '!=', $id)
            ->orderByDesc('id')
            ->limit(8)
            ->get();
    }

    public function isChild($menus, $id, $menu_parent)
    {
        $arr = array();
        foreach ($menus as $menu) {
            if ($menu->parent_id == $id) {
                $arr[] = $menu->id;
            }
        }

        $arr[] = $menu_parent;

        return $arr;
    }

    public function tag($name)
    {
        switch ($name) {
            case 'sale':
                $products = $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity')
                    ->where('active', 1)->inRandomOrder()->whereNotNull('price_sale')->take(7)->paginate(12);
                return $products;
                break;
            case 'hot':
                $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity')
                    ->where('active', 1)->inRandomOrder()->where('hot', 1)->take(7)->paginate(12);
                return $products;
                break;
            case 'new':
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $date = date("m");
                $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb', 'quantity')
                    ->where('active', 1)->inRandomOrder()->whereMonth('created_at', $date)->take(7)->paginate(12);
                return $products;
                break;
            default:
                return 'abc';
        }
    }
}
