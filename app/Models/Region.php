<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function organizations()
    {
        return $this->hasMany(Organization::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
