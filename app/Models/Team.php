<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'leader_name',
        'phone',
        'email',
        'coverage_area',
        'is_available',
        'is_active',
    ];

    protected $casts = [
        'coverage_area' => 'array',
        'is_available' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'assigned_team_id');
    }
}
