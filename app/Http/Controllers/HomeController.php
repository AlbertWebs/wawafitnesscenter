<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\MassageChair;
use App\Models\Category;
use App\Models\Blog;
use Mail;

class HomeController extends Controller
{
    public function home()
{
    return view('home');
}
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
      public function airport(){
        $settings = SiteSetting::first();
        return view('front.airport', compact('settings'));
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

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Example: Send email (optional, or you could store in DB)
        Mail::raw("Message from: {$validated['name']}\nPhone: {$validated['number']}\n\n{$validated['message']}", function($mail) use ($validated) {
            $mail->to('info@wawafitnesscenter.co.ke')
                ->subject($validated['subject'])
                ->from($validated['email'], $validated['name']);
        });

        return response()->json(['success' => true, 'message' => 'Message sent successfully.']);
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
     public function copyright(){
        return view('front.copyright');
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
