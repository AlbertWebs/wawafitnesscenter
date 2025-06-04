@extends('adminlte::page')
@section('title', 'Site Settings')
@section('content_header')
    <h1>Site Settings</h1>
@endsection
@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('site-settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Site Name</label>
            <input type="text" name="sitename" class="form-control" value="{{ old('sitename', $setting->sitename ?? '') }}" required>
        </div>
        <div class="form-group">
            <label>Logo</label><br>
            @if(!empty($setting->logo))
                <img src="{{ asset('storage/' . $setting->logo) }}" height="40" alt="Logo"><br>
            @endif
            <input type="file" name="logo" class="form-control-file">
        </div>
        <div class="form-group">
            <label>Favicon</label><br>
            @if(!empty($setting->favicon))
                <img src="{{ asset('storage/' . $setting->favicon) }}" height="24" alt="Favicon"><br>
            @endif
            <input type="file" name="favicon" class="form-control-file">
        </div>
        <div class="form-group">
            <label>Site URL</label>
            <input type="url" name="url" class="form-control" value="{{ old('url', $setting->url ?? '') }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $setting->email ?? '') }}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $setting->phone ?? '') }}">
        </div>
        <button type="submit" class="btn btn-success">Save Settings</button>
    </form>
@endsection
