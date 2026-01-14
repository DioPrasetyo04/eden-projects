<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_category_id',
        'name',
        'slug',
        'sku',
        'description',
        'short_description',
        'price',
        'discount_price',
        'stock',
        'weight',
        'dimensions',
        'material',
        'is_featured',
        'is_active',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'dimensions' => 'array',
        'price' => 'decimal:2',
        'discount_price' => 'decimal:2',
        'weight' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
