@extends('adminlte::page')
@section('title', 'Massage Chairs')
@section('content_header')
    <h1>Massage Chairs</h1>
    <a href="{{ route('massage-chairs.create') }}" class="btn btn-primary">Add Massage Chair</a>
@endsection
@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Hiring Price</th>
                <th>Selling Price</th>
                <th>Images</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chairs as $chair)
                <tr>
                    <td>{{ $chair->id }}</td>
                    <td>{{ $chair->name }}</td>
                    <td>{{ $chair->category->name ?? '' }}</td>
                    <td>{{ $chair->hiring_price }}</td>
                    <td>{{ $chair->selling_price }}</td>
                    <td>
                        @foreach($chair->images as $img)
                            <img src="{{ asset('uploads/' . $img->image_path) }}" width="50" height="50" style="object-fit:cover;" />
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('massage-chairs.edit', $chair) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('massage-chairs.add.image', $chair) }}" class="btn btn-warning btn-sm">Add Images</a>
                        <form action="{{ route('massage-chairs.destroy', $chair) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this chair?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
