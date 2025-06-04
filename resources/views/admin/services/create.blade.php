@extends('adminlte::page')
@section('title', 'Add Service')
@section('content_header')
    <h1>Add Service</h1>
@endsection
@section('content')
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
