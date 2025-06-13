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
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'hiring_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = $request->only(['name', 'description', 'hiring_price', 'selling_price', 'category_id']);
        $data['slug'] = Str::slug($request->name);
      
        $chair = MassageChair::create($data);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('massage_chairs', 'public');
            MassageChairImage::create([
                'massage_chair_id' => $chair->id,
                'image_path' => $path,
            ]);
        }
        return redirect()->route('massage-chairs.index')->with('success', 'Massage chair created successfully.');
    }

    public function edit(MassageChair $massage_chair)
    {
        $categories = Category::all();
        $massage_chair->load('images');
        return view('admin.massage_chairs.edit', compact('massage_chair', 'categories'));
    }

    public function addImages($massage_chair)
    {
        $MassageChairImage = MassageChairImage::where('massage_chair_id', $massage_chair)->first();
        return view('admin.massage_chairs.addImages', compact('MassageChairImage'));
    }

    

    public function update(Request $request, MassageChair $massage_chair)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'hiring_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = $request->only(['name', 'description', 'hiring_price', 'selling_price', 'category_id']);
        $data['slug'] = Str::slug($request->name);
        $massage_chair->update($data);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName(); // optionally make filename unique
                $destinationPath = public_path('/uploads/massage_chairs');
                
                // Ensure the directory exists
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }

                $image->move($destinationPath, $filename);

                // Save relative path for public access (if using it in frontend)
                MassageChairImage::create([
                    'massage_chair_id' => $massage_chair->id,
                    'image_path' => 'massage_chairs/' . $filename,
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
