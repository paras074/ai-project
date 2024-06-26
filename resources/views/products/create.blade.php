@extends("layouts.admin")
@section("content")

<div class="container my-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Add New Product</h4>
        </div>
        
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Category -->
                <div class="form-group mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-control" id="category_id" name="category_id" required>
                        <option value="" disabled selected>Select a category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Subcategory -->
                <div class="form-group mb-3">
                    <label for="subcategory_id" class="form-label">Subcategory</label>
                    <select class="form-control" id="subcategory_id" name="subcategory_id" required>
                        <option value="" disabled selected>Select a subcategory</option>
                        @foreach($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Industry -->
                <div class="form-group mb-3">
                    <label for="industry_id" class="form-label">Industry</label>
                    <select class="form-control" id="industry_id" name="industry_id" required>
                        <option value="" disabled selected>Select an industry</option>
                        @foreach($industries as $industry)
                        <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Name -->
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" required>
                </div>
                
                <!-- Short Description -->
                <div class="form-group mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <textarea class="form-control" id="short_description" name="short_description" rows="3" placeholder="Enter a short description"></textarea>
                </div>
                
                <!-- Long Description -->
                <div class="form-group mb-3">
                    <label for="long_description" class="form-label">Long Description</label>
                    <textarea class="form-control" id="long_description" name="long_description" rows="5" placeholder="Enter a detailed description"></textarea>
                </div>
                
                <!-- Price -->
                <div class="form-group mb-3">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" placeholder="Enter price" required>
                    </div>
                </div>
                
                <!-- Discounted Price -->
                <div class="form-group mb-3">
                    <label for="discounted_price" class="form-label">Discounted Price</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="discounted_price" name="discounted_price" min="0" step="0.01" placeholder="Enter discounted price (if any)">
                    </div>
                </div>
                
                <!-- Tags -->
                <div class="form-group mb-3">
                    <label for="tags" class="form-label">Tags (comma-separated)</label>
                    <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags">
                </div>
                
                <!-- Image Upload -->
                <div class="form-group mb-4">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <!-- Is Best Selling Checkbox -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="is_best_selling" name="is_best_selling" value="1">
                    <label class="form-check-label" for="is_best_selling">
                        Is Best Selling
                    </label>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
