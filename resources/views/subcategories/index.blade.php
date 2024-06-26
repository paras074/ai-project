
@extends("layouts.admin")
@section("content")
<h1>Subcategories</h1>
<a href="{{ route('subcategories.create') }}" class="btn btn-primary mb-3">Add Subcategory</a>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<table class="table table-bordered">
    <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subcategories as $subcategory)
            <tr>
                <td>{{ $subcategory->id }}</td>
                <td>{{ $subcategory->category ? $subcategory->category->name : 'N/A' }}</td> <!-- Handle null category -->
                <td>{{ $subcategory->name }}</td>
                <td>
                    @if($subcategory->image)
                    <img src="{{ asset('storage/' . $subcategory->image) }}" alt="{{ $subcategory->name }}" width="50">
                    @endif
                </td>
                <td>{{ $subcategory->status }}</td>
                <td>
                    <a href="{{ route('subcategories.edit', $subcategory->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('subcategories.destroy', $subcategory->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this subcategory?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
    
    @endsection
