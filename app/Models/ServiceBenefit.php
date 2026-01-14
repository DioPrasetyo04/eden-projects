<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceBenefit extends Model
{
    protected $fillable = [
        'service_id',
        'title',
        'description',
        'icon',
        'sort_order',
        'is_highlighted',
    ];

    protected $casts = [
        'is_highlighted' => 'boolean',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
