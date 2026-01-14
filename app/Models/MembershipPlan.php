<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipPlan extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'protection_amount',
        'monthly_fee',
        'yearly_fee',
        'min_age',
        'max_age',
        'waiting_period_days',
        'description',
        'terms_conditions',
        'is_recommended',
        'is_active',
        'color',
        'sort_order',
    ];

    protected $casts = [
        'protection_amount' => 'decimal:2',
        'monthly_fee' => 'decimal:2',
        'yearly_fee' => 'decimal:2',
        'is_recommended' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function benefits()
    {
        return $this->hasMany(PlanBenefit::class);
    }

    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }
}
