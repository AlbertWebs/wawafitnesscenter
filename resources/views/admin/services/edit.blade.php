@extends('adminlte::page')
@section('title', 'Edit Service')
@section('content_header')
    <h1>Edit Service</h1>
@endsection
@section('content')
    <form action="{{ route('services.update', $service) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $service->slug }}" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $service->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Image</label><br>
            @if($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" width="80" height="80" style="object-fit:cover;" /><br>
            @endif
            <input type="file" name="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
