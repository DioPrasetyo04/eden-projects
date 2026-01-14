<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_category_id',
        'religion_id',
        'name',
        'slug',
        'description',
        'short_description',
        'base_price',
        'price_type',
        'duration_days',
        'is_available_24h',
        'coverage_area',
        'is_featured',
        'is_active',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'base_price' => 'decimal:2',
        'is_available_24h' => 'boolean',
        'coverage_area' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }

    public function benefits()
    {
        return $this->hasMany(ServiceBenefit::class);
    }

    public function packages()
    {
        return $this->hasMany(ServicePackage::class);
    }
}
