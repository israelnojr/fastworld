<?php

namespace App\Http\Controllers;

use App\About;
use App\Slider;
use App\Product;
use App\Project;
use App\Category;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $abouts = About::all();
        $categories = Category::all();
        $products = Product::all();
        $projects = Project::all();
        return view('projects',compact('sliders','abouts','categories','products','projects'));
    }

    public function show($id)
    {
        $sliders = Slider::all();
        $abouts = About::all();
        $project = Project::where('id', $id)->first();
        $products = Product::all();
        return view('project', compact('sliders','abouts','project','products'));
    }
}
