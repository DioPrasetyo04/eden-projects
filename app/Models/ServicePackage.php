<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    protected $fillable = [
        'service_id',
        'name',
        'slug',
        'price',
        'description',
        'is_recommended',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_recommended' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
