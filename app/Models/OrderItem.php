<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'itemable_type',
        'itemable_id',
        'name',
        'quantity',
        'unit_price',
        'subtotal',
        'notes',
    ];

    protected $casts = [
        'unit_price' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function itemable()
    {
        return $this->morphTo();
    }
}
