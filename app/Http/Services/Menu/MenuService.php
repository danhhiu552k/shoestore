<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuService
{
    public function getParent()
    {
        return Menu::where('parent_id', 0)->where('active', 1)->get();
    }

    public function getAll()
    {
        return Menu::orderby('id')->paginate(20);
    }


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

    public function  update($request,$menu) : bool
    {
        if ($request->input('parent_id')!= $menu->id){
            $menu->parent_id = $request->input('parent_id');
        }
        $menu->name =  $request->input('name');

        $menu->description = $request->input('description');
        $menu->content =$request->input('content');
        $menu->thumb = $request->input('thumb');
        $menu->active = $request->input('active');
        $menu->save();

        Session::flash('success', 'Cập Nhập Danh Mục Thành Công');
        return true;

    }

    public function destroy($request)
    {
        $id =(int) $request->input('id');

        $menu = Menu::where('id',$id)->first();

        if($menu){
            return Menu::where('id',$id)->orWhere('parent_id',$id)->delete();
        }

        return false;
    }
}
