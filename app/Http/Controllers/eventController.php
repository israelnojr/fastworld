<?php

namespace App\Http\Controllers;

use App\About;
use App\Event;
use App\Slider;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $abouts = About::all();
        $categories = Category::all();
        $products = Product::all();
        $events = Event::all();
        return view('events',compact('sliders','abouts','categories','products','events'));
    }
}
