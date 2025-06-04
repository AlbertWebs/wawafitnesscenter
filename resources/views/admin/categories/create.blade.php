@extends('adminlte::page')
@section('title', 'Add Category')
@section('content_header')
    <h1>Add Category</h1>
@endsection
@section('content')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
