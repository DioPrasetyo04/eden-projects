<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
