@extends('adminlte::page')
@section('title', 'Edit Massage Chair Images')
@section('content_header')
    <h1>Edit Massage Chair</h1>
@endsection
@section('content')
    <form action="{{ route('massage-chairs.update', $MassageChairImage) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      
      
        <div class="form-group">
            <label>Images (add more if needed)</label>
            <input type="file" name="images[]" class="form-control" multiple>
            <div class="mt-2">
                
                    <img src="{{ asset('storage/' . $MassageChairImage->image_path) }}" width="50" height="50" style="object-fit:cover; margin-right:5px;" />
              
            </div>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('massage-chairs.index') }}" class="btn btn-secondary">Back</a>
    </form>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('textarea[name="description"]'))
    .catch(error => {
      console.error(error);
    });
</script>
@endsection
