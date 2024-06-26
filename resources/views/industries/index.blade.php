@extends("layouts.admin")
@section("content")

    <h1>Industries</h1>
    <a href="{{ route('industries.create') }}" class="btn btn-primary">Add Industry</a>
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
            @foreach($industries as $industry)
                <tr>
                    <td>{{ $industry->id }}</td>
                    <td>{{ $industry->name }}</td>
                    <td>
                        @if($industry->image)
                            <img src="{{ asset('storage/' . $industry->image) }}" alt="{{ $industry->name }}" width="50">
                        @endif
                    </td>
                    <td>{{ $industry->status }}</td>
                    <td>
                        <a href="{{ route('industries.edit', $industry->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('industries.destroy', $industry->id) }}" method="POST" style="display:inline-block;">
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