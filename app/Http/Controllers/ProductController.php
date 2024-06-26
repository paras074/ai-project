<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Industry;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index' , compact('products'));
    }

    public function dashboard()
    {
        $products = Product::all();
        return view('admin.dashboard' , compact('products'));
    
    }

    public function productlisting()
    {
        $products = Product::all();
        $categories = Category::where('status', 'yes')->get(); // Fetch categories with status 'yes'
        $industries = Industry::where('status', 'yes')->get(); // Fetch industries with status 'yes'
        $defaultproducts = Product::where('is_best_selling', 'no')->get(); // Fetch industries with status 'yes'
        $subcategories = Subcategory::where('status', 'yes')->get(); // Fetch categories with status 'yes'

        $allTags = $products->flatMap(function ($product) {
            if (is_string($product->tags)) {
                return explode(',', $product->tags);
            } elseif (is_array($product->tags)) {
                return $product->tags;
            } else {
                return [];
            }
        })->unique()->filter()->values();

        return view('products-listing', compact('products', 'categories','industries' , 'defaultproducts' , 'subcategories', 'allTags'));
    }

    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $industries = Industry::all();

        return view('products.create', compact('categories', 'subcategories', 'industries'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'industry_id' => 'required',
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:500',
            'long_description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'discounted_price' => 'nullable|numeric|min:0',
            'tags' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // Example: max 2MB for image upload
            'is_best_selling' => 'nullable|boolean', // Validate boolean input for is_best_selling
        ]);

        // Convert tags from comma-separated string to array
        $tags = $validatedData['tags'] ? explode(',', $validatedData['tags']) : [];

        // Handle file upload if applicable
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        // Create new product
        $product = new Product();
        $product->category_id = $validatedData['category_id'];
        $product->subcategory_id = $validatedData['subcategory_id'];
        $product->industry_id = $validatedData['industry_id'];
        $product->name = $validatedData['name'];
        $product->short_description = $validatedData['short_description'];
        $product->long_description = $validatedData['long_description'];
        $product->price = $validatedData['price'];
        $product->discounted_price = $validatedData['discounted_price'];
        $product->tags = $tags;
        $product->image = $imagePath;
        $product->is_best_selling = $request->has('is_best_selling'); // Set is_best_selling field
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
                return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $industries = Industry::all();

        return view('products.edit', compact('product', 'categories', 'subcategories', 'industries'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
            'industry_id' => 'required|exists:industries,id',
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:500',
            'long_description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'discounted_price' => 'nullable|numeric|min:0',
            'tags' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // Example: max 2MB for image upload
            'is_best_selling' => 'nullable|boolean', // Validate boolean input for is_best_selling

        ]);

        // Update product fields
        $product->category_id = $validatedData['category_id'];
        $product->subcategory_id = $validatedData['subcategory_id'];
        $product->industry_id = $validatedData['industry_id'];
        $product->name = $validatedData['name'];
        $product->short_description = $validatedData['short_description'];
        $product->long_description = $validatedData['long_description'];
        $product->price = $validatedData['price'];
        $product->discounted_price = $validatedData['discounted_price'];


        // Handle tags (convert comma-separated values into an array)
        if ($request->tags) {
            $tags = explode(',', $request->tags);
            $product->tags = $tags;
        } else {
            $product->tags = [];
        }

        // Handle image update if needed
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->is_best_selling = $request->has('is_best_selling');


        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
