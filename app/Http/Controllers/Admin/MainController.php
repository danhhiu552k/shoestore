<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $users = Customer::get();
        return view('admin.home',
            [
                'title' => 'Trang Quản Trị Admin',
                'products' => $products,
                'users' => $users
            ]);
    }
}
