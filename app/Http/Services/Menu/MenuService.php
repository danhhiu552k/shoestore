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
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date =  date_default_timezone_get();
            Menu::create([
                'name' => $request->input('name'),
                'parent_id' => $request->input('parent_id'),
                'description' => $request->input('description'),
                'content' => $request->input('content'),
                'thumb' => $request->input('thumb'),
                'slug' => Str::slug((string)$request->input('name'), '-'),
                'active' => $request->input('active'),
                'created_at' =>  $date,
                'updated_at' =>  $date
            ]);
            Session::flash('success', 'Thêm Danh Mục Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm Danh Mục Lỗi: ' . $err->getMessage());
            return false;
        }
        return true;
    }

<<<<<<< HEAD
    public function  update($request, $menu): bool
    {
        if ($request->input('parent_id') != $menu->id) {
=======
    public function  update($request,$menu) : bool
    {
        if ($request->input('parent_id')!= $menu->id){
>>>>>>> 5d00466800bcb12153d78cc97c7f97cc0ed94aa1
            $menu->parent_id = $request->input('parent_id');
        }
        $menu->name =  $request->input('name');

        $menu->description = $request->input('description');
<<<<<<< HEAD
        $menu->content = $request->input('content');
        $menu->thumb = $request->input('thumb');
        $menu->active = $request->input('active');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date =  date_default_timezone_get();
        $menu->updated_at = $date;
=======
        $menu->content =$request->input('content');
        $menu->thumb = $request->input('thumb');
        $menu->active = $request->input('active');
>>>>>>> 5d00466800bcb12153d78cc97c7f97cc0ed94aa1
        $menu->save();

        Session::flash('success', 'Cập Nhập Danh Mục Thành Công');
        return true;
<<<<<<< HEAD
=======

>>>>>>> 5d00466800bcb12153d78cc97c7f97cc0ed94aa1
    }

    public function destroy($request)
    {
<<<<<<< HEAD
        $id = (int) $request->input('id');

        $menu = Menu::where('id', $id)->first();

        if ($menu) {
            return Menu::where('id', $id)->orWhere('parent_id', $id)->delete();
=======
        $id =(int) $request->input('id');

        $menu = Menu::where('id',$id)->first();

        if($menu){
            return Menu::where('id',$id)->orWhere('parent_id',$id)->delete();
>>>>>>> 5d00466800bcb12153d78cc97c7f97cc0ed94aa1
        }

        return false;
    }
}
