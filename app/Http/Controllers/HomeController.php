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
}
