@extends("layouts.admin")
@section("content")

<h1>Edit Industry</h1>
<form action="{{ route('industries.update', $industry->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $industry->name }}" required>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" class="form-control">
        @if($industry->image)
        <img src="{{ asset('storage/' . $industry->image) }}" alt="{{ $industry->name }}" width="100">
        @endif
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="yes" {{ $industry->status == 'yes' ? 'selected' : '' }}>Yes</option>
                <option value="no" {{ $industry->status == 'no' ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @endsection
