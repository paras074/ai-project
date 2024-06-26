@extends("layouts.admin")
@section("content")
<h1>Categories</h1>
<a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        @if($category->image)
                        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="50">
                        @endif
                    </td>
                    <td>{{ $category->status }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endsection
