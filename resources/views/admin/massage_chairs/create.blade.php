@extends('adminlte::page')
@section('title', 'Add Massage Chair')
@section('content_header')
    <h1>Add Massage Chair</h1>
@endsection
@section('content')
    <form action="{{ route('massage-chairs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
       
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Hiring Price</label>
            <input type="number" step="0.01" name="hiring_price" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Selling Price</label>
            <input type="number" step="0.01" name="selling_price" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Images (at least 4)</label>
            <input type="file" name="image" class="form-control" multiple required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('massage-chairs.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
