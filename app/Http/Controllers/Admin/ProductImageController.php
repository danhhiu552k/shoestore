<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product_image;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function list_image($id)
    {
        $product_images = Product_image::where('product_id', $id)->get();
        return response()->json([
            'error' => false,
            'product_images' => $product_images
        ]);
    }
}
