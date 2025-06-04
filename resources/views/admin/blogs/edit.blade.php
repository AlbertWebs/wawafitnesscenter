@extends('adminlte::page')

@section('title', 'Edit Blog')

@section('content_header')
    <h1>Edit Blog</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
                </div>
                <div class="form-group">
                    <label>Image</label><br>
                    @if($blog->image)
                        <img src="/uploads/{{ $blog->image }}" width="100"><br>
                    @endif
                    <input type="file" name="image" class="form-control mt-2">
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ $blog->slug }}" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="5" required>{{ $blog->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
