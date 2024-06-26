@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Product</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-select form-control-sm">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="subcategory_id" class="form-label">Subcategory</label>
                    <select name="subcategory_id" id="subcategory_id" class="form-select form-control-sm">
                        @foreach ($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}" {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }}>{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                    @error('subcategory_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="industry_id" class="form-label">Industry</label>
                    <select name="industry_id" id="industry_id" class="form-select form-control-sm">
                        @foreach ($industries as $industry)
                        <option value="{{ $industry->id }}" {{ $industry->id == $product->industry_id ? 'selected' : '' }}>{{ $industry->name }}</option>
                        @endforeach
                    </select>
                    @error('industry_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{ old('name', $product->name) }}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <textarea name="short_description" id="short_description" class="form-control form-control-sm">{{ old('short_description', $product->short_description) }}</textarea>
                    @error('short_description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="long_description" class="form-label">Long Description</label>
                    <textarea name="long_description" id="long_description" class="form-control form-control-sm">{{ old('long_description', $product->long_description) }}</textarea>
                    @error('long_description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" id="price" class="form-control form-control-sm" value="{{ old('price', $product->price) }}">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="discounted_price" class="form-label">Discounted Price</label>
                            <input type="number" name="discounted_price" id="discounted_price" class="form-control form-control-sm" value="{{ old('discounted_price', $product->discounted_price) }}">
                            @error('discounted_price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tags" class="form-label">Tags (comma-separated)</label>
                    <input type="text" name="tags" id="tags" class="form-control form-control-sm" value="{{ old('tags', implode(', ', $product->tags ?? [])) }}">
                    @error('tags')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control form-control-sm">
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @if ($product->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-fluid" style="max-width: 300px;">
                    </div>
                    @endif
                </div>

                <!-- Is Best Selling Checkbox -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="is_best_selling" name="is_best_selling" value="1" {{ $product->is_best_selling ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_best_selling">
                        Is Best Selling
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>
</div>
@endsection
