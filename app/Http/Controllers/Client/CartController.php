<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService=$cartService;

    }

    public function index(Request $request)
    {

        $result=$this->cartService -> addcartproduct($request);
        if ($result==false){
            return redirect()->back();
        }
        return redirect()->route('carts');
    }

    public function show()
    {
        $products =$this->cartService->getProduct();
        return view('client.cart.list', [
            'title' => 'Giỏ Hàng',
            'products'=>$products,
            'carts' => Session::get('carts')
        ]);
    }
    public function update(Request $request)
    {
       $this->cartService->update($request);
       return redirect('/carts');
    }
}
