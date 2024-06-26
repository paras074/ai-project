div
@extends("layouts.admin")
@section("content")
<h1>Edit Subcategory</h1>
<form action="{{ route('subcategories.update', $subcategory->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="category_id">Category:</label>
        <select name="category_id" class="form-control" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $subcategory->name }}" required>
    </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
            @if($subcategory->image)
            <img src="{{ asset('storage/' . $subcategory->image) }}" alt="{{ $subcategory->name }}" width="100">
            @endif
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="yes" {{ $subcategory->status == 'yes' ? 'selected' : '' }}>Yes</option>
                <option value="no" {{ $subcategory->status == 'no' ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @endsection
