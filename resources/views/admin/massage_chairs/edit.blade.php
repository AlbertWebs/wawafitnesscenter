@extends('adminlte::page')
@section('title', 'Edit Massage Chair')
@section('content_header')
    <h1>Edit Massage Chair</h1>
@endsection
@section('content')
    <form action="{{ route('massage-chairs.update', $massage_chair) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $massage_chair->name }}" required>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $massage_chair->slug }}" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $massage_chair->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Hiring Price</label>
            <input type="number" step="0.01" name="hiring_price" class="form-control" value="{{ $massage_chair->hiring_price }}" required>
        </div>
        <div class="form-group">
            <label>Selling Price</label>
            <input type="number" step="0.01" name="selling_price" class="form-control" value="{{ $massage_chair->selling_price }}" required>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" @if($cat->id == $massage_chair->category_id) selected @endif>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Images (add more if needed)</label>
            <input type="file" name="images[]" class="form-control" multiple>
            <div class="mt-2">
                @foreach($massage_chair->images as $img)
                    <img src="{{ asset('storage/' . $img->image_path) }}" width="50" height="50" style="object-fit:cover; margin-right:5px;" />
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('massage-chairs.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
