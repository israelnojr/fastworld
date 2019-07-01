<?php

namespace App\Http\Controllers;

use App\About;
use App\Slider;
use App\Product;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function page()
    {
        $sliders = Slider::all();
        $abouts = About::all();
        $products = Product::all();
        return view('about', compact('sliders','abouts','products'));
    }
}
