<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\MassageChair;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::first();
        $chairs = MassageChair::with('images', 'category')->get();
        $categories = Category::all();
        return view('front.index', compact('settings', 'chairs', 'categories'));
    }

    public function about(){
        $settings = SiteSetting::first();
        return view('front.about', compact('settings'));
    }

    public function massageChairs($slug){
        $settings = SiteSetting::first();
        $Category = Category::where('slug', $slug)->first();
        $chairs = MassageChair::where('category_id', $Category->id)->get(); 
        return view('front.massage_chairs', compact('settings', 'chairs','Category'));
    }
}
