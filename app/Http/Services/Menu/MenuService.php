<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuService
{

    public function create($request)
    {
        try {
            Menu::create([
                'name' => $request->input('name'),
                'parent_id' => $request->input('parent_id'),
                'description' => $request->input('description'),
                'content' => $request->input('content'),
                'thumb' => $request->input('thumb'),
                'slug' => Str::slug((string)$request->input('name'), '-'),
                'active' => $request->input('active')
            ]);
            Session::flash('success', 'Thêm Danh Mục Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm Danh Mục Lỗi: ' . $err->getMessage());
            return false;
        }
        return true;
    }
}
