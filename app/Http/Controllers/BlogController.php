<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   

    // ADMIN: List all blogs
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    // ADMIN: Show create form
    public function create()
    {
        return view('admin.blogs.create');
    }

    // ADMIN: Store new blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = $request->only(['title', 'description']);
        $data['slug'] = \Str::slug($request->title);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }
        Blog::create($data);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }
    
       // ADMIN: Show edit form
    public function show($id)
    {
        $Blog = Blog::findOrFail($id);
        return view('front.blog', compact('Blog'));
    }
    // ADMIN: Show edit form
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    // ADMIN: Update blog
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = $request->only(['title', 'description']);
        $data['slug'] = \Str::slug($request->title);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }
        $blog->update($data);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    // ADMIN: Delete blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image) {
            \Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
