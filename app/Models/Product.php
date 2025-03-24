<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'amount', 'slug', 'photo'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (!$product->slug) {
                $product->slug = Str::slug($product->name);
            }
            if (request()->has('photo')) {
                $product->photo = request()->file('photo')->store('products', 'public');
            }
        });

        static::updating(function ($product) {
            if (!$product->slug) { 
                $product->slug = Str::slug($product->name);
            }
            if (request()->has('photo')) {
                $product->photo = request()->file('photo')->store('products', 'public');
            }
        });

        static::creating(function ($category) {
            if (empty($category->slug) && !empty($category->name)) {
                $category->slug = Str::slug($category->name);
            }
        });
    }
    public function categories():BelongsToMany            
    {
        return $this->belongsToMany(Category::class);
    }
}