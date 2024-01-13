<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'name',
    ];

    public function organizations()
    {
        return $this->hasMany(Organization::class);
    }

    public function regions()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
