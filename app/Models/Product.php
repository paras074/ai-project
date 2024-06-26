<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'subcategory_id', 'industry_id', 'name', 'short_description', 'long_description', 'price', 'discounted_price', 'tags', 'image' , 'is_best_selling',
    ];


    protected $casts = [
        'tags' => 'array',
      'is_best_selling' => 'boolean', // Ensure the field is cast to boolean

    ];
    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    } 

    /**
     * Get the subcategory that owns the product.
     */
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    /**
     * Get the industry that owns the product.
     */
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
}
