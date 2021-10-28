<?php

namespace App\Http\Services\Sliders;

use App\Models\Slider;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class SliderService
{
    public function createadd($request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = date("Y-m-d H:i:s");
        $name = $request->input('name');
        $description = $request->input('description');
        $active = $request->input('active');
        $link = $request->input('link');
        $thumb = $request->input('thumb');
        try {
            Slider::insert([
                'name' => $name,
                'active' => $active,
                'description' => $description,
                'link' => $link,
                'thumb' => $thumb,
                'created_at' => $date,
                'updated_at' => $date
            ]);
            Session::flash('success', 'Thêm slider thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm slider lỗi ' . $err);
            return false;
        }
    }


    public function show()
    {
        return Slider::where('active', 1)->get();
    }
    
    public function update($request,$slider)
    {
        try {
            $slider ->fill($request ->input());
            $slider->save();
            Session::flash('success', 'Sửa slider thành công');
        }
        catch (\Exception $err){
            Session::flash('error', 'Sửa slider lỗi');
            Log::info($err);
            return false;
        }

        return true;

    }

    public function get()
    {
        return Slider::orderBy('id')->paginate(15);
    }
}