<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\MassageChair;
use App\Models\Category;
use App\Models\Blog;

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
        $Cats = Category::where('slug', $slug)->get();
        $chairs = MassageChair::where('category_id', $Category->id)->paginate('6'); 
        return view('front.massage_chairs', compact('settings', 'chairs','Category','slug','Cats'));
    }

    public function massageChairsSingle($category,$slug){
         $Chair = MassageChair::where('slug', $slug)->first();
         return view('front.massage_chairs_single', compact('Chair'));
    }
    
    public function healthBenefits(){
        return view('front.healthBenefits');
    }
    public function contact(){
        return view('front.contact');
    }

    public function news(){
        $settings = SiteSetting::first();
        $chairs = MassageChair::with('images', 'category')->get();
        $categories = Category::all();
        $Blog = Blog::all();
        return view('front.news', compact('settings', 'chairs', 'categories','Blog'));
    }

    public function show($id)
    {
        $Blog = Blog::where('slug',$id)->get();
        return view('front.blog', compact('Blog'));
    }

    public function massageChairsForHire(){
        return view('front.massageChairsForHire');
    }

    public function termsAndConditions(){
        return view('front.terms');
    }
    public function privacyPolicy(){
        return view('front.privacy');
    }
    public function cookiePolicy(){
        return view('front.cookie');
    }
    public function returnPolicy(){
        return view('front.return');
    }

    
}
