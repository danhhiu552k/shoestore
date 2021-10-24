<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Sliders\SliderService;

class MainController extends Controller
{
    protected $slider;

    public function __construct(SliderService $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        return view('client.home', [
            'title' => 'Cửa hàng bán giày Nhóm4',
            'sliders' => $this->slider->show()
        ]);
    }
}
