@extends("layouts.admin")
@section("content")

<div class="container my-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Products</h4>
                <a href="{{ route('products.create') }}" class="btn btn-light">Add Product</a>
            </div>
        </div>
        
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 5%;">#</th>
                            <th style="width: 10%;">Image</th>
                            <th style="width: 15%;">Name</th>
                            <th style="width: 10%;">Category</th>
                            <th style="width: 10%;">Subcategory</th>
                            <th style="width: 10%;">Industry</th>
                            <th style="width: 8%;">Price</th>
                            <th style="width: 8%;">Discounted Price</th>
                            <th style="width: 10%;">Tags</th>
                            <th style="width: 10%;">Is Best Selling</th> <!-- New column -->
                            <th style="width: 12%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $serialNumber = 1; // Initialize serial number counter
                        @endphp
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $serialNumber }}</td>
                            <td>
                                @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width: 100px;">
                                @else
                                N/A
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name ?? 'N/A' }}</td>
                            <td>{{ $product->subcategory->name ?? 'N/A' }}</td>
                            <td>{{ $product->industry->name ?? 'N/A' }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td>
                                @if ($product->discounted_price)
                                ${{ number_format($product->discounted_price, 2) }}
                                @else
                                N/A
                                @endif
                            </td>
                            <td>
                                @if (!empty($product->tags))
                                @foreach ($product->tags as $tag)
                                <span class="badge bg-primary">{{ $tag }}</span>
                                @endforeach
                                @else
                                N/A
                                @endif
                            </td>
                            <td>
                                @if ($product->is_best_selling)
                                <span class="badge bg-success">Yes</span>
                                @else
                                <span class="badge bg-secondary">No</span>
                                @endif
                            </td> <!-- Display whether product is best selling or not -->
                            <td>
                                <div class="d-flex">
                                    <button class="btn btn-sm btn-info me-2" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-secondary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productModalLabel{{ $product->id }}">Product Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
                                                @else
                                                <p>No image available</p>
                                                @endif
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>Category:</strong> {{ $product->category->name ?? 'N/A' }}</p>
                                                <p><strong>Subcategory:</strong> {{ $product->subcategory->name ?? 'N/A' }}</p>
                                                <p><strong>Industry:</strong> {{ $product->industry->name ?? 'N/A' }}</p>
                                                <p><strong>Name:</strong> {{ $product->name }}</p>
                                                <p><strong>Short Description:</strong> {{ $product->short_description ?: 'N/A' }}</p>
                                                <p><strong>Long Description:</strong> {{ $product->long_description ?: 'N/A' }}</p>
                                                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                                                <p><strong>Discounted Price:</strong>
                                                    @if ($product->discounted_price)
                                                    ${{ number_format($product->discounted_price, 2) }}
                                                    @else
                                                    N/A
                                                    @endif
                                                </p>
                                                <p><strong>Tags:</strong>
                                                    @if (!empty($product->tags))
                                                    @foreach ($product->tags as $tag)
                                                    <span class="badge bg-primary">{{ $tag }}</span>
                                                    @endforeach
                                                    @else
                                                    N/A
                                                    @endif
                                                </p>
                                                <p><strong>Is Best Selling:</strong>
                                                    @if ($product->is_best_selling)
                                                    <span class="badge bg-success">Yes</span>
                                                    @else
                                                    <span class="badge bg-secondary">No</span>
                                                    @endif
                                                </p> <!-- Display whether product is best selling or not -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $serialNumber++; // Increment serial number
                        @endphp
                        @empty
                        <tr>
                            <td colspan="11" class="text-center">No products found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
