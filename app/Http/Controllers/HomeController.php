<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use App\About;
use App\Project;
use App\Event;
use App\Quotation;
use App\Partner;
use Illuminate\Http\Request;
use Symfony\Component\EventDispatcher\Event as SymfonyEvent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $frontCat  = Category::take(4)->inRandomOrder()->get();
        $categories = Category::all();
        $products = Product::take(6)->get();
        $abouts = About::all();
        $projects = Project::all();
        $events = Event::take(4)->inRandomOrder()->get();
        $partners = Partner::all();
        return view('welcome',compact('sliders','categories','products','abouts','projects','events','partners','frontCat'));
    }

}