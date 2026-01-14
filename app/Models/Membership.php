<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [
        'user_id',
        'membership_plan_id',
        'membership_number',
        'status',
        'start_date',
        'end_date',
        'next_billing_date',
        'total_paid',
        'beneficiary_name',
        'beneficiary_phone',
        'beneficiary_relation',
        'digital_will',
        'funeral_wishes',
        'notes',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'next_billing_date' => 'date',
        'total_paid' => 'decimal:2',
        'funeral_wishes' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(MembershipPlan::class, 'membership_plan_id');
    }

    public function payments()
    {
        return $this->hasMany(MembershipPayment::class);
    }
}
