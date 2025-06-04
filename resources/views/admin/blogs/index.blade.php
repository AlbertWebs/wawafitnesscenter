@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
    <h1>Blogs</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary float-right">Add Blog</a>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>@if($blog->image)<img src="{{url('/')}}/uploads/{{ $blog->image }}" width="80">@endif</td>
                            <td>{{ $blog->slug }}</td>
                            <td>
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this blog?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
