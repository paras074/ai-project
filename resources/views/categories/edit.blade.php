

@extends("layouts.admin")
   @section("content")
   
   <h1>Edit Category</h1>
   <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
       @csrf
       @method('PUT')
       <div class="form-group">
           <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
            @if($category->image)
            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="100">
            @endif
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="yes" {{ $category->status == 'yes' ? 'selected' : '' }}>Yes</option>
                <option value="no" {{ $category->status == 'no' ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @endsection
