<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanBenefit extends Model
{
    protected $fillable = [
        'membership_plan_id',
        'title',
        'description',
        'icon',
        'is_included',
        'quantity',
        'sort_order',
    ];

    protected $casts = [
        'is_included' => 'boolean',
    ];

    public function plan()
    {
        return $this->belongsTo(MembershipPlan::class, 'membership_plan_id');
    }
}
