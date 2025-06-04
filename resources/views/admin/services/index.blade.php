@extends('adminlte::page')
@section('title', 'Services')
@section('content_header')
    <h1>Services</h1>
    <a href="{{ route('services.create') }}" class="btn btn-primary">Add Service</a>
@endsection
@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->slug }}</td>
                    <td>{{ Str::limit($service->description, 50) }}</td>
                    <td>
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" width="60" height="60" style="object-fit:cover;" />
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('services.edit', $service) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this service?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
