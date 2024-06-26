
@extends("layouts.admin")
@section("content")
   <h1>Create Category</h1>
   <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
       @csrf
       <div class="form-group">
           <label for="name">Name:</label>
           <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
