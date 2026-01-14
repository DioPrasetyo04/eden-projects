<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipPayment extends Model
{
    protected $fillable = [
        'membership_id',
        'amount',
        'payment_method',
        'payment_date',
        'period_start',
        'period_end',
        'transaction_id',
        'status',
        'receipt_path',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'payment_date' => 'datetime',
        'period_start' => 'date',
        'period_end' => 'date',
    ];

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }
}
