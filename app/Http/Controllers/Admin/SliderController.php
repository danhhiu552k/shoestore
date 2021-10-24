<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Http\Services\Sliders\SliderService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $sliderservice;

    public function __construct(SliderService $sliderService)
    {
        $this->sliderservice=$sliderService;
    }
    public function create()
    {

        return view('admin.slider.add',['title'=>'Thêm slider']);
   }

    public function store(SliderRequest $request)
    {
        $this->sliderservice->createadd($request);
        return redirect()->back();
   }



}
