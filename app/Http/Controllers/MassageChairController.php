<?php

namespace App\Http\Controllers;

use App\Models\MassageChair;
use App\Models\Category;
use App\Models\MassageChairImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MassageChairController extends Controller
{
    public function index()
    {
        $chairs = MassageChair::with('category', 'images')->get();
        return view('admin.massage_chairs.index', compact('chairs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.massage_chairs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:massage_chairs,slug',
            'description' => 'required',
            'hiring_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images' => 'required|array|min:4',
        ]);
        $chair = MassageChair::create($request->only(['name', 'slug', 'description', 'hiring_price', 'selling_price', 'category_id']));
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('massage_chairs', 'public');
                MassageChairImage::create([
                    'massage_chair_id' => $chair->id,
                    'image_path' => $path,
                ]);
            }
        }
        return redirect()->route('massage-chairs.index')->with('success', 'Massage chair created successfully.');
    }

    public function edit(MassageChair $massage_chair)
    {
        $categories = Category::all();
        $massage_chair->load('images');
        return view('admin.massage_chairs.edit', compact('massage_chair', 'categories'));
    }

    public function update(Request $request, MassageChair $massage_chair)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:massage_chairs,slug,' . $massage_chair->id,
            'description' => 'required',
            'hiring_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $massage_chair->update($request->only(['name', 'slug', 'description', 'hiring_price', 'selling_price', 'category_id']));
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('massage_chairs', 'public');
                MassageChairImage::create([
                    'massage_chair_id' => $massage_chair->id,
                    'image_path' => $path,
                ]);
            }
        }
        return redirect()->route('massage-chairs.index')->with('success', 'Massage chair updated successfully.');
    }

    public function destroy(MassageChair $massage_chair)
    {
        $massage_chair->images()->delete();
        $massage_chair->delete();
        return redirect()->route('massage-chairs.index')->with('success', 'Massage chair deleted successfully.');
    }
}
