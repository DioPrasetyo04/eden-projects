<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'type',
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'service_id',
        'product_id',
        'preferred_contact',
        'status',
        'responded_by',
        'responded_at',
        'notes',
    ];

    protected $casts = [
        'responded_at' => 'datetime',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function respondedBy()
    {
        return $this->belongsTo(User::class, 'responded_by');
    }
}
