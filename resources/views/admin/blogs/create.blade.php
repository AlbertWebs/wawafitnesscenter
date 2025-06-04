@extends('adminlte::page')

@section('title', 'Add Blog')

@section('content_header')
    <h1>Add Blog</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
