<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_number',
        'order_type',
        'status',
        'subtotal',
        'discount',
        'tax',
        'management_fee',
        'total',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
        'deceased_name',
        'deceased_religion_id',
        'service_date',
        'service_location',
        'notes',
        'assigned_team_id',
        'completed_at',
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'discount' => 'decimal:2',
        'tax' => 'decimal:2',
        'management_fee' => 'decimal:2',
        'total' => 'decimal:2',
        'service_date' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'assigned_team_id');
    }

    public function deceasedReligion()
    {
        return $this->belongsTo(Religion::class, 'deceased_religion_id');
    }
}
